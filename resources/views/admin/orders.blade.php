

@extends('layouts.main-admin')

@section('container')

<!-- content     -->
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Orders</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">ID</th>
                                        <th class="avatar">Nama</th>
                                        <th>Alamat</th>
                                        <th>NO HP</th>
                                        <th>Status Pemesanan</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_trans as $trans)

                                    <tr>
                                        <td class="serial">{{ $trans->id }}</td>
                                        <td>  <span class="name">{{ $trans->nama_depan }} {{$trans->nama_belakang }}</span> <br> <small>{{$trans->email }}</small> </td>
                                        <td>  <span class="alamat">{{ $trans->alamat_lengkap }}</span> </td>
                                        <td> <span class="kode">{{ $trans->no_hp }}</span> </td>
                                        <td><span class="detail">{{ $trans->sapi->nama_sapi }}</span></td>
                                        <td>
                                            <img src="img/admin/Frame.png" alt="" srcset="">
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