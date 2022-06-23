@extends('layout.main')

@section('contents')
<div class="container mt-4">
    <h3 class="text-uppercase text-center">Rekapitulasi Nilai</h3>
    <h3 class="text-uppercase text-center">Seminar Hasil Proyek Akhir</h3>
</div>

<div class="container-fluid mx-auto mt-3">
    {{-- session alert confirm for insert this layout all my data --}}
    @if (session()->has('success'))
    <div class="alert alert-success col-md-9" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="bd-example">

                <!-- form action method post for formulir create  -->
                <form action="/penilaian/semhas" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                placeholder="Nama Mahasiswa" required value="{{ old('nama') }}">
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
                                placeholder="NIM Mahasiswa" required value="{{ old('nim') }}">
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
                                value="{{ old('judulPA') }}">
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
                                <option selected>Pilih Kategori Proyek Akhir</option>
                                @foreach ($category as $categories)
                                @if (old('category_id') == $categories->id)
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
                                <option selected>Pilih Nama Dosen Pembimbing I</option>
                                @foreach ($dosenone as $dosenones)
                                @if (old('dosenone_id') == $dosenones->id)
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
                                <option selected>Pilih Nama Dosen Pembimbing II</option>
                                @foreach ($dosentwo as $dosentwos)
                                @if (old('dosentwo_id') == $dosentwos->id)
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
                                <option selected>Pilih Nama Dosen Penguji I</option>
                                @foreach ($dosenthird as $dosenthirds)
                                @if (old('dosenthird_id') == $dosenthirds->id)
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
                                @if (old('dosenfour_id') == $dosenfours->id)
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
                                placeholder="Penilaian Proyek Akkhir" required value="{{ old('nilai') }}">
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
                                <option selected>Pilih Hasil Proyek Akhir</option>
                                @foreach ($mark as $marks)
                                @if (old('result_id') == $marks->id)
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
                            <button type="submit" class="btn btn-primary me-2 float-end"><i
                                    class="bi bi-arrow-right-circle pe-2"></i>Generate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <div class="table-responsive col-md-10 mt-4">
        <table class="table table-striped table-sm table-bordered border-dark">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">PENILAI</th>
                    <th scope="col">NILAI</th>
                    <th scope="col">NILAI TERTIMBANG</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Pembimbing I</td>
                    <td class="text-center">null</td>
                    <td class="text-center">30% x null = null</td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>Pembimbing II</td>
                    <td class="text-center">null</td>
                    <td class="text-center">30% x null = null</td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>Penguji I</td>
                    <td class="text-center">null</td>
                    <td class="text-center">20% x null = null</td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td>Penguji II</td>
                    <td class="text-center">null</td>
                    <td class="text-center">20% x null = null</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center mt-5">Jumlah Nilai Angka</td>
                    <td class="text-center">null</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center mt-5">Jumlah Nilai Huruf</td>
                    <td class="text-center">null</td>
                </tr>
            </tbody>
        </table>
    </div> --}}
</div>
@endsection