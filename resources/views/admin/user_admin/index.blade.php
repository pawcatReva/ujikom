@extends('admin.layouts.app')
@section('content')
<!-- Content Start -->
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
                            <h6 class="mb-4">UserAdmin</h6>
                            <a class="btn btn-primary text-dark mb-3" href="{{ route('user_admin.create') }}"><i class="fas fa-plus me-2"></i>Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1 ?>
                                    @foreach($user_admin as $user_admin)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{ $user_admin->name }}</td>
                                        <td>{{ $user_admin->username }}</td>
                                        <td>{{ $user_admin->email }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-dark me-2" href="{{ route('user_admin.edit', $user_admin->id) }}">
                                                <i class="fas fa-edit me-1"></i>Edit
                                            </a>

                                            <button class="btn btn-sm btn-danger me-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $user_admin->id }}">
                                                <i class="fas fa-trash-alt me-1"></i>Hapus
                                            </button>

                                            <!-- Modal Konfirmasi Hapus -->
                                            <div class="modal fade" id="deleteModal{{ $user_admin->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <form action="{{ route('user_admin.destroy', $user_admin->id) }}" method="POST" style="display: inline-block;">
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