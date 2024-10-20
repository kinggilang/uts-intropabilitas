<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Menampilkan daftar semua buku.
     */
    public function index()
    {
        // Mendapatkan semua buku dari database
        $bukus = Buku::all();

        // Mengembalikan respon dengan data semua buku
        return response()->json($bukus);
    }

    /**
     * Menambahkan buku baru ke dalam database.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'harga' => 'required|numeric|min:1000',
            'stok' => 'required|integer|min:0',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        // Menyimpan data buku baru ke dalam database
        $buku = Buku::create($validatedData);

        // Mengembalikan respon dengan data buku yang baru ditambahkan
        return response()->json([
            'message' => 'Buku berhasil ditambahkan',
            'data' => $buku
        ], 201);
    }

    /**
     * Menampilkan detail buku berdasarkan ID.
     */
    public function show($id)
    {
        // Mencari buku berdasarkan ID
        $buku = Buku::find($id);

        // Jika buku tidak ditemukan, kembalikan respon error
        if (!$buku) {
            return response()->json([
                'message' => 'Buku tidak ditemukan'
            ], 404);
        }

        // Jika buku ditemukan, kembalikan respon dengan data buku
        return response()->json($buku);
    }

    /**
     * Mengupdate data buku yang ada.
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'judul' => 'sometimes|required|string|max:255',
            'penulis' => 'sometimes|required|string|max:255',
            'harga' => 'sometimes|required|numeric|min:1000',
            'stok' => 'sometimes|required|integer|min:0',
            'kategori_id' => 'sometimes|required|exists:kategoris,id',
        ]);

        // Mencari buku berdasarkan ID
        $buku = Buku::find($id);

        // Jika buku tidak ditemukan, kembalikan respon error
        if (!$buku) {
            return response()->json([
                'message' => 'Buku tidak ditemukan'
            ], 404);
        }

        // Mengupdate data buku
        $buku->update($validatedData);

        // Mengembalikan respon dengan data buku yang telah diupdate
        return response()->json([
            'message' => 'Buku berhasil diupdate',
            'data' => $buku
        ]);
    }

    /**
     * Menghapus buku dari database.
     */
    public function destroy($id)
    {
        // Mencari buku berdasarkan ID
        $buku = Buku::find($id);

        // Jika buku tidak ditemukan, kembalikan respon error
        if (!$buku) {
            return response()->json([
                'message' => 'Buku tidak ditemukan'
            ], 404);
        }

        // Menghapus buku dari database
        $buku->delete();

        // Mengembalikan respon sukses
        return response()->json([
            'message' => 'Buku berhasil dihapus'
        ]);
    }

    public function search(Request $request)
    {
        $query = Buku::query();

        // Filter berdasarkan judul
        if ($request->has('judul')) {
            $query->where('judul', 'like', '%' . $request->judul . '%');
        }

        // Filter berdasarkan kategori
        if ($request->has('kategori_id')) {
            $query->where('kategori_id', $request->kategori_id);
        }

        // Ambil hasil pencarian
        $bukus = $query->get();

        return response()->json($bukus);
    }
}