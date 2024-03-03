<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use App\Models\Post;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_siswa'     => 'required|min:3',
            'kelas'   => 'required|min:2',
            'jurusan' => 'required|min:3'
        ]);
    
        $image = $request->file('gambar');
        $image->storeAs('public/posts', $image->hashName());

        Post::create([
            'gambar'     => $image->hashName(),
            'nama_siswa'     => $request->nama_siswa,
            'kelas'   => $request->kelas,
            'jurusan' => $request->jurusan
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }
  
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'gambar'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_siswa'     => 'required|min:3',
            'kelas'   => 'required|min:2',
            'jurusan' => 'required|min:3'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $post->update([
                'gambar'     => $image->hashName(),
                'nama_siswa'     => $request->nama_siswa,
                'kelas'   => $request->kelas,
                'jurusan' => $request->jurusan
            ]);

        } else {

            //update post without image
            $post->update([
                'nama_siswa'     => $request->nama_siswa,
                'kelas'   => $request->kelas,
                'jurusan' => $request->jurusan
            ]);
        }

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
