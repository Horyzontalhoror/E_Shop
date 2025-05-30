<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // index
        $produks = Produk::with('kategori')->latest()->get();
        return view('admin.produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // tambah produk
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('admin.produk.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategoris,id',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi' => 'nullable|string',
            'informasi' => 'nullable|string',
        ]);

        $gambarPath = null;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = uniqid() . '.' . $file->getClientOriginalExtension();

            $manager = new ImageManager(new GdDriver());

            // Resize proporsional tanpa crop (maksimal lebar 800px)
            $image = $manager->read($file)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio(); // jaga rasio asli
                $constraint->upsize(); // jangan perbesar gambar kecil
            });

            $image->save(public_path('storage/produk/' . $namaFile));

            $gambarPath = 'produk/' . $namaFile;
        }

        Produk::create([
            'nama_produk' => $request->nama,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $gambarPath,
            'slug' => Str::slug($request->nama) . '-' . uniqid(),
            'deskripsi' => $request->deskripsi,
            'informasi' => $request->informasi,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit
        $produk = Produk::findOrFail($id);
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('admin.produk.edit', compact('produk', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategoris,id',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi' => 'nullable|string',
            'informasi' => 'nullable|string',
        ]);

        $produk = Produk::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($produk->gambar && Storage::disk('public')->exists($produk->gambar)) {
                Storage::disk('public')->delete($produk->gambar);
            }

            $file = $request->file('gambar');
            $namaFile = uniqid() . '.' . $file->getClientOriginalExtension();

            $manager = new ImageManager(new GdDriver());
            $image = $manager->read($file)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio(); // Jaga rasio
                $constraint->upsize(); // Hindari pembesaran gambar kecil
            });

            $image->save(public_path('storage/produk/' . $namaFile));

            $produk->gambar = 'produk/' . $namaFile;
        }

        $produk->update([
            'nama_produk' => $request->nama,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $produk->gambar,
            'deskripsi' => $request->deskripsi,
            'informasi' => $request->informasi,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
