@extends('layouts.guest')

@section('content')
    <!-- START HOME -->
    <section class="bg-home2" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="mb-4 pb-3 me-lg-5">
                        <h6 class="sub-title">Kami bekerja sama dengan banyak DUDI</h6>
                        <h1 class="display-5 fw-semibold mb-3">Cari Pekerjaanmu di <span class="text-primary fw-bold">BKK MUTU</span></h1>
                        <p class="lead text-muted mb-0">SMK Muhammadiyah 1 (Mutu) Kota Tegal siap mencetak tenaga handal untuk memenuhi kebutuhan Industri, Dunia Usaha, dan Dunia Kerja dalam maupun luar negeri.</p>
                    </div>
                    <form action="/home/search" method="GET">
                        <div class="registration-form">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <div class="filter-search-form filter-border mt-3 mt-md-0">
                                        <i class="uil uil-briefcase-alt"></i>
                                        <input type="search" id="job-title" name="search" class="form-control filter-input-box" placeholder="Nama Perusahaan...">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-4">
                                    <div class="mt-3 mt-md-0 h-100">
                                        <button class="btn btn-primary submit-btn w-100 h-100" type="submit"><img src="{{ asset('admin_assets/img/svg/search.svg') }}"> Find Job</button>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </form>
                </div>
                <!--end col-->
                <div class="col-lg-5">
                    <div class="mt-5 mt-md-0">
                        <img src="{{ asset('assets/images/process-02.png') }}" alt="" class="home-img" /> 
                    </div>
                </div><!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->    
    </section>
    <!-- End Home -->

    <!-- START SHAPE -->
    <div class="position-relative">
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="150" preserveAspectRatio="none" viewBox="0 0 1440 220">
                <g mask="url(&quot;#SvgjsMask1004&quot;)" fill="none">
                    <path d="M 0,213 C 288,186.4 1152,106.6 1440,80L1440 250L0 250z" fill="rgba(255, 255, 255, 1)"></path>
                </g>
                <defs>
                    <mask id="SvgjsMask1004">
                        <rect width="1440" height="250" fill="#ffffff"></rect>
                    </mask>
                </defs>
            </svg>
        </div>
    </div>
    <!-- END SHAPE -->
    
    <!-- START JOB-LIST -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title">List Loker Baru</h4>
                        <p class="text-muted mb-1">Lowogan kerja terbaru</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="recent-jobs" role="tabpanel"
                            aria-labelledby="recent-jobs-tab">
                            <x-job-list :datas="$data" />
                            <div class="text-center mt-4 pt-2">
                                <a href="{{ route('frontend.joblist') }}" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--end part-time-tab-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END JOB-LIST -->

    <!-- START PROCESS -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title me-5">
                        <h3 class="title">Bagaimana cara mendaftar?</h3>
                        <p class="text-muted">Cara mendaftar pada web BKK Mutu</p>
                        <div class="process-menu nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <div class="d-flex">
                                    <div class="number flex-shrink-0">
                                        1
                                    </div>
                                    <div class="flex-grow-1 text-start ms-3">
                                        <h5 class="fs-18">Register akun</h5>
                                        <p class="text-muted mb-0">Registrasi akun ini untuk pendataan pelamar yang akan lamar pekerjaan</p>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="d-flex">
                                    <div class="number flex-shrink-0">
                                        2
                                    </div>
                                    <div class="flex-grow-1 text-start ms-3">
                                        <h5 class="fs-18">Cari lowongan kerja</h5>
                                        <p class="text-muted mb-0">Mencari nama perusahaan sesuai dengan lowongan kerja yang dibuka</p>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <div class=" d-flex">
                                    <div class="number flex-shrink-0">
                                        3
                                    </div>
                                    <div class="flex-grow-1 text-start ms-3">
                                        <h5 class="fs-18">Apply lowongan kerja</h5>
                                        <p class="text-muted mb-0">Pengisian data pada apply loker dan bukti transfer pendaftaran</p>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <div class=" d-flex">
                                    <div class="number flex-shrink-0">
                                        4
                                    </div>
                                    <div class="flex-grow-1 text-start ms-3">
                                        <h5 class="fs-18">Notifikasi pendaftar</h5>
                                        <p class="text-muted mb-0">Melihat notifikasi pendaftar pada email yang sudah diinputkan dengan copy link whatsaap grup tertera ke browser anda. Info lebih jelas bisa contact pada No Wa dibawah.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <img src="assets/images/process-01.png" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <img src="assets/images/process-02.png" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <img src="assets/images/process-03.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div> <!--end row-->
        </div><!--end container-->
    </section>
    <!-- END PROCESS -->

@endsection