@extends('layouts.main-admin')

@section('container')

        <!-- Header-->

        <div class="content">
            <div class="animated">

                <div class="card">
                    <div class="card-header">
                        <strong class="card-title" v-if="headerText">Blogs</strong>
                    </div>
                    <div class="card-body">

                        <!-- Button trigger modal -->
                      <button type="button" class="btn btn-secondary pt-5" data-toggle="modal" data-target="#scrollmodal1">
                        Bagaimana Cara Menyembelih <br>
                        Sapi Yang benar <img src="img/admin/link.png" alt="" srcset="">
                      </button>

                      <button type="button" class="btn btn-secondary pt-5" data-toggle="modal" data-target="#scrollmodal2">
                        Bagaimana Cara Menyembelih <br>
                        Sapi Yang benar <img src="img/admin/link.png" alt="" srcset="">
                      </button>


                      <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#largeModal">
                          <img src="img/admin/plus.png" alt=""> <br> Upload
                      </button>

                  </div>
              </div>
              
              <div class="modal fade" id="scrollmodal1" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollmodalLabel">Bagaimana Cara Menyembelih
                                Sapi Yang benar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                               onsectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                            </p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Upload Blogs</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- AREA FORM UPLOAD -->
                            <form action="#">
                                <label for="judul-tulisan">Judul Tulisan</label>
                                <input type="text" id="judul-tulisan" class="form-control">

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Body Text</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <label for="upload-gambar">Upload Gambar</label> <br>
                                <input type="file" class="btn btn-secondary" id="upload-gambar" name="upload-gambar">
                                <input type="submit" class="btn btn-success">
                            </form>
                       </div>
                    </div>
                </div>
            </div>



    </div><!-- .animated -->
</div><!-- .content -->

@endsection