<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('admin.pesanan.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
         // Ambil data dari keranjang berdasarkan ID
    $keranjang = Keranjang::findOrFail($id);

    // Buat pesanan baru dengan data dari keranjang
    $pesanan = new Pesanan();
    $pesanan->nama = $keranjang->nama;
    $pesanan->nm_barang = $keranjang->nm_barang;
    $pesanan->jumlah = $keranjang->jumlah;
    $pesanan->alamat = $keranjang->alamat;

    // Simpan pesanan ke database
    $pesanan->save();

    // Hapus data dari keranjang (opsional)
    // $keranjang->delete();

    // return response()->json(['success', 'Pesanan berhasil dikirim']);;
    // return view('admin.pesanan.success', ['message' => 'Pesanan berhasil dikirim']);
    return redirect()->back()->with('success_' . $keranjang->id, 'Pesanan berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dihapus');
    }
}
