@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div class="container rounded rounded-sm bg-white shadow">
        <div class="row justify-content-center align-items-center" style="margin-top: 50px;">
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="asset\images\slide2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="asset\images\sistem.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="asset\images\sistem2.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-12 bg-white">
                <div class="px-5">
                    <main class="w-100">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="d-flex bungkus justify-coontent-center">
                                <div class="gambar p-3 mt-3">
                                    <img src="asset/images/logo_sman6.jpeg" alt="logo_sman6" width="65" height="65">
                                </div>
                                <div class="vl mt-4 p-2"></div>
                                <div class="mt-4 caption">
                                    <h4 class="text-left">SMA <br> Negeri 6 <br> Mandau</h4>
                                </div>
                            </div>

                            <div class="row mb-3 mt-4">
                                <div class="col-md-12">
                                    <label class="label-email" for="email">Email <span class="text-danger">*</span>
                                    </label>

                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email" autofocus required
                                        placeholder="Masukkan email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="label-pass" for="password">Kata Sandi <span class="text-danger">*</span>
                                    </label>

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Masukkan kata sandi">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 offset-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-12">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
