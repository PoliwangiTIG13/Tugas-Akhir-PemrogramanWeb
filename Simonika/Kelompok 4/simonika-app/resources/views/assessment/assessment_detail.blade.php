@extends('layout.main')

@section('contents')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Assessment</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-danger text-decoration-none"
                                href="/penilaian">Simonika</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <h3 class="text-uppercase text-center">Rekapitulasi Nilai</h3>
    <h3 class="text-uppercase text-center">Proyek Akhir Mahasiswa</h3>
</div>

<div class="container-fluid mx-5 mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="bd-example">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" required
                            value="{{ $information->nama }}" readonly>
                    </div>
                </div>
            </div>
            <div class="bd-example">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">NIM Mahasiswa</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" required
                            value="{{ $information->nim }}" readonly>
                    </div>
                </div>
            </div>
            <div class="bd-example">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Judul Laporan PA</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" required
                            value="{{ $information->judulPA }}" readonly>
                    </div>
                </div>
            </div>
            <div class="bd-example">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Kategori PA</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" required
                            value="{{ $information->category->name }}" readonly>
                    </div>
                </div>
            </div>
            <div class="bd-example">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Dosen Pembimbing I</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" required
                            value="{{ $information->dosenone->name }}" readonly>
                    </div>
                </div>
            </div>
            <div class="bd-example">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Dosen Pembimbing II</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" required
                            value="{{ $information->dosentwo->name }}" readonly>
                    </div>
                </div>
            </div>
            <div class="bd-example">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Dosen Penguji I</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" required
                            value="{{ $information->dosenthird->name }}" readonly>
                    </div>
                </div>
            </div>
            <div class="bd-example">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Dosen Penguji II</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" required
                            value="{{ $information->dosenfour->name }}" readonly>
                    </div>
                </div>
            </div>
            <div class="bd-example">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Nilai PA</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" required
                            value="{{ $information->nilai }}" readonly>
                    </div>
                </div>
            </div>
            <div class="bd-example">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Hasil PA</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" required
                            value="{{ $information->result->value }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-9 mx-10 mt-2">
            <a href="/penilaian" class="btn btn-danger float-end"><i class="bi bi-arrow-left-circle me-2"></i>Back</a>
        </div>
    </div>
</div>
@endsection