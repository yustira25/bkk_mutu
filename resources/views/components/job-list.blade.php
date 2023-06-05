@foreach ($datas as $loker)
    <div class="job-box card mt-5">
        <div class="bookmark-label text-center">
            <a href="javascript:void(0)" class="align-middle text-white"><i class="mdi mdi-star"></i></a>
        </div>
        <div class="p-4">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="mb-2 mb-md-0">
                        <h5 class="fs-20 mb-0">
                            <a href="{{ route('frontend.jobdetail', $loker->slug) }}" class="text-dark">{{ $loker->title }}</a>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex mb-0">
                        <div class="flex-shrink-0">
                            <i class="uil uil-clock-three text-primary me-1"></i>
                        </div>
                        <p class="text-muted mb-0">{{ $loker->regist_end_date }}</p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-2">
                    <div>
                        <span class="badge bg-soft-success fs-13 mt-1">Full Time</span>
                    </div>
                </div>
                <!--end col-->
            </div>

            <!--end row-->
        </div>
        <div class="p-3 bg-light">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div>
                        <p class="text-muted mb-0"><span class="text-dark">Pendaftaran :</span> Rp. 30.000</p>
                    </div>
                </div>
                <!--end col-->
                {{-- <div class="col-lg-2 col-md-3">
                    <div class="text-start text-md-end">
                        <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i
                                class="mdi mdi-chevron-double-right"></i></a>
                    </div>
                </div> --}}
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </div>
@endforeach