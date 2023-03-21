@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-md-25">
        <div class="col-xl-8">
            <div class="job-apply-wrapper">
                <div class="job-apply__content">
                    <h1>
                        Input Lowongan Kerja
                    </h1>
                    <form action="{{ route('admin.loker.store') }}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Judul Lowongan Kerja</label>
                            <input type="text" class="form-control" name="title" placeholder="e.g. PT. Fukusuke">
                        </div>
                        <div class="form-group">
                            <label>Kualifikasi</label>
                            <textarea class="form-control" name="qualification" rows="3" placeholder="Tentang Loker"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload File Loker</label>
                            <div class="dm-tag-wrap">
                                <div class="dm-upload">
                                    <div class="dm-upload__button">
                                        <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload"
                                            name="file_id" onclick="$('#file').click()">
                                            {{-- <img class="svg" src="img/svg/paperclip.svg" alt="paperclip">  --}} Browse</a>
                                        <input type="file" name="file" class="upload-one" id="file">
                                    </div>
                                    <div class="dm-upload__file">
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Awal Pendaftaran</label>
                            <input type="date" class="form-control" name="regist_date" placeholder=" ">
                        </div>
                        <div class="form-group">
                            <label>Akhir Pendaftaran</label>
                            <input type="date" class="form-control" name="regist_end_date" placeholder=" ">
                        </div>
                        <div class="form-group mb-25 status-radio">
                            <label class="mb-15" for="phoneNumber2">Status Loker</label>
                            <div class="d-flex">
                                <div class="radio-horizontal-list d-flex flex-wrap">
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="is_mutu_loker" value=0 id="radio-hl1">
                                        <label for="radio-hl1">
                                            <span class="radio-text">Loker Mutu</span>
                                        </label>
                                    </div>
                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="is_mutu_loker" value=0 id="radio-hl2">
                                        <label for="radio-hl2">
                                            <span class="radio-text">Loker lainnya</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-group d-flex pt-15">
                            <button class="btn btn-primary btn-default btn-squared" type="submit">Submit Loker</button>
                        </div>
                    </form>
                @endsection
