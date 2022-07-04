

@extends('layouts.main-admin')

@section('container')

<!-- content     -->
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-8">
                        <h3>Upload data sapi</h3><br>
                        <form action="/admin/sapi/" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Sapi</label>
                                <input name="nama_sapi" type="nama" class="form-control @error('namasapi') is-invalid @enderror" id="nama">
                                @error('namasapi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">String Random</label>
                                <input name="slug" type="nama" value="{{ Str::random(15) }}" class="form-control" id="nama" readonly required>
                            </div>
                            <label for="harga">Harga Sapi</label><br>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rp.</span>
                                <input name="harga" type="number" class="form-control" id="harga" required>
                            </div>
                            <div class="form-floating">
                                <label for="deskipsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" placeholder="Masukkan deskripsi sapi" id="deskipsi" style="height: 100px" required></textarea>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="img" class="form-label">Masukkan gambar sapi</label>
                                <img  class="img-preview img-fluid mb-3 col-sm-5"">
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