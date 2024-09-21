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
<div class="content">
<form action ="{{ url('user_admin/'.$user_admin->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="container-fluid pt-5 px-5">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Silahkan Masukan</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $user_admin->name }}" placeholder="Masukan name anda">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="username" id="username" value="{{ $user_admin->username }}" placeholder="Masukan username anda">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" value="{{ $user_admin->email }}" placeholder="Masukan username anda">
                        <label for="email">Email</label>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                        </div>
                    </div>
                    <!-- <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukan password anda">
                        <label for="password">Password</label>
                    </div> -->
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-danger" href="{{ route('user_admin.index') }}"><i class="fas fa-arrow-left me-1"></i> Kembali</a>
                        <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Form End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection
