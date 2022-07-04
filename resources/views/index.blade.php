@extends('layouts.main')

@section('container')
   <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/sapi.png">
                <div class="container ml-5">
                    <div class="row ">
                        <div class="col-lg-12 mt-5 pt-5">
                            <h1 class="mt-5">Selamat Datang Di Website <br> WIDARAN FARM</h1>
                            <p>
                                Menyediakan Berbagai Macam Sapi, Harga?? Di jamin murah!!!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/sapi2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tekstengah">
                                <h1>Selamat Datang Di Website <br> WIDARAN FARM</h1>                           
                            <p>
                                Menyediakan Berbagai Macam Sapi, Harga?? Di jamin murah!!!
                            </p>
                            <a href="#" class="primary-btn mt-5">Beli Sapi Qurban</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- group 26 -->
    <div class="group-26">
        <div class="widaran-farm">WIDARAN FARM</div>
        <div class="rectangle-14">
            <img src="img/Rectangle14.png" alt="" srcset="">
        </div>
        <p class="is-simply-dummy-text">
            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to make a type s
        </p>
        
    </div>
    <!-- group 26 End -->

    <!-- group 23 -->
    <div class="group-23">
        <div class="container">
            <div class="row">
                <div class="col">
                <div class="widaran-farm ">Home</div>
                </div>

                <div class="w-100 mt-5"></div>
                <div class="col-6 mr-5 pr-5">
                    <img class="mask-group-2" src="img/sapi-reac.png" />
                </div>
                <div class="col ml-5">
                <div class="kami-menjamin-hewan">
                    Kami menjamin hewan kurban Anda akan terkirim maksimal 24 jam setelah pembayaran.
                    </div>
                    <p class="simply-dummy-text-of">
                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                    since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset shee
                    </p>
                    <a href="/daftarsapi" class="primary-btn">Lihat Sapi</a>
                </div>
            </div>
            </div>
        <!-- group 23 End -->

    <!-- Kenapa di Widaran Farm -->

    <div class="container-fluid set-bg mt-5" data-setbg="img/sapi3.png">
        <h1 class="kenapa mt-4">KENAPA DI WINDARAN FARM</h1>
        <div class="row mt-5 pt-5">
            <div class="col">
                <center>
                    <img src="img/Rectangle1943.png" alt="">
                    <h5 class="mt-3 text-white font-weight-bold">Pembayaran</h5>
                    <p class="mt-3 text-white">
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    </p>
                </center>               
            </div>
            <div class="col">
                <center>
                    <img src="img/Rectangle1943.png" alt="">
                    <h5 class="mt-3 text-white font-weight-bold">Pembayaran</h5>
                    <p class="mt-3 text-white">
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    </p>
                </center>
            </div>
            <div class="col">
                <center>
                    <img src="img/Rectangle1943.png" alt="">
                    <h5 class="mt-3 text-white font-weight-bold">Pembayaran</h5>
                    <p class="mt-3 text-white">
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    </p>
                </center>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col">
                <center>
                    <div class="button-kenapa">
                        <a href="/daftarsapi" class="primary-btn">Beli Sapi Qurban</a>
                    </div> 
                </center>
            </div>
        </div>
    </div>

    <!-- Kenapa di Widaran Farm End -->

    <!-- Testimoni -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <h2>Testimonials</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel -->
                    <div class="carousel-inner">
                        @foreach ($data_testi as $item)   

                                @if ($loop->iteration == 1)
                                    <div class="item carousel-item active">
                                        <div class="img-box"><img src="{{ asset("storage/" . $item->img) }}" alt=""></div>
                                        <p class="testimonial"> “{{ $item->deskripsi }} “
                                        </p>
                                        <p class="overview"><b>{{ $item->nama }}</b>, {{ $item->pekerjaan }}</p>
                                    </div>
                                @else
                                    <div class="item carousel-item">
                                        <div class="img-box"><img src="{{ asset("storage/" . $item->img) }}" alt=""></div>
                                        <p class="testimonial"> “{{ $item->deskripsi }} “
                                        </p>
                                        <p class="overview"><b>{{ $item->nama }}</b>, {{ $item->pekerjaan }}</p>
                                    </div>
                                @endif
                            @endforeach
                    </div>
                    <!-- Carousel Controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimoni End -->
@endsection
