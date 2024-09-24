<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang=Keranjang::all();
        // $keranjang = auth()->user()->Keranjang;
        return view('keranjang.index', compact('keranjang'));
    }

    public function create()
    {
        return view('keranjang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nm_barang' => 'required|string|max:255',
            'jumlah' => 'required|numeric|min:1',
            'alamat' => 'required|string|max:255',
            'user_id' => 'numeric',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nm_barang.required' => 'Nama barang wajib diisi',
            'jumlah.required' => 'Jumlah wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
        ]);
        // $userId = auth()->user()->id();

        // Pastikan user_id valid
        // if (!$userId || !User::find($userId)) {
        //     return redirect()->back()->withErrors(['user_id' => 'User tidak ditemukan']);
        // }

        // $validatedData['id'] = $id; 
        // $validatedData['nama'] = auth()->user()->name;
        Keranjang::create($validatedData);
        
        return redirect()->route('keranjang.index')->with('success', 'Keranjang berhasil dimasukkan');
    }

    public function edit($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        return view('keranjang.edit', compact('keranjang'));
    }

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

    public function destroy(Keranjang $keranjang)
    {
        $keranjang->delete();
        return redirect()->route('keranjang.index')->with('success', 'Keranjang berhasil dihapus');
    }
}
