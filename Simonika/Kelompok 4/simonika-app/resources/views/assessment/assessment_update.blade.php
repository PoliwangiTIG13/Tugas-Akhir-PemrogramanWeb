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

<div class="container-fluid mx-auto mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="bd-example">
                <form action="{{ route('penilaian.update', $information->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                placeholder="Nama Mahasiswa" required value="{{ old('nama', $information->nama) }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nim</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim"
                                placeholder="NIM Mahasiswa" required value="{{ old('nim', $information->nim) }}">
                            @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Judul Laporan PA</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control @error('judulPA') is-invalid @enderror"
                                name="judulPA" placeholder="Judul Laporan Seminar Proposal Proyek Akhir" required
                                value="{{ old('judulPA', $information->judulPA) }}">
                            @error('judulPA')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Kategori PA</label>
                        <div class="col-md-7">
                            <select class="form-select" name="category_id" required>
                                {{-- <option selected>Pilih Kategori Proyek Akhir</option> --}}
                                @foreach ($category as $categories)
                                @if (old('category_id', $information->category_id) == $categories->id)
                                <option value="{{ $categories->id }}" selected>{{ $categories->name }}
                                </option>
                                @else
                                <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Dosen Pembimbing I</label>
                        <div class="col-md-7">
                            <select class="form-select" name="dosenone_id" required>
                                {{-- <option selected>Pilih Nama Dosen Pembimbing I</option> --}}
                                @foreach ($dosenone as $dosenones)
                                @if (old('dosenone_id', $information->dosenone_id) == $dosenones->id)
                                <option value="{{ $dosenones->id }}" selected>{{ $dosenones->name }}
                                </option>
                                @else
                                <option value="{{ $dosenones->id }}">{{ $dosenones->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Dosen Pembimbing II</label>
                        <div class="col-md-7">
                            <select class="form-select" name="dosentwo_id" required>
                                {{-- <option selected>Pilih Nama Dosen Pembimbing II</option> --}}
                                @foreach ($dosentwo as $dosentwos)
                                @if (old('dosentwo_id', $information->dosentwo_id) == $dosentwos->id)
                                <option value="{{ $dosentwos->id }}" selected>{{ $dosentwos->name }}
                                </option>
                                @else
                                <option value="{{ $dosentwos->id }}">{{ $dosentwos->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Dosen Penguji I</label>
                        <div class="col-md-7">
                            <select class="form-select" name="dosenthird_id" required>
                                {{-- <option selected>Pilih Nama Dosen Penguji I</option> --}}
                                @foreach ($dosenthird as $dosenthirds)
                                @if (old('dosenthird_id', $information->dosenthird_id) == $dosenthirds->id)
                                <option value="{{ $dosenthirds->id }}" selected>{{ $dosenthirds->name }}
                                </option>
                                @else
                                <option value="{{ $dosenthirds->id }}">{{ $dosenthirds->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Dosen Penguji II</label>
                        <div class="col-md-7">
                            <select class="form-select" name="dosenfour_id" required>
                                <option selected>Pilih Nama Dosen Penguji II</option>
                                @foreach ($dosenfour as $dosenfours)
                                @if (old('dosenfour_id', $information->dosenfour_id) == $dosenfours->id)
                                <option value="{{ $dosenfours->id }}" selected>{{ $dosenfours->name }}
                                </option>
                                @else
                                <option value="{{ $dosenfours->id }}">{{ $dosenfours->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nilai PA</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control @error('nilai') is-invalid @enderror" name="nilai"
                                placeholder="Penilaian Proyek Akkhir" required
                                value="{{ old('nilai', $information->nilai) }}">
                            @error('nilai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Hasil PA</label>
                        <div class="col-md-7">
                            <select class="form-select" name="result_id" required>
                                {{-- <option selected>Pilih Hasil Proyek Akhir</option> --}}
                                @foreach ($mark as $marks)
                                @if (old('result_id', $information->result_id) == $marks->id)
                                <option value="{{ $marks->id }}" selected>{{ $marks->value }}</option>
                                @else
                                <option value="{{ $marks->id }}">{{ $marks->value }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-9 mx-10 mt-2">
                            {{-- <button class="btn btn-success float-end">Print</button> --}}
                            <button type="submit" class="btn btn-primary float-end"><i
                                    class="bi bi-arrow-right-circle pe-2"></i>Update</button>
                        </div>
                    </div>
                    {{-- <button type="submit" class="btn btn-primary me-2 float-end">Generate</button> --}}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection