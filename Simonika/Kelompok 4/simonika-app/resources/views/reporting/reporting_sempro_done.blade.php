@extends('layout.main')

@section('contents')
<div class="container mt-4">
    <h3 class="text-uppercase text-center">Rekapitulasi Mahasiswa</h3>
    <h3 class="text-uppercase text-center">Sudah Melakukan Seminar Proposal</h3>
</div>

<div class="container mx-5">
    {{-- session alert confirm for delete this layout all my post --}}
    @if (session()->has('delete'))
    <div class="alert alert-danger col-lg-10" role="alert">
        {{ session('delete') }}
    </div>
    @endif
    <div class="table-responsive col-md-11 mt-5">
        <table class="table table-striped table-sm table-bordered border-secondary">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Judul PA</th>
                    <th scope="col">Kategori PA</th>
                    <th scope="col">Nilai PA</th>
                    <th scope="col">Hasil PA</th>
                    {{-- <th scope="col">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($information as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td class="text-center">{{ $item->nim }}</td>
                    <td>{{ $item->judulPA }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->nilai }}</td>
                    <td>{{ $item->result->value }}</td>
                    {{-- <td class="text-center">
                        <a href="/laporan/sempro/done/{{ $item->id }}" class="badge bg-primary"><i
                                class="bi bi-eye"></i></a>
                        <a href="/dashboard/post/quia/edit" class="badge bg-success"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="/penilaian/sempro/{{ $item->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0"
                                onclick="return confirm('Are you sure you want to delete this')"><i
                                    class="bi bi-x-circle"></i></button>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="form-group row">
        <div class="col-md-11">
            <a href="/laporan/sempro/done/print" target="_blank" class="btn btn-secondary float-end mb-5"><i
                    class="bi bi-printer me-2"></i>Print</a>
            {{-- <button type="submit" class="btn btn-primary me-2 float-end mb-5">Generate All</button> --}}
        </div>
    </div>
</div>
@endsection