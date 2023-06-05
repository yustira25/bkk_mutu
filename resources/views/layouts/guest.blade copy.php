<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/jobcy/layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Feb 2023 13:16:44 GMT -->
<head>
        
        
        <meta charset="utf-8" />
        <title>Home | Jobcy - Job Listing Template | Themesdesign</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Choise Css -->
        <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

        <!-- Swiper Css -->
        <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/icons/v3.0.0/css/line.css') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        {{-- <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" /> --}}
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <!--Custom Css-->

    </head>

    <body>
         <!--start page Loader -->
         {{-- <div id="preloader">
            <div id="status">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
            </div>
        </div> --}}
        <!--end page Loader -->

        <!-- Begin page -->
        <div>

           {{-- @include('layouts.partials._topbar') --}}
           @include('layouts.partials._navbar')

           


            <!-- START SIGN-UP MODAL -->
            <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-5">
                            <div class="position-absolute end-0 top-0 p-3">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="auth-content">
                                <div class="w-100">
                                    <div class="text-center mb-4">
                                        <h5>Sign Up</h5>
                                        <p class="text-muted">Sign Up and get access to all the features of Jobcy</p>
                                    </div>
                                    <form action="#" class="auth-form">
                                        <div class="mb-3">
                                            <label for="usernameInput" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="usernameInput" placeholder="Enter your username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="passwordInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="text-primary form-text text-decoration-underline">Terms and conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                        </div>
                                    </form>
                                    <div class="mt-3 text-center">
                                        <p class="mb-0">Already a member ? <a href="sign-in.html" class="form-text text-primary text-decoration-underline"> Sign-in </a></p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end modal-body-->
                    </div><!--end modal-content-->
                </div><!--end modal-dialog-->
            </div>
            <!-- END SIGN-UP MODAL -->

            <div class="main-content">

                <div class="page-content">

                    @yield('content')

                </div>
                <!-- End Page-content -->
                
                <!-- START SUBSCRIBE -->
                <section class="bg-subscribe">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <div class="text-center text-lg-start">
                                    <h4 class="text-white">Get New Jobs Notification!</h4>
                                    <p class="text-white-50 mb-0">Subscribe & get all related jobs notification.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4 mt-lg-0">
                                    <form class="subscribe-form" action="#">
                                        <div class="input-group justify-content-center justify-content-lg-end">
                                            <input type="text" class="form-control" id="subscribe" placeholder="Enter your email">
                                            <button class="btn btn-primary" type="button" id="subscribebtn">Subscribe</button>
                                        </div>
                                    </form><!--end form-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                    <div class="email-img d-none d-lg-block">
                        <img src="assets/images/subscribe.png" alt="" class="img-fluid">
                    </div>
                </section>
                <!-- END SUBSCRIBE -->

                <!-- START FOOTER -->
                <section class="bg-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="footer-item mt-4 mt-lg-0 me-lg-5">
                                    <h4 class="text-white mb-4">Jobcy</h4>
                                    <p class="text-white-50">It is a long established fact that a reader will be of a page reader
                                        will be of at its layout.</p>
                                    <p class="text-white mt-3">Follow Us on:</p>
                                    <ul class="footer-social-menu list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-google"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="uil uil-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">Company</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="about.html"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                                        <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Contact Us</a></li>
                                        <li><a href="services.html"><i class="mdi mdi-chevron-right"></i> Services</a></li>
                                        <li><a href="blog.html"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                                        <li><a href="team.html"><i class="mdi mdi-chevron-right"></i> Team</a></li>
                                        <li><a href="pricing.html"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">For Jobs</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="job-categories.html"><i class="mdi mdi-chevron-right"></i> Browser Categories</a></li>
                                        <li><a href="job-list.html"><i class="mdi mdi-chevron-right"></i> Browser Jobs</a></li>
                                        <li><a href="job-details.html"><i class="mdi mdi-chevron-right"></i> Job Details</a></li>
                                        <li><a href="bookmark-jobs.html"><i class="mdi mdi-chevron-right"></i> Bookmark Jobs</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="text-white fs-16 mb-4">For Candidates</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="candidate-list.html"><i class="mdi mdi-chevron-right"></i> Candidate List</a></li>
                                        <li><a href="candidate-grid.html"><i class="mdi mdi-chevron-right"></i> Candidate Grid</a></li>
                                        <li><a href="candidate-details.html"><i class="mdi mdi-chevron-right"></i> Candidate Details</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-2 col-6">
                                <div class="footer-item mt-4 mt-lg-0">
                                    <p class="fs-16 text-white mb-4">Support</p>
                                    <ul class="list-unstyled footer-list mb-0">
                                        <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Help Center</a></li>
                                        <li><a href="faqs.html"><i class="mdi mdi-chevron-right"></i> FAQ'S</a></li>
                                        <li><a href="privacy-policy.html"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </section>
                <!-- END FOOTER -->

                <!-- START FOOTER-ALT -->
                <div class="footer-alt">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-white-50 text-center mb-0">
                                    <script>document.write(new Date().getFullYear())</script> &copy; Jobcy - Job Listing Page
                                    Template by <a href="https://themeforest.net/search/themesdesign" target="_blank"
                                        class="text-reset text-decoration-underline">Themesdesign</a>
                                </p>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
                <!-- END FOOTER -->

                <!--start back-to-top-->
                <button onclick="topFunction()" id="back-to-top">
                    <i class="mdi mdi-arrow-up"></i>
                </button>
                <!--end back-to-top-->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/icons/v4.0.0/script/monochrome/bundle.js') }}"></script> --}}


        <!-- Choice Js -->
        <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
        
        <!-- Swiper Js -->
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Index Js -->
        <script src="{{ asset('assets/js/pages/job-list.init.js') }}"></script>

        <!-- Switcher Js -->
        {{-- <script src="{{ asset('assets/js/pages/switcher.init.js') }}"></script> --}}

        <script src="{{ asset('assets/js/pages/index.init.js') }}"></script>
        
        <!-- App Js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>
