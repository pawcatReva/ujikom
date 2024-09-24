@extends('admin.layouts.app')
@section('content')
<!-- Content Start -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show alert-custom-margin" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   <!-- Table Start -->
   <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Stock Table</h6>
                            <a class="btn btn-primary text-dark mb-3" href="{{ route('stok.create') }}"><i class="fas fa-plus me-2"></i>Tambah Data</a>
                            <div class="table-responsive">
                            <table class="table">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Stock</th>
            <th scope="col">Pemasukan Awal</th>
            <th scope="col">Pengeluaran</th>
            <th scope="col">Dokumen Barang</th> <!-- Kolom untuk dokumen -->
            <th scope="col">Aksi</th> <!-- Kolom untuk aksi -->
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($stok as $stok)
        <tr>
            <td>{{$no++}}</td>
            <td>{{ $stok->nm_barang }}</td>
            <td>{{ $stok->stok }}</td>
            <td>{{ $stok->pemasukan_awal }}</td>
            <td>{{ $stok->pengeluaran }}</td>
            <td>
            @if($stok->dokumen_barang)
    <a href="{{ asset('dokumen/' . $stok->dokumen_barang) }}" target="_blank" class="btn btn-info btn-sm">
        <i class="fas fa-file-download me-1"></i>Download Dokumen
    </a>
@else
    <span>Tidak ada dokumen</span>
@endif
            </td>
            <td>
                <a class="btn btn-sm btn-dark me-2" href="{{ route('stok.edit', $stok->id) }}">
                    <i class="fas fa-edit me-1"></i>Edit
                </a>

                <button class="btn btn-sm btn-danger me-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $stok->id }}">
                    <i class="fas fa-trash-alt me-1"></i>Hapus
                </button>

                <!-- Modal Konfirmasi Hapus -->
                <div class="modal fade" id="deleteModal{{ $stok->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <form action="{{ route('stok.destroy', $stok->id) }}" method="POST" style="display: inline-block;">
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
