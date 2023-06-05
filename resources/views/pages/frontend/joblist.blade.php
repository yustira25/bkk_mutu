@extends('layouts.guest')

@section('content')
<section class="page-title-box">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h3 class="mb-4">List Loker</h3>
                    <div class="page-next">
                        <nav class="d-inline-block" aria-label="breadcrumb text-center">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li> 
                                {{-- <li class="breadcrumb-item active" aria-current="page"> List Loker </li> --}}
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


<!-- START JOB-LIST -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="me-lg-5">
                    <div class="job-list-header">
                        <form action="/frontend/joblist/search" method="GET">
                            <div class="row g-2">
                                <div class="col-lg-5 col-md-6">
                                    <div class="filler-job-form">
                                        <i class="uil uil-briefcase-alt"></i>
                                        <input type="search" name="search" class="form-control filter-job-input-box" id="exampleFormControlInput1" placeholder="Nama Perusahaan.. ">
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-3 col-md-6">
                                    <button type="submit" class="btn btn-primary w-100"><i class="uil uil-filter"></i> Filter</button>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div><!--end job-list-header-->

                    <!-- Job-list -->
                    <div>
                        <x-job-list :datas="$data" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="modal fade" id="applyNow" tabindex="-1" aria-labelledby="applyNow" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-5">
                        <div class="text-center mb-4">
                            <h5 class="modal-title" id="staticBackdropLabel">Apply Loker</h5>
                        </div>
                        <div class="position-absolute end-0 top-0 p-3">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="nameControlInput" class="form-label">Tanggal Vaksin 1</label>
                            <input type="date" class="form-control" id="nameControlInput" placeholder=" ">
                        </div>
                        <div class="mb-3">
                            <label for="nameControlInput" class="form-label">Tanggal Vaksin 2</label>
                            <input type="date" class="form-control" id="nameControlInput" placeholder=" ">
                        </div>
                        <div class="mb-3">
                            <label for="nameControlInput" class="form-label">Tanggal Vaksin 3</label>
                            <input type="date" class="form-control" id="nameControlInput" placeholder=" ">
                        </div>
                        <div class="mb-3">
                            <label for="emailControlInput2" class="form-label">Nomor Ijazah</label>
                            <input type="text" class="form-control" id="emailControlInput2" placeholder="Nomor ijazah terakhir">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="inputGroupFile01">Pengalaman Kerja/Paklaring</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="inputGroupFile01">Bukti Transfer Pendaftaran</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Apply</button>
                    </div>
                </div>
            </div>
        </div><!-- END APPLY MODAL -->
    </div>
</section>
@endsection