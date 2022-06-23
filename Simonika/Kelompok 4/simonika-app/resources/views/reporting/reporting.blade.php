@extends('layout.main')

@section('contents')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Reporting</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-danger text-decoration-none"
                                    href="/reporting">Simonika</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-3">
        <div class="col-md-6 col-12">
            <h5 class="header">Student Reporting</h5>
            <div class="row">
                <div class="col-md-6 col-6">
                    <div class="card border-secondary" style="border-radius: 20px">
                        <img src="{{ asset('dist/img/walpaper (6).jpg') }}" class="card-img-top" height="150px"
                            alt="Image Ruang Seminar Proposal"
                            style="border-top-right-radius: 20px; border-top-left-radius: 20px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="/laporan/sempro" class="text-decoration-none text-dark">
                                    Seminar Proposal</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="card border-secondary" style="border-radius: 20px">
                        <img src="{{ asset('dist/img/walpaper (5).jpg') }}" class="card-img-top" height="150px"
                            alt="Image Ruang Seminar Hasil"
                            style="border-top-right-radius: 20px; border-top-left-radius: 20px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="/laporan/semhas" class="text-decoration-none text-dark">
                                    Seminar Hasil</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
