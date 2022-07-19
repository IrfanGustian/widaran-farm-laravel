

@extends('layouts.main-admin')

@section('container')

<!-- content     -->
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-8">
                        <h3>Edit data user</h3><br>
                        <form action="/admin/user/{{ $data_user->id }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input name="name" type="name" value="{{ $data_user->name }}" class="form-control" id="name" required>
                            </div>         
                            <div class="mb-3">
                                <label for="nohp" class="form-label">No HP</label>
                                <input name="nohp" type="nohp" value="{{ $data_user->nohp }}" class="form-control" id="nohp" required>
                            </div>                   
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection