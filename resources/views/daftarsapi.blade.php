
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

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h3 class="text-center font-weight-bold mt-5">
                        DAFTAR SAPI
                    </h3>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="product-slider owl-carousel">

                        @foreach ($data_sapi as $sapi)

                            @empty($sapi->trans_id)
                                <div class="product-item">


                                    <div class="pi-pic">
                                        <img src="{{ asset('storage/'. $sapi->img) }}" alt="" />
                                    </div>
                                    <div class="pi-text">
                                        <a href="#">
                                            <h5>{{ $sapi->nama_sapi }}</h5>
                                        </a>
                                        <div class="catagory-name">{{ $sapi->deskripsi }}</div>                              
                                        <div class="product-price">Rp. 
                                            {{ number_format($sapi->harga, 0, ',', '.')  }}
                                        </div>
                                        
                                    </div>
                                    <div class="button-pesan">
                                        <a href="/pembayaran/{{ $sapi->slug }}" class="primary-btn">Pesan</a>
                                    </div>
                                </div>
                            @endempty

                        @endforeach

                        

                                          
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->
@endsection