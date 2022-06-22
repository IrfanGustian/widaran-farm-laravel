
@extends('layouts.main-admin')

@section('container')
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">

            <!-- Greeting  -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pb-5">
                            <h4 class="box-title ">Selamat Datang Di Dashboard Web <br>
                                Penjualan Sapi WIDARANFARM </h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /Greeting  -->

            <!-- Penghasilan -->
            <div class="col-sm-12 mb-4 no-padding">
                <div class="card-group">
                    <div class="card col-md-6 mr-5">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4 ">
                                <small class="text-muted font-weight-bold float-left">Product</small>
                                <img src="images/Frame.png" alt="" srcset="">
                            </div>

                            <div class="h4 mb-0 text-center">
                                <span class="count">420</span>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-6 mr-5">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <small class="text-muted font-weight-bold float-left">Orders</small>
                                <img src="images/Frame.png" alt="" srcset="">
                            </div>
                            <div class="h4 mb-0 text-center">
                                <span class="count">69</span>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-6 ">
                        <div class="card-body">
                            <div class="h1 text-muted text-right mb-4">
                                <small class="text-muted font-weight-bold float-left">Sales</small>
                                <img src="images/Frame.png" alt="" srcset="">
                            </div>
                            <div class="h4 mb-0 text-center">
                                <span class="count">666</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- /Penghasilan -->

        <!-- /#add-category -->
        </div>
        <!-- .animated -->
    </div>
    
@endsection