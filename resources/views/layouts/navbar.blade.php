<nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
<a href="" class="navbar-brand p-0">
<h1 class="display-5 text-success m-0">
    <img src="img/logo.png" class="img-fluid" alt="" style="width: auto; height: auto;">
    Herby
</h1>
</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('dashboard')}}" class="nav-item nav-link">Home</a>
                        <a href="{{route('dashboard')}}#about" class="nav-item nav-link">About</a>
                        <a href="{{route('dashboard')}}#ramuan" class="nav-item nav-link">Resep Herbal</a>
                        <a href="{{route('shoping.index')}}" class="nav-item nav-link">Shopping</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Pages</span></a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item"><i class="fas fa-user-alt me-2"></i>Account</a>
                                <a href="feature.html" class="dropdown-item"><i class="fa fa-sign-in-alt me-2"></i>Login</a>
                                <a href="countries.html" class="dropdown-item"><i class="fa fa-user me-2"></i>Register</a>
                                <a href="testimonial.html" class="dropdown-item"><i class="fas fa-power-off me-2"></i>Logout</a>
                            </div>
                        </div>
                        <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                    </div>
                    <a href="{{route('keranjang.index')}}" class="btn btn-success border-hijmud text-light rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Keranjang</a>
                </div>
            </nav>