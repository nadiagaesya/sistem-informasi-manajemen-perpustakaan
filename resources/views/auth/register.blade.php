@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 40px;">
            <div class="col-md-6">
                <div class="card" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                    <div class="card-header text-white text-center"
                        style="background: rgba(17,135,21,255); font-size:16px; font-weight:bold;">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Tambahkan input fields untuk kelas, NISN atau NIP, dan telepon -->
                            <div class="row mb-3">
                                <label for="kelas"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Kelas') }}</label>

                                <div class="col-md-6">
                                    <input id="kelas" type="text"
                                        class="form-control @error('kelas') is-invalid @enderror" name="kelas"
                                        value="{{ old('kelas') }}" required>

                                    @error('kelas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nisn_atau_nip"
                                    class="col-md-4 col-form-label text-md-start">{{ __('NISN atau NIP') }}</label>

                                <div class="col-md-6">
                                    <input id="nisn_atau_nip" type="number"
                                        class="form-control @error('nisn_atau_nip') is-invalid @enderror"
                                        name="nisn_atau_nip" value="{{ old('nisn_atau_nip') }}" required>

                                    @error('nisn_atau_nip')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Tambahkan piliahan jenis guru, siswa, pegawai --}}
                            <div class="row mb-3">
                                <label for="jenis"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Jenis') }}</label>

                                <div class="col-md-6">
                                    <select id="jenis" class="form-control @error('jenis') is-invalid @enderror"
                                        name="jenis" required>
                                        <option value="guru" {{ old('jenis') == 'guru' ? 'selected' : '' }}>Pilih Role</option>
                                        <option value="guru" {{ old('jenis') == 'guru' ? 'selected' : '' }}>Guru</option>
                                        <option value="siswa" {{ old('jenis') == 'siswa' ? 'selected' : '' }}>Siswa
                                        </option>
                                        <option value="pegawai" {{ old('jenis') == 'pegawai' ? 'selected' : '' }}>Pegawai
                                        </option>
                                    </select>

                                    @error('jenis')
                                        <span class="invalid-feedback" jenis="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="telepon"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Telepon') }}</label>

                                <div class="col-md-6">
                                    <input id="telepon" type="number"
                                        class="form-control @error('telepon') is-invalid @enderror" name="telepon"
                                        value="{{ old('telepon') }}" required>

                                    @error('telepon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Akhir dari penambahan input fields -->

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success" style="float: right">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
