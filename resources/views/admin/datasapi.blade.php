

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
                            <strong class="card-title">Data Sapi</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">No</th>
                                        <th class="avatar">Nama</th>
                                        <th>STATUS</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_sapis as $sapis)

                                    <tr>
                                        <td class="serial">{{ $loop->iteration }}</td>
                                        <td>  <span class="name">{{ $sapis->nama_sapi }} </span></td>
                                        @php
                                            $status = $sapis->transaksi->first();
                                        @endphp

                                        @if ($sapis->trans_id !== null)
                                            <td>  <span class="deskripsi">{{ $status->status }}</span> </td>
                                        @else
                                            <td>  <span class="deskripsi">TERSEDIA</span> </td>
                                        @endif
                                        <td> <span class="harga">{{ $sapis->harga }}</span> </td>
                                        <td><a href="{{ asset('storage/'. $sapis->img) }}">Link Gambar</a></td>
                                        <td>
                                            @if (isset($status->status))
                                                @if ($status->status == "SELESAI" || "GAGAL")
                                                    <form action="/admin/sapi/{{ $sapis->id }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0"><span>Hapus</span></button>
                                                    </form>
                                                @endif
                                            @else
                                                <a class="badge bg-success border-0" href="/admin/sapi/{{ $sapis->id }}/edit">EDIT</a>
                                                <form action="/admin/sapi/{{ $sapis->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge bg-danger border-0"><span>Hapus</span></button>
                                                </form>
                                            @endif
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