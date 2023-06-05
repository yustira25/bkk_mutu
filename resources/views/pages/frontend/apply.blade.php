@extends('layouts.guest')

@section('content')
<section class="page-title-box">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h3 class="mb-4">Apply</h3>
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
    </div>
    <div class="page-content">
        <form action="{{ route('frontend.apply.post') }}" enctype="multipart/form-data" method="POST" class="auth-form">
            {{ csrf_field() }}

            <div class="p-5">
                <div class="text-center mb-4">
                    <h5 class="modal-title" id="staticBackdropLabel">Apply Loker</h5>
                </div>
                <div class="mb-3">
                    <label for="nameControlInput" class="form-label">Tanggal Vaksin 1</label>
                    <input type="date" class="form-control" name="tgl_vaksin1" id="nameControlInput" placeholder=" ">
                    <input type="hidden" value="{{ $loker->id }}" name="loker_id">
                </div>
                <div class="mb-3">
                    <label for="nameControlInput" class="form-label">Tanggal Vaksin 2</label>
                    <input type="date" class="form-control" name="tgl_vaksin2" id="nameControlInput" placeholder=" ">
                </div>
                <div class="mb-3">
                    <label for="nameControlInput" class="form-label">Tanggal Vaksin 3</label>
                    <input type="date" class="form-control" name="tgl_vaksin3" id="nameControlInput" placeholder=" ">
                </div>
                <div class="mb-3">
                    <label for="emailControlInput2" class="form-label">Nomor Ijazah</label>
                    <input type="text" class="form-control" name="no_ijazah" id="emailControlInput2" placeholder="Nomor ijazah terakhir">
                </div>
                <div class="mb-4">
                    <label class="form-label" for="inputGroupFile01">Pengalaman Kerja/Paklaring</label>
                    <input type="file" class="form-control" name="paklaring_file_id" id="inputGroupFile01">
                </div>
                <div class="mb-4">
                    <label class="form-label" for="inputGroupFile01">Bukti Transfer Pendaftaran</label>
                    <input type="file" class="form-control" name="bukti_transfer_id" id="inputGroupFile01">
                </div>
                <button type="submit" class="btn btn-primary w-100">Apply</button>
            </div>
        </form>
    </div>
</section>
@endsection