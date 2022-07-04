@extends('layouts.main')

@section('container')

    <!-- Testimonial -->
    <div class="container">
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
    </div>    
        <!-- Testimonial End -->
@endsection