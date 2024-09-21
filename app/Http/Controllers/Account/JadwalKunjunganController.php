<?php

namespace App\Http\Controllers\Account;

use App\Models\JadwalKunjungan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalKunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwalKunjungan = JadwalKunjungan::all();
        return view('account.jadwal_kunjungan.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalKunjungan  $jadwalKunjungan
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalKunjungan $jadwalKunjungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalKunjungan  $jadwalKunjungan
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalKunjungan $jadwalKunjungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalKunjungan  $jadwalKunjungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalKunjungan $jadwalKunjungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalKunjungan  $jadwalKunjungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalKunjungan $jadwalKunjungan)
    {
        //
    }
}
