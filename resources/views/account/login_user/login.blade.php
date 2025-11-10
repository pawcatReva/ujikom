<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login - User</title>
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

    <style>
        /* ======= Custom Hijau Theme ======= */
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

        .login-wrapper {
            position: fixed;
            inset: 0;
            background-color: var(--putih-lembut);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
    background: linear-gradient(180deg, #9cc97b 0%, #8BBF63 100%);
    border: 2px solid var(--hijau-tua);
    border-radius: 12px;
    padding: 40px 35px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease-in-out;
}
.login-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25); /* makin dalam saat hover */
}


        .login-card h3 {
            color: white;
            font-weight: 600;
        }

        .form-control {
            border: 1px solid var(--hijau-lembut);
            border-radius: 8px;
        }

        .form-control:focus {
            border-color: var(--hijau-tua);
            box-shadow: 0 0 0 0.2rem rgba(78, 107, 46, 0.25);
        }

        .btn-login {
            background-color: var(--hijau-tua);
            color: #fff;
            border: 2px solid var(--hijau-lembut);
            transition: all 0.2s ease-in-out;
        }

        .btn-login:hover {
            background-color: var(--hijau-muda);
            color: #fff;
        }

        .text-link {
            color: white;
            text-decoration: underline;
        }

        .text-link:hover {
            color: var(--hijau-tua);
        }

        .alert {
            margin: 15px auto;
            width: 90%;
        }

        /* Spinner (tetap, tapi disesuaikan warna) */
        #spinner .spinner-border {
            color: var(--hijau-tua) !important;
        }
    </style>
</head>

<body>

    @if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        background: '#f0fff0',
        color: '#2e7d32'
    });
</script>
@endif
    
    @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Terjadi Kesalahan',
            html: `{!! implode('<br>', $errors->all()) !!}`,
            confirmButtonText: 'Oke',
            confirmButtonColor: '#4E6B2E',
            background: '#fff8f8',
            color: '#b71c1c'
        });
    </script>
    @endif
    
<!-- Spinner Start -->
<div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="background-color: rgba(250,250,250,0.9);">
    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Login Section -->
<div class="login-wrapper">
    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="login-card">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="text-white d-flex align-items-center">
                    <img src="{{asset('img/logo.png')}}" alt="Logo" style="width: 40px; height: 40px; object-fit: contain; margin-right: 10px;">
                    Herby
                </h3>  
                <h3>Sign In</h3>
            </div>

            <form action="{{ route('login-create') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required autocomplete="email">
                    <label for="floatingInput">Email address</label>    
                </div> 
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required autocomplete="current-password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit" class="btn btn-login py-3 w-100 mb-4">Sign In</button>
                <p class="text-center mb-0 text-white">Don't have an account? 
                    <a href="{{route('account.register')}}" class="text-link">Sign Up</a>
                </p>
            </form>
        </div>
    </div>
</div>
<!-- Login End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('admin/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
