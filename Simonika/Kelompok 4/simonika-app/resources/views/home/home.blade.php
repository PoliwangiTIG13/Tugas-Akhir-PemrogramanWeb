@extends('layout.main')

@section('contents')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Home</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-danger text-decoration-none"
                                href="/home">Simonika</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h3 class="text-uppercase text-center">Rekapitulasi Hasil</h3>
    <h3 class="text-uppercase text-center">Proyek Akhir Mahasiswa</h3>
</div>

<div class="container mx-3">
    <div class="table-responsive col-md-11 mt-5">
        <table class="table table-striped table-sm table-bordered border-secondary">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Pembimbing I</th>
                    <th scope="col">Pembimbing II</th>
                    <th scope="col">Kategori PA</th>
                    <th scope="col">Hasil</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($home as $item)
                <tr>
                    <td class="text-center">{{ $home->count() * ($home->currentPage() - 1) + $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td class="text-center">{{ $item->nim }}</td>
                    <td>{{ $item->dosenone->name }}</td>
                    <td>{{ $item->dosentwo->name }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->result->value }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $home->links() }}
    </div>
    <div class="form-group row">
        <div class="col-md-11 mt-2">
            <a href="/home/print" target="_blank" class="btn btn-secondary float-end mb-5"><i
                    class="bi bi-printer me-2"></i>Print</a>
            {{-- <button type="submit" class="btn btn-primary me-2 float-end mb-5">Generate All</button> --}}
        </div>
    </div>
</div>
@endsection