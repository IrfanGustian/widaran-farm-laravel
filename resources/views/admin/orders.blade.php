

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
                                        <th class="serial">No</th>
                                        <th class="avatar">Nama dan Email</th>
                                        <th>Alamat</th>
                                        <th>NO HP</th>
                                        <th>Nama Sapi</th>
                                        <th>Status Pemesanan</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_trans as $trans)

                                    <tr>
                                        <td class="serial">{{ $loop->iteration }}</td>
                                        <td>  <span class="name">{{ $trans->nama_depan }} {{$trans->nama_belakang }}</span> <br> <small>{{$trans->email }}</small> </td>
                                        <td>  <span class="alamat">{{ $trans->alamat_lengkap }}</span> </td>
                                        <td> <span class="kode">{{ $trans->no_hp }}</span> </td>
                                        <td><span class="detail">{{ $trans->sapi->nama_sapi }}</span></td>
                                        <td><span class="detail">{{ $trans->status }}</span></td>
                                        <td>
                                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#btnModal">
                                                <img src="img/admin/Frame.png" alt="">
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div>

            </div>

            <div class="modal fade" id="btnModal" tabindex="-1" role="dialog" aria-labelledby="btnModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Opsi Data Transaksi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- AREA FORM UPLOAD -->
                            <form action="#">
            
                                <div class="row mt-4 mb-5">
                                    <div class="col">
                                        <label class="form-label">Ubah status pemesanan</label><br>
                                        <button class="btn btn-success" type="submit">Selesai</button>
                                        <button class="btn btn-danger" type="submit">Gagal</button>
                                    </div>
                                </div>

                                <div class="row mt-4 mb-5">
                                    <div class="col">
                                        <label class="form-label">Hapus Data</label><br>
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </div>
                                </div>
                            </form>
                       </div>
                    </div>
                </div>
            </div>


        </div><!-- .animated -->
    </div><!-- .content -->
@endsection