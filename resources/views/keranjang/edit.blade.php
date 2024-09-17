@extends('layouts/app')

@section('content')
<div class="container mt-5"> <!-- Menambahkan jarak margin-top 5 -->
    @if ($errors->any())
        @foreach($errors->all() as $err)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $err }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif

    <form action ="{{ url('keranjang/'.$data->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-success text-white py-3">
                        <h6 class="m-0 font-weight-bold"><i class="fas fa-edit me-2"></i>Edit Pesanan Anda</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nama: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" placeholder="Masukkan nama anda">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Nama Barang: <span class="text-danger">*</span></label>
                                <select name="nm_barang" class="form-select">
                                    <option value="" selected disabled hidden>--Pilih Barang--</option>
                                    <option value="Cengkih kering" {{ $data->nm_barang == 'Cengkih kering' ? 'selected' : '' }}>Cengkih kering</option>
                                    <option value="Cengkih" {{ $data->nm_barang == 'Cengkih' ? 'selected' : '' }}>Cengkih</option>
                                    <option value="Vanili kering" {{ $data->nm_barang == 'Vanili kering' ? 'selected' : '' }}>Vanili Kering</option>
                                    <option value="Vanili" {{ $data->nm_barang == 'Vanili' ? 'selected' : '' }}>Vanili</option>
                                    <option value="Kapulaga kering" {{ $data->nm_barang == 'Kapulaga kering' ? 'selected' : '' }}>Kapulaga Kering</option>
                                    <option value="Kapulaga" {{ $data->nm_barang == 'Kapulaga' ? 'selected' : '' }}>Kapulaga</option>
                                    <option value="Mahkota dewa" {{ $data->nm_barang == 'Mahkota dewa' ? 'selected' : '' }}>Mahkota Dewa</option>
                                    <option value="Kemiri" {{ $data->nm_barang == 'Kemiri' ? 'selected' : '' }}>Kemiri</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Jumlah: <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="jumlah" value="{{ $data->jumlah }}" placeholder="Jumlah pesanan">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Alamat: <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan alamat pengiriman">{{ $data->alamat }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Simpan</button>
                            <a class="btn btn-danger" href="{{ route('keranjang.index') }}"><i class="fas fa-arrow-left me-1"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
