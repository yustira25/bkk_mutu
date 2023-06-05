@extends('layouts.default')

@section('main-content')
<section class="bg-auth">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12">
                <div class="card auth-box">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-center">
                            <div class="card-body p-4">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/logosmkmutu.jpg') }}" width="70" height="70" alt=""> BKK SMK MUTU
                                    {{-- <img src="{{ asset('assets/images/logo-light.png') }}" alt="" class="logo-light">
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="logo-dark"> --}}
                                </a>
                                <div class="mt-5">
                                    <img src="{{ asset('assets/images/auth/sign-up.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="auth-content card-body p-5 text-white">
                                <div class="w-100">
                                    <div class="text-center">
                                        <h5>Registrasi</h5>
                                        <p class="text-white-70">Silahkan registrasi akun terlebih dahulu</p>
                                    </div>
                                    <form action="{{ route('register') }}" method="POST" class="auth-form">
                                        {{ csrf_field() }}
                                        {{-- <label for="role">{{ __('Role') }}</label>
                                            <select id="role" name="role_id" placeholder="Pilih User" class="form-control">
                                                <option value="">Pilih user</option>
                                                @foreach($role as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select> --}}
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="name" required="" id="usernameInput" placeholder="Input nama lengkap anda sesuai KTP">
                                        </div>
                                        <div class="mb-3">
                                            <label for="passwordInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" required="" id="emailInput" placeholder="Masukan email anda">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="passwordInput" placeholder="Masukan password anda">
                                        </div>
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">NIK KTP</label>
                                            <input type="text" class="form-control" name="nik" required="" id="usernameInput" placeholder="Masukan NIK KTP anda">
                                        </div>
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempat_lahir" required="" id="usernameInput" placeholder="Masukan tempat lahir anda">
                                        </div>
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggal_lahir" required="" id="usernameInput" placeholder="Masukan tanggal lahir anda">
                                        </div>
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat" required="" id="usernameInput" placeholder="Masukan alamat sesuai KTP"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Asal Sekolah</label>
                                            <input type="text" class="form-control" name="asal_sekolah" required="" id="usernameInput" placeholder="Asal sekolah anda">
                                        </div>
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Tahun Lulus</label>
                                            <input type="text" class="form-control" name="tahun_lulus" required="" id="usernameInput" placeholder="Tahun lulus sekolah">
                                        </div>
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Jurusan Sekolah</label>
                                            <input type="text" class="form-control" name="jurusan" required="" id="usernameInput" placeholder="Jurusan sekolah">
                                        </div>
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">No. Handphone WA</label>
                                            <input type="text" class="form-control" name="no_hp" required="" id="usernameInput" placeholder="Masukan No HP atau Whatsapp">
                                        </div>
                                        {{-- <div class="mb-4">
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="text-white text-decoration-underline">Terms and conditions</a></label>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="form-group">
                                            <label for="role">{{ __('Role') }}</label>
                                            <select id="role" name="role_id" class="form-control">
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                    
                                            @error('role_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-white btn-hover w-100">Register</button>
                                        </div>
                                    </form>
                                    <div class="mt-3 text-center">
                                        <p class="mb-0">Sudah Registrasi ? <a href="{{ route('login') }}" class="fw-medium text-white text-decoration-underline"> Sign In </a></p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end auth-box-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection