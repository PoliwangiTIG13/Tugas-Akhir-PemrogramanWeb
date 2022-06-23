@extends('layout.main')

@section('contents')
    <div class="container mt-4">
        <h3 class="text-uppercase text-center">Informasi Mahasiswa</h3>
        <h3 class="text-uppercase text-center">Seminar Proposal Proyek Akhir</h3>
    </div>

    <div class="container-fluid mx-auto mt-3">

        <div class="row">
            <div class="col-md-12">
                <div class="bd-example">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $information->nama }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nim</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $information->nim }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Judul Laporan PA</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $information->judulPA }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Kategori PA</label>
                        <div class="col-md-10">
                            {{-- <input type="text" class="form-control" value="{{ $information->category->name }}" readonly> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Dosen Pembimbing I</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $information->dosenone->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Dosen Pembimbing II</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $information->dosentwo->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Dosen Penguji I</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $information->dosenthird->name }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Dosen Penguji II</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $information->dosenfour->name }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nilai PA</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $information->nilai }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Hasil PA</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $information->result->value }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-9 mx-10 mt-2">
                            {{-- <button class="btn btn-success float-end">Print</button> --}}
                            <button type="submit" class="btn btn-primary me-2 float-end"><i
                                    class="bi bi-arrow-right-circle pe-2"></i>Generate</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
