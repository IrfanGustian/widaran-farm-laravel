
@extends('layouts.main-admin')

@section('container')

<!-- content     -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                    </div>                      
                @endif
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Pertanyaan<br> <br>
                            
                            <a href="/admin/bantuan/create" class="btn btn-primary stretched-link">Tambah Data</a>
                        
                        </strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">No</th>
                                    <th class="avatar">Pertanyaan</th>
                                    <th>Jawaban</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_pertanyaan as $item)

                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td>  <span class="name">{{ $item->pertanyaan }} </span></td>
                                    <td> <span class="harga">{{ $item->jawaban }}</span> </td>
                                    <td>
                                        <a class="badge bg-success border-0" href="/admin/bantuan/{{ $item->id }}/edit">EDIT</a>
                                        <form action="/admin/bantuan/{{ $item->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"><span>Hapus</span></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div>

        </div>


    </div><!-- .animated -->
</div><!-- .content -->
    
@endsection