 @extends('layouts/app')
 @section('content')
<!-- <style>
.counter-icon {
    background-color: #BDB76B !important; /* Ganti dengan warna yang Anda inginkan */
}
</style> -->
 <!-- Carousel Start -->
 <div class="carousel-header">
            <div id="carouselId" class="carousel slide bg-success" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/padi.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Welcome To Herby</h4>
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Natural products</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/budak.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solution For All Type Of Visas</h5>
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Best Visa Immigrations Services</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/duar.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solution For All Type Of Visas</h5>
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Best Visa Immigrations Services</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false" style="background-color: #0B6623; border-color: #97B770 ;  border-width: 3px;"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next" >
                    <span class="carousel-control-next-icon wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false" style="background-color: #0B6623; border-color: #97B770 ;  border-width: 3px;"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
     <div class="container py-5" id="about">
                <div class="row g-5">
                    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="bg-light rounded">
                            <img src="img/alam.png" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="sub-title text-success pe-3">About</h5>
                        <h1 class="display-5 text-success mb-4">Tentang Kami</h1>
                        <p class="mb-4">Ditanam dengan sangat baik dan menciptakan hasil alam yang melimpah ditengah era modern, dan menambah sebagian paru-paru dunia. Sebagai Tempat Hidup, alam menjadi tempat berpijak dan memberikan manfaat bagi makhluk hidup.</p>
                        <div class="row gy-4 align-items-center">
                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                <i class="fas fa-map-marked-alt fa-3x text-success"></i>
                                <h5 class="ms-4">Ds.Pangrumasan Kec.Peundeuy Kab.Garut Jawa Barat</h5>
                            </div>
                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                <i class="fas fa-globe fa-3x text-success"></i>
                                <h5 class="ms-4">Go Internasional !</h5>
                            </div>
                    
                            <div class="col-8 col-md-9">
                                <div class="mb-5">
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-success me-2"></i>100% asli dari sumber daya alam</p>
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-success me-2"></i>Dihasilkan dari tanah air Indonesia</p>
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-success me-2"></i>Ditanam dengan pupuk yang alami</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

            <!-- Counter Facts Start -->
            <div class="container-fluid counter-facts py-5">
    <div class="container py-5">
        <div class="row g-4 d-flex justify-content-center align-items-center text-center">
            <!-- Counter Item 1 -->
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
    <div class="counter">
        <div class="counter-icon text-light">
            <i class="fas fa-users"></i>
        </div>
        <div class="counter-content">
            <h3>Seller</h3>
            <div class="d-flex align-items-center justify-content-center">
                <span class="counter-value text-danger" data-toggle="counter-up">377</span>
                <h4 class="text-danger mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
            </div>
        </div>
    </div>
</div>


            <!-- Counter Item 2 -->
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="counter">
                    <div class="counter-icon text-light">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Buyer</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value text-danger" data-toggle="counter-up">4.9</span>
                            <h4 class="text-danger mb-0" style="font-weight: 600; font-size: 25px;">K</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Counter Item 3 -->
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="counter">
                    <div class="counter-icon text-light">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="counter-content">
                        <h3>New Arrival</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value text-danger" data-toggle="counter-up">98</span>
                            <h4 class="text-danger mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Counter Facts End -->


        <!-- rekom Start -->
        <div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-success px-3">Recommendation</h5>
                    </div>
                    <h1 class="display-5 text-success mb-4">Rekomendasi from Herby</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/kapolb.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-hijmud text-center rounded p-3 mx-5 mb-4" style="border: 2px solid #97B770; padding: 5px;">
                                            <a href="#" class="h4 text-white mb-0">Kapulaga</a>
                                        </div>
                    
                                    </div>
                                    <div class="service-content pb-4 bg-success">
                                        <a href="#"><h4 class="text-white mb-4 py-3 bg-success">Kapulaga</h4></a>
                                        <div class="px-4">
                                            <p class="text-white mb-4">Kapulaga adalah sejenis rempah yang dihasilkan dari biji beberapa tanaman dari genera Elettaria dan Amomum dalam keluarga Zingiberaceae (keluarga jahe-jahean).</p>
                                            <a class="btn-custom" href="https://id.wikipedia.org/wiki/Kapulaga" target="_blank" rel="noopener noreferrer">Explore More</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/cengkehb.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-hijmud text-center rounded p-3 mx-5 mb-4" style="border: 2px solid #97B770; padding: 5px;">
                                            <a href="#" class="h4 text-white mb-0" >Cengkih</a>
                                        </div>
                                    </div>
                                    <div class="service-content pb-4 bg-success">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Cengkih</h4></a>
                                        <div class="px-4">
                                            <p class="text-white mb-4"> Cengkih adalah tanaman asli Indonesia, banyak digunakan sebagai bumbu masakan pedas di negara-negara Eropa, dan sebagai bahan utama rokok kretek khas Indonesia.</p>
                                            <a class="btn-custom" href="https://id.wikipedia.org/wiki/Cengkih" target="_blank" rel="noopener noreferrer">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/dewa.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-hijmud text-center rounded p-3 mx-5 mb-4" style="border: 2px solid #97B770; padding: 5px;">
                                            <a href="#" class="h4 text-white mb-0">Mahkota Dewa</a>
                                        </div>
                                        
                                    </div>
                                    <div class="service-content pb-4 bg-success">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Mahkota Dewa</h4></a>
                                        <div class="px-4">
                                            <p class="text-white mb-4">Pohon mahkota dewa (Phaleria macrocarpa) atau dalam bahasa Melayu dikenal dengan sebutan pohon simalakama, yang buahnya juga disebut buah simalakama. Di sinilah muncul peribahasa bagaikan buah simalakama.</p>
                                            <a class="btn-custom" href="https://id.wikipedia.org/wiki/Mahkota_dewa" target="_blank" rel="noopener noreferrer">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/vanilik.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-hijmud text-center rounded p-3 mx-5 mb-4" style="border: 2px solid #97B770; padding: 5px;">
                                            <a href="#" class="h4 text-white mb-0">Vanili</a>
                                        </div>
                                    </div>
                                    <div class="service-content pb-4 bg-success">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Vanili</h4></a>
                                        <div class="px-4">
                                            <p class="text-white mb-4">Vanili (Vanilla planifolia) atau kemeli adalah tanaman penghasil bubuk vanili yang biasanya dijadikan bahan untuk memberi aroma atau pengharum pada makanan. Bubuk ini dihasilkan dari buah vanili yang berbentuk polong.</p>
                                            <a class="btn-custom" href="https://id.wikipedia.org/wiki/Vanili" target="_blank" rel="noopener noreferrer">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/kemiri.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-hijmud text-center rounded p-3 mx-5 mb-4" style="border: 2px solid #97B770; padding: 5px;">
                                            <a href="#" class="h4 text-white mb-0">Kemiri</a>
                                        </div>
                                    </div>
                                    <div class="service-content pb-4 bg-success">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Kemiri</h4></a>
                                        <div class="px-4">
                                            <p class="text-white mb-4">Kemiri (Aleurites moluccana (L.) Wild.) (bahasa Inggris: candlenut) adalah tumbuhan yang bijinya dimanfaatkan sebagai sumber minyak dan rempah-rempah. Tumbuhan ini masih sekerabat dengan singkong dan termasuk dalam suku Euphorbiaceae.</p>
                                            <a class="btn-custom" href="https://id.wikipedia.org/wiki/Kemiri" target="_blank" rel="noopener noreferrer">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/anggrek.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-hijmud text-center rounded p-3 mx-5 mb-4" style="border: 2px solid #97B770; padding: 5px;">
                                            <a href="#" class="h4 text-white mb-0">Bunga Anggrek Bulan</a>
                                        </div>
                                    </div>
                                    <div class="service-content pb-4 bg-success">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Bunga Anggrek</h4></a>
                                        <div class="px-4">
                                            <p class="text-white mb-4">Anggrek Bulan termasuk dalam tanaman anggrek monopodial. Puspa Pesona adalah salah satu bunga nasional Indonesia. Pertama kali ditemukan oleh seorang ahli botani Belanda, Dr. C.L. Blume. </p>
                                            <a class="btn-custom" href="https://id.wikipedia.org/wiki/Anggrek_bulan" target="_blank" rel="noopener noreferrer">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center wow fadeInUp" data-wow-delay="0.5s">
                <a class="btn-custom" href="{{route('shoping.index')}}" rel="noopener noreferrer">Lihat Selengkapnya</a>
               </div>
            </div>
        </div>
        <!-- rekom End -->

        <!-- Features Start -->
         
        <!-- Features End -->

        <!-- Countries We Offer Start -->
      
        <!-- Countries We Offer End -->

        <!-- Contact Start -->

        <!-- Contact End -->
         @endsection