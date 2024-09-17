<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $stok = Stok::all(); // Ambil semua data stok dari database
    return view('admin.stok.index', compact('stok')); // Kirim data stok ke view
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nm_barang' => 'required|string|max:255',
            'stok' => 'required|numeric|min:1',
            'pemasukan_awal' => 'required|numeric|min:1',
            'pengeluaran' => 'required|numeric|min:1',
        ], [
           'nm_barang' => 'Wajib diisi',
            'stok' => 'Wajib diisi',
            'pemasukan_awal' => 'Wajib diisi',
            'pengeluaran' => 'wajib diisi',
        ]);

        Stok::create($validatedData);
        
        return redirect()->route('stok.index')->with('success', 'Info stok berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show(Stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stok = Stok::findOrFail($id); // Mengambil data stok berdasarkan ID
        return view('admin.stok.edit', compact('stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stok $stok)
    {
        $validatedData = $request->validate([
            'nm_barang' => 'required|string|max:255',
            'stok' => 'required|numeric|min:1',
            'pemasukan_awal' => 'required|numeric|min:1',
            'pengeluaran' => 'required|numeric|min:1',
        ], [
           'nm_barang' => 'Wajib diisi',
            'stok' => 'Wajib diisi',
            'pemasukan_awal' => 'Wajib diisi',
            'pengeluaran' => 'wajib diisi',
        ]);

        $stok->update($validatedData);
        return redirect()->route('stok.index')->with('success', 'stok berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stok $stok)
    {
        $stok->delete();
        return redirect()->route('stok.index')->with('success', 'Stok berhasil dihapus');
    }
}
