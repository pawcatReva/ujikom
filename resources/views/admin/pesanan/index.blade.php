@extends('admin.layouts.app')
@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show alert-custom-margin" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

   <!-- Table Start -->
   <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Pesanan</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1 ?>
                                    @foreach($pesanan as $pesanan)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{ $pesanan->nama }}</td>
                                        <td>{{ $pesanan->nm_barang }}</td>
                                        <td>{{ $pesanan->jumlah }}</td>
                                        <td>{{ $pesanan->alamat }}</td>
                                        <td>
                                            <!-- <a class="btn btn-sm btn-dark me-2" href="{{ route('pesanan.edit', $pesanan->id) }}">
                                                <i class="fas fa-edit me-1"></i>Edit
                                            </a> -->
                                            <button class="btn btn-sm btn-danger me-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $pesanan->id }}">
                                                <i class="fas fa-trash-alt me-1"></i>Hapus
                                            </button>
                                            <!-- Modal Konfirmasi Hapus -->
                                            <div class="modal fade" id="deleteModal{{ $pesanan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <form action="{{ route('pesanan.destroy', $pesanan->id) }}" method="POST" style="display: inline-block;">
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
    <div class="content">
</div>
@endsection