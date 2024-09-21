<div class="main-container">
<div class="sidebar pe-4 pb-3 sticky-top">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin - Herby</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                    <li class="dropdown-header">
              <h6>{{ Auth::guard('admin')->user()->name ?? 'Guest' }}</h6>
              <span>Admin</span>
              </li>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('user_admin.index') }}" class="dropdown-item">User Admin</a>
                            <a href="{{ route('user.index') }}" class="dropdown-item">User Herby</a>
                        </div>
                    </div>
                    <a href="{{route('stok.index')}}" class="nav-item nav-link"><i class="fa fa-box me-2"></i>Stok</a>
                </div>
            </nav>
        </div>
</div>
