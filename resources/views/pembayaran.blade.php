
@extends('layouts/main')

@section('container')
   <!-- Testimonial -->
<div class="text-pembayaran">
    <h4 >
        PEMBAYARAN
    </h4>
</div>   
<div class="cara-pesan">
<div class="container">
    <div class="row">           
        <div class="col-4 mr-5">
            <img src="/img/products/{{ $data_sapi->img }}" alt="" srcset="">
        </div>
        <div class="col-7 ml-5">
            <div class="user-checkout">
                <form action="/pembayaran/{{ $data_sapi->slug }}" method="POST">
                    @csrf
                    <h5 class="font-weight-bold mb-3">INFORMASI PRIBADI</h4>
                    <div class="form-row">
                        <div class="col">
                            <label for="namadepan">Nama Depan</label>
                            <input type="text" class="form-control" name="nama_depan" id="nama_depan" aria-describedby="namaHelp" placeholder="Nama depan" required>
                        </div>
                        <div class="col">
                            <label for="namabelakang">Nama Belakang</label>
                            <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" aria-describedby="namaHelp" placeholder="Nama belakang" required>
                        </div>
                      </div>
                      <div class="form-row mt-2">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukan Email" required>
                        </div>
                        <div class="col">
                            <label for="notelp">No-Telp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" aria-describedby="noHPHelp" placeholder="Masukan No. HP" required>
                        </div>
                      </div>
                      <h5 class="font-weight-bold mb-3 mt-5">ALAMAT PENGIRIMAN</h4>
                    <div class="form-group">
                        <label for="alamatLengkap">Alamat Lengkap</label>
                        <textarea class="form-control" name="alamat_lengkap" id="alamat_lengkap" rows="3" required></textarea>
                    </div>
                        <div class="form-row mt-2">
                            <div class="col">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" aria-describedby="kotaHelp" placeholder="Masukan kota" required>
                            </div>
                            <div class="col">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" aria-describedby="kecamatanHelp" placeholder="Masukan kecamatan" required>
                            </div>
                            <div class="col">
                                <label for="desa">Desa</label>
                                <input type="text" class="form-control" id="desa" name="desa" aria-describedby="desaHelp" placeholder="Masukan desa" required>
                            </div>
                            <div class="col">
                                <label for="kodepos">Kode Pos</label>
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos" aria-describedby="kodeposHelp" placeholder="Masukan kodepos" required>
                            </div>
                        </div>

                        <h5 class="font-weight-bold mb-3 mt-5">DATA SAPI</h4>
                        
                        <div class="form-row mt-2">
                            <input type="hidden" readonly class="form-control" name="sapi_id"  value="{{ $data_sapi->id }}">
                        </div>

                        <div class="form-row mt-2">
                            <div class="col">
                                <label for="kota">Nama Sapi</label>
                                <input type="text" readonly class="form-control" name="nama_sapi" id="nama_sapi" aria-describedby="kotaHelp" value="{{ $data_sapi->nama_sapi }}" placeholder="Masukan kota">
                            </div>
                        </div>

                        <div class="form-row mt-2">
                            <label for="alamatLengkap">Deskripsi Sapi</label>
                            <textarea class="form-control" readonly name="deskripsisapi" id="deskripsisapi" rows="3">{{ $data_sapi->deskripsi }}</textarea>
                        </div>

                        <div class="form-row mt-2">
                            <label for="desa">Harga</label>
                            <input type="text" readonly class="form-control" name="harga" id="harga" aria-describedby="desaHelp" value="Rp. {{ number_format($data_sapi->harga, 0, ',', '.') }}" placeholder="Masukan desa">
                        </div>
                        

                        <div class="row mt-4 mb-5">
                            <div class="col">
                                <button class="primary-btn" type="submit">PROSES PEMBAYARAN</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>   
</div>     
<!-- Car Pesan End -->
@endsection

