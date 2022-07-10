

@extends('layouts.main-admin')

@section('container')

<!-- content     -->
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-8">
                        <h3>Edit data sapi</h3><br>
                        <form action="/admin/bantuan/{{ $data_pertanyaan->id }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                <input required name="pertanyaan" value="{{ $data_pertanyaan->pertanyaan }}" type="pertanyaan" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan">
                                @error('pertanyaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>      
                            <div class="mb-3">
                                <label for="jawaban" class="form-label">Jawaban</label>
                                <input required name="jawaban" value="{{ $data_pertanyaan->jawaban }}" type="jawaban" class="form-control @error('jawaban') is-invalid @enderror" id="jawaban">
                                @error('jawaban')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>                                         
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection