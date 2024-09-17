@extends('layouts.app')
@section('content')
<!-- 
<style>
    .alert-custom-margin {
        margin-top: 20px; /* Jarak antara alert dan navbar */
    }
    .table-custom-margin {
        margin-bottom: 10px; /* Jarak antara tabel dan alert */
    }
</style> -->

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show alert-custom-margin" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<nav class="navbar navbar-expand-lg navbar-light bg-light px-4 px-lg-5 py-3 py-lg-0 mb-4">
    <!-- Isi navbar -->
</nav>

<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid pt-5">

                <h1 class="h3 mb-4 text-gray-800">Tabel Data</h1>

                <div class="card shadow-lg mb-4">
                    <div class="card-header py-3 bg-hejo text-white">
                        <h6 class="m-0 font-weight-bold text-light">Keranjang Produk Herby</h6>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-hijmud text-light mb-3" href="{{ route('keranjang.create') }}"><i class="fas fa-plus me-2"></i>Tambah Data</a>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-hejo text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($keranjang as $keranjang)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $keranjang->nama }}</td>
                                        <td>{{ $keranjang->nm_barang }}</td>
                                        <td>{{ $keranjang->jumlah }}</td>
                                        <td>{{ $keranjang->alamat }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-dark me-2" href="{{ route('keranjang.edit', $keranjang->id) }}">
                                                <i class="fas fa-edit me-1"></i>Edit
                                            </a>

                                            <button class="btn btn-sm btn-danger me-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $keranjang->id }}">
                                                <i class="fas fa-trash-alt me-1"></i>Hapus
                                            </button>

                                            <!-- Tombol Pesan -->
                                            <a class="btn btn-sm btn-warning text-white" href="#">
                                                <i class="fas fa-rocket me-1"></i>Pesan
                                            </a>

                                            <!-- Modal Konfirmasi Hapus -->
                                            <div class="modal fade" id="deleteModal{{ $keranjang->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                <i class="fas fa-exclamation-triangle text-warning me-2"></i>Konfirmasi Hapus
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus data ini? Data yang dihapus tidak dapat dikembalikan.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{ route('keranjang.destroy', $keranjang->id) }}" method="POST" style="display: inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
