<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register - User</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{asset('img/logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <style>
        /* ======= Custom Color Palette ======= */
        :root {
            --hijau-tua: #4E6B2E;
            --hijau-muda: #8BBF63;
            --hijau-lembut: #CFE6C0;
            --putih-lembut: #FAFAFA;
        }

        body {
            background-color: var(--putih-lembut);
            font-family: 'Open Sans', sans-serif;
        }

        .bg-hijmud { background-color: var(--hijau-tua) !important; }
        .bg-success { background-color: var(--hijau-muda) !important; }
        .bg-light { background-color: var(--putih-lembut) !important; }
        .btn-success, .bg-hejo { background-color: var(--hijau-tua) !important; }

        .btn-success:hover, .bg-hejo:hover {
            background-color: var(--hijau-muda) !important;
            color: #fff !important;
        }

        .border-hijmud {
            border-color: var(--hijau-muda) !important;
        }

        .text-primary {
            color: var(--hijau-tua) !important;
        }

        .text-white-custom { color: white !important; }

        /* Navbar link style (kalem hijau tone) */
        .navbar-light .navbar-nav .nav-link.active {
            color: var(--hijau-muda) !important;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: var(--hijau-tua) !important;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #000 !important;
        }

        /* ======= Layout Centered & Soft Shadows ======= */
        .register-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: var(--putih-lembut);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .register-card {
        background: linear-gradient(180deg, #9cc97b 0%, #8BBF63 100%);
        border: 2px solid var(--hijau-tua);
        border-radius: 12px;
        padding: 40px 35px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease-in-out;
        }
        .register-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25); /* makin dalam saat hover */
        }

        .register-card h3 {
            color: white;
            font-weight: 600;
        }

        .register-card .form-control {
            border: 1px solid var(--hijau-lembut);
            border-radius: 8px;
        }

        .register-card .form-control:focus {
            border-color: var(--hijau-tua);
            box-shadow: 0 0 0 0.2rem rgba(78, 107, 46, 0.25);
        }

        .btn-register {
            background-color: var(--hijau-tua);
            border: 2px solid var(--hijau-lembut);
            color: #fff;
            transition: all 0.2s ease-in-out;
        }

        .btn-register:hover {
            background-color: var(--hijau-muda);
            color: #fff;
        }

    </style>
</head>

<body>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show alert-custom-margin" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: relative;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="position: absolute; top: 10px; right: 10px; font-size: 1.2rem;"></button>
    </div>
@endif


<!-- Register Section -->
<div class="register-wrapper">
    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="register-card">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="text-white d-flex align-items-center">
                    <img src="{{asset('img/logo.png')}}" alt="Logo" style="width: 40px; height: 40px; object-fit: contain; margin-right: 10px;">
                    Herby
                </h3>                
                <h3>Sign Up</h3>
            </div>

            <form action="{{ route('register-create') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" name="name" placeholder="Your Name" required>
                    <label for="floatingName">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingUsername" name="username" placeholder="Username" required>
                    <label for="floatingUsername">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                </div> 
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>

                <button type="submit" class="btn btn-register py-3 w-100 mb-4">Register</button>
                <p class="text-center mb-0 text-white">Already have an Account? <a href="{{ route('account.login') }}" class="text-white" style="text-decoration: underline;">Sign In</a></p>
            </form>
        </div>
    </div>
</div>
<!-- Register End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('admin/js/main.js')}}"></script>

</body>
</html>
