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
    $stok = Stok::all(); 
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
        'nm_barang' => 'required|string|max:255|unique:stok',
        'stok' => 'required|numeric|min:1',
        'pemasukan_awal' => 'required|numeric|min:1',
        'pengeluaran' => 'required|numeric|min:1',
        'dokumen_barang' => 'nullable|file|mimes:pdf,doc,docx',
    ], [
        'nm_barang' => 'Wajib diisi',
        'nm_barang.unique' => 'Nama barang sudah ada',
        'stok' => 'Wajib diisi',
        'pemasukan_awal' => 'Wajib diisi',
        'pengeluaran' => 'Wajib diisi',
    ]);

    $stok = Stok::create($validatedData); // Buat stok

    // Menyimpan dokumen jika ada
    if ($request->hasFile('dokumen_barang')) {
        $file = $request->file('dokumen_barang');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('dokumen'), $filename);

        $stok->dokumen_barang = $filename; 
        $stok->save(); // Simpan perubahan
    }
    
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
        'dokumen_barang' => 'nullable|file|mimes:pdf,doc,docx',
    ], [
        'nm_barang' => 'Wajib diisi',
        'stok' => 'Wajib diisi',
        'pemasukan_awal' => 'Wajib diisi',
        'pengeluaran' => 'Wajib diisi',
    ]);

    $stok->update($validatedData);
    
    // Menyimpan dokumen jika ada
    if ($request->hasFile('dokumen_barang')) {
        $file = $request->file('dokumen_barang');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('dokumen'), $filename);
        
        $stok->dokumen_barang = $filename; // Update nama file dokumen
        $stok->save(); // Simpan perubahan
    }

    return redirect()->route('stok.index')->with('success', 'Stok berhasil diperbarui');
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
