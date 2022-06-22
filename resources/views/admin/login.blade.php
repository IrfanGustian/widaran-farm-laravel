@extends('layouts.logreg')

@section('container')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">

                <h4 class="text-center mt-5 mb-5 font-weight-bold">Login</h4>
                <div class="login-form">

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissable fade show" role="alert">
                            {{ session('loginError') }}
                        </div>
                    @endif

                    <form action="/login" method="post">
                        @csrf
                        <div class="form-group form-rounded">
                            <label for="username">Username</label>
                            <input id="username" type="text" name="username" @error('username') is-invalid @enderror class="form-control" placeholder="Email" autofocus required value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-dark btn-flat m-b-30 m-t-30">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection
