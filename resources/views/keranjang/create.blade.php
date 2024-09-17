@extends('layouts/app')

@section('content')

<div class="container mt-5"> <!-- Menambahkan jarak margin-top 5 -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Menampilkan error jika ada -->
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    <form id="formPesanan" action="{{ route('keranjang.store') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-hijmud py-3">
                        <h6 class="m-0 font-weight-bold text-white"><i class="fas fa-shopping-cart me-2"></i>Tambahkan Pesanan Anda</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama">Nama: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Masukkan nama anda" required>
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nm_barang">Nama Barang: <span class="text-danger">*</span></label>
                                <select name="nm_barang" id="nm_barang" class="form-select" required>
                                    <option value="" selected disabled hidden>--Pilih Barang--</option>
                                    <option value="Cengkih kering" {{ old('nm_barang') == 'Cengkih kering' ? 'selected' : '' }}>Cengkeh Kering</option>
                                    <option value="Cengkih" {{ old('nm_barang') == 'Cengkih' ? 'selected' : '' }}>Cengkeh</option>
                                    <option value="Vanili kering" {{ old('nm_barang') == 'Vanili kering' ? 'selected' : '' }}>Vanili Kering</option>
                                    <option value="Vanili" {{ old('nm_barang') == 'Vanili' ? 'selected' : '' }}>Vanili</option>
                                    <option value="Kapulaga kering" {{ old('nm_barang') == 'Kapulaga kering' ? 'selected' : '' }}>Kapulaga Kering</option>
                                    <option value="Kapulaga" {{ old('nm_barang') == 'Kapulaga' ? 'selected' : '' }}>Kapulaga</option>
                                    <option value="Mahkota Dewa" {{ old('nm_barang') == 'Mahkota Dewa' ? 'selected' : '' }}>Mahkota Dewa</option>
                                    <option value="Tanaman Kapulaga" {{ old('nm_barang') == 'Tanaman Kapulaga' ? 'selected' : '' }}>Tanaman Kapulaga</option>
                                    <option value="Kemiri" {{ old('nm_barang') == 'Kemiri' ? 'selected' : '' }}>Kemiri</option>
                                </select>
                                @error('nm_barang')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="jumlah">Jumlah: <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="jumlah" id="jumlah" value="{{ old('jumlah') }}" placeholder="Jumlah pesanan" required>
                                @error('jumlah')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="alamat">Alamat: <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat pengiriman" required>{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-danger" href="{{ route('keranjang.index') }}"><i class="fas fa-arrow-left me-1"></i> Kembali</a>
                            <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
