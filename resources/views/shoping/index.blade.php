@extends('layouts/app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-success px-3">Shopping</h5>
                    </div>
                    <h1 class="display-5 text-success mb-4">happy shopping</h1>
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
                                            <a class="btn-custom" href="{{route('keranjang.create')}}" rel="noopener noreferrer">Beli</a>

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
                                            <a class="btn-custom" href="{{route('keranjang.create')}}" rel="noopener noreferrer">Beli</a>
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
                                            <a class="btn-custom" href="{{route('keranjang.create')}}" rel="noopener noreferrer">Beli</a>
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
                                            <a class="btn-custom" href="{{route('keranjang.create')}}" rel="noopener noreferrer">Beli</a>
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
                                            <a class="btn-custom" href="{{route('keranjang.create')}}" rel="noopener noreferrer">Beli</a>
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
                                            <a class="btn-custom" href="{{route('keranjang.create')}}" rel="noopener noreferrer">Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</body>
</html>
@endsection