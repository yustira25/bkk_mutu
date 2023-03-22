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
                                    <img src="assets/images/logo-light.png" alt="" class="logo-light">
                                    <img src="assets/images/logo-dark.png" alt="" class="logo-dark">
                                </a>
                                <div class="mt-5">
                                    <img src="assets/images/auth/sign-up.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="auth-content card-body p-5 text-white">
                                <div class="w-100">
                                    <div class="text-center">
                                        <h5>Let's Get Started</h5>
                                        <p class="text-white-70">Sign Up and get access to all the features of Jobcy</p>
                                    </div>
                                    <form action="https://themesdesign.in/jobcy/layout/index.html" class="auth-form">
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Username</label>
                                            <input type="text" class="form-control" required="" id="usernameInput" placeholder="Enter your username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="passwordInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" required="" id="emailInput" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password">
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="text-white text-decoration-underline">Terms and conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-white btn-hover w-100">Sign Up
                                        </button></div>
                                    </form>
                                    <div class="mt-3 text-center">
                                        <p class="mb-0">Already a member ? <a href="sign-in.html" class="fw-medium text-white text-decoration-underline"> Sign In </a></p>
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