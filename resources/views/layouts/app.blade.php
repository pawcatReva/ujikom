<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Herby</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}"> -->

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <style>
 .bg-hijmud {
    background-color: #608334 !important;
}
.bg-success {
    background-color: #97B770 !important;
}
.bg-hejo {
    background-color: #239b5d !important;
}
.border-hijmud {
    background-color: #608334 !important;
}
     .btn-success {
    background-color: #97B770 !important;
}
     .btn-hijmud {
    background-color: #608334 !important;
}
 /* Aturan untuk link yang aktif */
.navbar-light .navbar-nav .nav-link.active {
    color: #97B770 !important; /* Warna hijau saat link aktif */
}

/* Aturan untuk link lainnya saat hover */
.navbar-light .navbar-nav .nav-link:hover {
    color: #608334 !important; /* Warna hijau saat hover */
}

/* Aturan default untuk semua link */
.navbar-light .navbar-nav .nav-link {
    color: #000 !important; /* Warna default hitam */
}
.text-white-custom {
    color: white !important;
    }
    .btn-custom {
    background-color: #7DA145; /* Warna tombol */
    color: white; /* Warna teks */
    border: 2px solid #bdd299; /* Warna border hijmud */
    border-radius: 50px; /* Membuat sudut membulat */
    padding: 15px 30px; /* Mengatur padding */
    font-size: 16px; /* Ukuran teks */
    font-weight: 600; /* Menebalkan teks */
    text-decoration: none; /* Menghilangkan garis bawah pada link */
    display: inline-block; /* Agar tombol tetap block dan mudah diatur */
    transition: all 0.3s ease; /* Transisi halus */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan */
}

.btn-custom:hover {
    background-color:  #bdd299; /* Warna saat dihover */
    border-color: #bdd299; /* Ubah warna border saat hover */
    box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.15); /* Bayangan lebih besar saat hover */
    transform: translateY(-2px); /* Efek naik sedikit saat dihover */
}

.btn-custom:active {
    transform: translateY(0); /* Mengembalikan posisi saat diklik */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Kembali ke bayangan semula saat diklik */
}
/* Mengubah warna latar belakang indikator yang tidak aktif menjadi hijmud */
.carousel-indicators li {
    background-color: #bdd299; /* Warna hijmud */
}

/* Mengubah warna indikator yang aktif menjadi hijau */
.carousel-indicators .active {
    background-color: #004d24; /* Warna hijau */
}
#ramuan {
    scroll-margin-top: 50rem; /* Jarak 100px dari atas */
}
#about {
        scroll-margin-top: 4rem; /* Jarak 100px dari atas */
}
</style>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-hijmud px-5 d-none d-lg-block" style="border-bottom: 2px solid #97B770;">
        @include('layouts/topbar')
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar p-0">
         @include('layouts/navbar')
        </div>
        <!-- Navbar & Hero End -->

          <!-- Carousel Start -->
        <!-- Carousel End -->


        <!-- Modal Search Start -->
      
        <!-- Modal Search End -->



        <!-- About Start -->
    
        <!-- About End -->


        <!-- Counter Facts Start -->

        <!-- Counter Facts End -->


        <!-- Services Start -->

        <!-- Services End -->


        <!-- Features Start -->

        <!-- Features End -->


        <!-- Countries We Offer Start -->

        <!-- Countries We Offer End -->


        <!-- Testimonial Start -->

        <!-- Testimonial End -->


        <!-- Training Start -->

        <!-- Training End -->


        <!-- Contact Start -->

        <!-- Contact End -->
            @yield('content')
</div>

        <!-- Footer Start -->
         @include('layouts/footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-success btn-lg-square back-to-top" style="border: 2px solid #608334 ;"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    </body>

</html>