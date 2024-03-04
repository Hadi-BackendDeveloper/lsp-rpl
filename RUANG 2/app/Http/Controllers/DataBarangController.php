<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use App\Models\DataBarang;

use Illuminate\Support\Facades\Storage;

class DataBarangController extends Controller
{
    public function index(): View
    {
        $posts = DataBarang::latest()->paginate(5);
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
            'nama_barang'     => 'required|min:3',
            'jumlah_barang'   => 'required|min:1',
            'satuan' => 'required|min:1',
            'harga_barang' => 'required|min:4'
        ]);
    
        $image = $request->file('gambar');
        $image->storeAs('public/gambar', $image->hashName());

        DataBarang::create([
            'gambar'     => $image->hashName(),
            'nama_barang'     => $request->nama_barang,
            'jumlah_barang'   => $request->jumlah_barang,
            'satuan' => $request->satuan,
            'harga_barang' => $request->harga_barang
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function show(string $id): View
    {
        //get post by ID
        $post = DataBarang::findOrFail($id);

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
        $post = DataBarang::findOrFail($id);

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
            'nama_barang'     => 'required|min:3',
            'jumlah_barang'   => 'required|min:1',
            'satuan' => 'required|min:1',
            'harga_barang' => 'required|min:4'
        ]);

        //get post by ID
        $post = DataBarang::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/gambar', $image->hashName());

            //delete old image
            Storage::delete('public/gambar/'.$post->image);

            //update post with new image
            $post->update([
                'gambar'     => $image->hashName(),
                'nama_barang'     => $request->nama_barang,
                'jumlah_barang'   => $request->jumlah_barang,
                'satuan' => $request->satuan,
                'harga_barang' => $request->harga_barang
            ]);

        } else {

            //update post without image
            $post->update([
                'nama_barang'     => $request->nama_barang,
                'jumlah_barang'   => $request->jumlah_barang,
                'satuan' => $request->satuan,
                'harga_barang' => $request->harga_barang
            ]);
        }

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = DataBarang::findOrFail($id);

        //delete image
        Storage::delete('public/images/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
