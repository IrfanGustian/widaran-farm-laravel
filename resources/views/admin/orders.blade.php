

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

                                            @switch($trans->status)
                                                @case("GAGAL")
                                                    <form action="/admin/transaksi/{{ $trans->id }}" method="post" class="d-inline">
                                                            
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0"><span>Hapus</span></button>
                                                    </form>
                                                    @break
                                                @case("DIPROSES")
                                                    <form action="/admin/transaksi/{{ $trans->id }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('put')
                                                            <button type="submit" name="status" class="badge bg-success border-0" value="SELESAI"><span>SELESAI</span></button>
                                                            <button type="submit" name="status" class="badge bg-warning border-0" value="GAGAL"><span>GAGAL</span></button>
                                                    </form>
                                                    @break
                                                @default
                                                 <h1>-</h1>
                                            @endswitch

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