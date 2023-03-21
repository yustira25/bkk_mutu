@extends('layouts.app')

@section('content')
<br>
    <div class="row">
        <div class="col-12 mb-30">
            <div class="support-ticket-system support-ticket-system--search">
                <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Data Input Loker Pelamar</h4>
                        </div>
                    </div>
                    <div class="action-btn">
                        <a href="{{ route('admin.input_loker.inputlokerexport') }}" class="btn btn-primary">
                            Export
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="search-result global-shadow rounded-pill bg-white border border-light">
                            <form action="{{ route('admin.loker.search') }}" method="GET" class="d-flex align-items-center justify-content-between">
                                <div class="border-right d-flex align-items-center w-100  ps-25 pe-sm-25 pe-0 py-1">
                                    <img src="{{ asset('admin_assets/img/svg/search.svg') }}" alt="search" class="svg">
                                    <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search" name="search" aria-label="Search">
                                </div>
                                <button type="submit" class="border-0 bg-transparent px-25">search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-4">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr class="userDatatable-header">
                                    <th>
                                        <span class="userDatatable-title">ID</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Pelamar ID</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Tgl Vaksin 1</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Tgl Vaksin 2</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Tgl Vaksin 3</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">No Ijazah SMK</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Pengalaman Kerja</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Bukti Transfer Pendaftaran</span>
                                    </th>
                                    {{-- <th class="actions">
                                        <span class="userDatatable-title">Actions</span>
                                    </th> --}}
                                </tr>
                                @foreach ($pelamar as $lamar)
                                    <tr>
                                        <td>{{ $lamar->id }}</td>
                                        <td>{{ $lamar->user_id }}</td>
                                        <td>{{ $lamar->tgl_vaksin1 }}</td>
                                        <td>{{ $lamar->tgl_vaksin2 }}</td>
                                        <td>{{ $lamar->tgl_vaksin3 }}</td>
                                        <td>{{ $lamar->no_ijazah }}</td>
                                        <td>{{ $lamar->paklaring_file_id }}</td>
                                        <td>{{ $lamar->bukti_transfer_id }}</td>
                                        {{-- <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                <li>
                                                    <a href="#" class="view">view
                                                        <i class="uil uil-setting"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">edit
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">del
                                                        <i class="uil uil-trash-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </thead>
                        </table>
</div @endsection
