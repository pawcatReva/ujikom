<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjang = Keranjang::paginate(10); 
        return view('keranjang.index', compact('keranjang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keranjang.create');
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
            'nama' => 'required|string|max:255',
            'nm_barang' => 'required|string|max:255',
            'jumlah' => 'required|numeric|min:1',
            'alamat' => 'required|string|max:255',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nm_barang.required' => 'Nama barang wajib diisi',
            'jumlah.required' => 'Jumlah wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
        ]);

        Keranjang::create($validatedData);
        
        return redirect()->route('keranjang.index')->with('success', 'Keranjang berhasil dimasukkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit(Keranjang $keranjang)
    {
        return view('keranjang.edit', compact('keranjang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keranjang $keranjang)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nm_barang' => 'required|string|max:255',
            'jumlah' => 'required|numeric|min:1',
            'alamat' => 'required|string|max:255',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nm_barang.required' => 'Nama barang wajib diisi',
            'jumlah.required' => 'Jumlah wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
        ]);

        $keranjang->update($validatedData);
        
        return redirect()->route('keranjang.index')->with('success', 'Keranjang berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keranjang $keranjang)
    {
        $keranjang->delete();
        return redirect()->route('keranjang.index')->with('success', 'Keranjang berhasil dihapus');
    }
}
