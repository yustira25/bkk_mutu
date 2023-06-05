@extends('layouts.guest')

@section('content')
<section class="page-title-box">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h3 class="mb-4">Detail Loker</h3>
                    <div class="page-next">
                        <nav class="d-inline-block" aria-label="breadcrumb text-center">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- end home -->

<!-- START SHAPE -->
<div class="position-relative" style="z-index: 1">
    <div class="shape">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
            <path fill="#FFFFFF" fill-opacity="1"
                d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
    </div>
</div>
<!-- END SHAPE -->


<!-- START JOB-DEATILS -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card job-detail overflow-hidden">
                    <div>
                        <div class="job-details-compnay-profile d-flex justify-content-center">
                            <img src="{{ asset($loker->file->filepath . "/" . $loker->file->filename ) }}" alt="" 
                                class="img-fluid rounded-3 rounded-3">
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="mb-1 mt-4">{{ $loker->title }}</h5>
                                    <ul class="list-inline text-muted mb-0">
                                        {{-- <li class="list-inline-item">
                                            <i class="mdi mdi-account"></i> Operator Produksi
                                        </li> --}}
                                        <li class="list-inline-item text-warning review-rating">
                                        </li>
                                    </ul>
                                </div><!--end col-->
                            </div><!--end row-->    
                        </div>

                        <div class="mt-4">
                            <div class="row g-2">
                                <div class="col-lg-3">
                                    <div class="border rounded-start p-3">
                                        <p class="text-muted mb-0 fs-13">Pendaftaran</p>
                                        <p class="fw-medium fs-15 mb-0"> Rp.30.000</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="border p-3">
                                        <p class="text-muted fs-13 mb-0">Tipe pekerjaan</p>
                                        <p class="fw-medium mb-0">Full Time</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="border p-3">
                                        <p class="text-muted fs-13 mb-0">Pendaftaran Awal</p>
                                        <p class="fw-medium mb-0">{{ $loker->regist_date }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="border rounded-end p-3">
                                        <p class="text-muted fs-13 mb-0">Pendaftaran Terakhir</p>
                                        <p class="fw-medium mb-0">{{ $loker->regist_end_date }}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end Experience-->         
                        <div class="mt-4">
                            <h5 class="mb-3">Qualification </h5>
                            <div>{!! $loker->qualification !!}</div>
                        </div>
                        <div class="mt-3">
                            <div class="row justify-content-center">
                            <a href="{{ route('frontend.apply', $loker->slug) }}" class="btn btn-primary btn-hover w-25 mt-2">Apply Now <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                        
                    </div><!--end card-body-->
                </div><!--end job-detail-->
            </div>
        </div>
    </div>=
</section>
@endsection