@extends('admin.layouts.app')

@section('content')
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

<!-- Form Start -->
<div class="content-fluid justify-content-center align-items-center min-vh-100">
    <form id="formPesanan" action="{{ url('stok/'.$stok->id) }}" method="post" class="w-100" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container-fluid pt-5 px-5">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Silahkan Masukan</h6>
                        <div class="form-floating mb-3">
                        <select class="form-select" name="nm_barang" aria-label="Pilih barang">
                            <option selected disabled hidden>Pilih salah satu barang</option>
                            <option value="Cengkih kering" {{ $stok->nm_barang == 'Cengkih kering' ? 'selected' : '' }}>Cengkih kering</option>
                            <option value="Cengkih" {{ $stok->nm_barang == 'Cengkih' ? 'selected' : '' }}>Cengkih</option>
                            <option value="Vanili kering" {{ $stok->nm_barang == 'Vanili kering' ? 'selected' : '' }}>Vanili Kering</option>
                            <option value="Vanili" {{ $stok->nm_barang == 'Vanili' ? 'selected' : '' }}>Vanili</option>
                            <option value="Kapulaga kering" {{ $stok->nm_barang == 'Kapulaga kering' ? 'selected' : '' }}>Kapulaga Kering</option>
                            <option value="Kapulaga" {{ $stok->nm_barang == 'Kapulaga' ? 'selected' : '' }}>Kapulaga</option>
                            <option value="Mahkota dewa" {{ $stok->nm_barang == 'Mahkota dewa' ? 'selected' : '' }}>Mahkota Dewa</option>
                            <option value="Kemiri" {{ $stok->nm_barang == 'Kemiri' ? 'selected' : '' }}>Kemiri</option>
                        </select>
                            <label for="floatingSelect">Pilih salah satu barang</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control bg-secondary" name="stok" id="stok" value="{{ $stok->stok }}" placeholder="Masukan sisa stok saat ini" readonly>
                            <label for="stok">Stock</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="pemasukan_awal" id="pemasukan_awal" value="{{ $stok->pemasukan_awal }}" placeholder="Masukan jumlah pemasukan awal barang">
                            <label for="pemasukan_awal">Jumlah Pemasukan Awal</label>
                        </div>
                        <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="pengeluaran" id="pengeluaran" value="{{ $stok->pengeluaran }}" placeholder="Pengeluaran barang">
                        <label for="pengeluaran">Pengeluaran Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input type="file" class="form-control bg-secondary" name="dokumen_barang" id="dokumen_barang" value="{{ $stok->dokumen_barang }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-danger" href="{{ route('stok.index') }}"><i class="fas fa-arrow-left me-1"></i> Kembali</a>
                            <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Form End -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const pemasukanAwal = document.querySelector('input[name="pemasukan_awal"]');
        const pengeluaran = document.querySelector('input[name="pengeluaran"]');
        const stok = document.querySelector('input[name="stok"]');

        function updateStock() {
            const pemasukan = parseInt(pemasukanAwal.value) || 0;
            const pengeluaranValue = parseInt(pengeluaran.value) || 0;
            stok.value = pemasukan - pengeluaranValue;
        }

        pemasukanAwal.addEventListener('input', updateStock);
        pengeluaran.addEventListener('input', updateStock);
    });
</script>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
