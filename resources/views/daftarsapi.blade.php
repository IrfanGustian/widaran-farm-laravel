
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
                <h3 class="text-center mb-3 font-weight-bold mt-5">
                    DAFTAR SAPI
                </h3>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/daftarsapi">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search...">
                            <button class="btn btn-outline-secondary" type="submit" id="">Search</button>
                          </div>
                    </form>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5">

                    @if ($data_sapi->count())
                            @if (!request('search'))
                                
                            <div class="product-slider owl-carousel mb-4">
                                
                                @foreach ($sapi_slider as $sapi)
                                
                                @empty($sapi->trans_id)
                                
                                <div class="product-item">
                                    <div class="pi-pic">
                                                <img src="{{ asset('storage/'. $sapi->img) }}" class="img-fluid d-block mb-3 col-sm-10" />
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
                                    
                        @endif
                        <div class="container">
                            <div class="row">
                                @foreach ($data_sapi as $sapilagi)

                                    @empty($sapilagi->trans_id)
                                        <div class="d-flex mb-5 px-3 mx-auto">
                                            <div class="card border-light" style="width: 18rem;">
                                                <img src="{{ asset('storage/'. $sapilagi->img) }}" class="card-img-to" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $sapilagi->nama_sapi }}</h5>
                                                    <p class="card-text">{{ $sapilagi->deskripsi }}</p>
                                                    <div class="product-price">Rp. 
                                                        {{ number_format($sapilagi->harga, 0, ',', '.')  }}
                                                    </div>
                                                    <div class="button-pesan">
                                                        <a href="/pembayaran/{{ $sapilagi->slug }}" class="primary-btn">Pesan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endempty

                                @endforeach
                            </div>
                        </div>
                    @else
                        <p class="text-center fs-4">Data Sapi Tidak Ada</p>
                    @endif

                    <div class="d-flex justify-content-center">
                     {{ $data_sapi->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->
@endsection