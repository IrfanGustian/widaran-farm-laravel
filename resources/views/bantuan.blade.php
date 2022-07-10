@extends('layouts.main')

@section('container')


    <section class="faq-section">
        <div class="container">
            <div class="row">
                <!--  FAQ Start  -->
                <div class="col-md-6 offset-md-3">
                    <div class="faq-title text-center pb-3">
                        <h2>Frequently Asked Question</h2>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <div class="faq" id="accordion">

                        @foreach ($data_pertanyaan as $item)
                        
                        {{-- Pertanyaan start --}}
                        <div class="card">
                            <div class="card-header" id="faqHeading-{{ $loop->iteration }}">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-{{ $loop->iteration }}"
                                        data-aria-expanded="true" data-aria-controls="faqCollapse-{{ $loop->iteration }}">
                                        <span class="badge">{{ $loop->iteration }}</span>{{ $item->pertanyaan }}
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-{{ $loop->iteration }}" class="collapse" aria-labelledby="faqHeading-{{ $loop->iteration }}"
                            data-parent="#accordion">
                            <div class="card-body">
                                    <p>
                                        {{ $item->jawaban }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        {{-- Pertanyaan End --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection