@extends('layouts.main-admin')

@section('container')

        <div class="content">
            <div class="animated">

                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                        </div>                      
                    @endif

                <!-- Dropdown Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-body">Testimonial</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">

                                    @foreach ($data_testi as $testi)
                                        
                                        <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-secondary pt-5" data-toggle="modal" data-target="#scrollmodal{{ $loop->iteration }}">
                                        {{ $testi->nama }} <br>  {{ $testi->pekerjaan }}
                                        <img src="/img/admin/link.png" alt="" srcset="">
                                    </button>
            
                                    @endforeach
                                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#largeModal">
                                        <img src="/img/admin/plus.png" alt=""> <br> Upload
                                    </button>
                                    
                              </div>
                          </div>
                          
                          @foreach ($data_testi as $item)
                              
                            <div class="modal fade" id="scrollmodal{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title mb-4" id="scrollmodalLabel"> <strong>{{ $item->nama }} </strong>  
                                                <br> {{ $item->pekerjaan }}</h4>
                                            <img src="{{ asset('storage/'. $item->img) }}" class="img-fluid d-block mb-3 col-sm-5">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <p>
                                                {{ $item->deskripsi }}
                                            </p>
                                        </div>

                                        
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <form action="/admin/testimoni/{{ $item->id }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger">HAPUS</button>
                                            </form>
                                            <button type="button" class="btn btn-primary">Confirm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
            
                        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticModalLabel">Upload Testimonial</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/admin/testimoni" method="post" enctype="multipart/form-data">
                                            @csrf
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input name="nama" type="nama" class="form-control" id="nama" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                                    <input name="pekerjaan" type="pekerjaan" class="form-control" id="pekerjaan" required>
                                                </div>
                                                <div class="form-floating">
                                                    <label for="deskipsi">Deskripsi</label>
                                                    <textarea name="deskripsi" class="form-control" placeholder="Masukkan deskripsi sapi" id="deskipsi" style="height: 100px" required></textarea>
                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <label for="img" class="form-label">Masukkan gambar</label>
                                                    <img  class="img-preview img-fluid mb-3 col-sm-5">
                                                    <input name="img" class="form-control @error('img') is-invalid @enderror" type="file" id="img" onchange="previewImage()" required>
                                                    @error('img')
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
                        </div>
                    </div>
                </div>
    </div><!-- .animated -->
</div><!-- .content -->


<script>
    function previewImage() {
        const image = document.querySelector('#img');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();

        oFReader.readAsDataURL(image.files[0]);


        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection