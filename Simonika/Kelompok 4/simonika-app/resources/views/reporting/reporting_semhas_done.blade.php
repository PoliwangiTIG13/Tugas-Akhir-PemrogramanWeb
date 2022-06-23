@extends('layout.main')

@section('contents')
<div class="container mt-4">
    <h3 class="text-uppercase text-center">Rekapitulasi Mahasiswa</h3>
    <h3 class="text-uppercase text-center">Sudah Melakukan Seminar Hasil</h3>
</div>

<div class="container mx-5">
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
                        <a href="/dashboard/post/quia/edit" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                        <a href="/dashboard/post/quia/edit" class="badge bg-success"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="/dashboard/post/quia" method="post" class="d-inline">
                            <input type="hidden" name="_method" value="delete"> <input type="hidden" name="_token"
                                value="t2prqz8mZzJ4kwfGbT8aBOFYZgB2coJkK1IHlwt7"> <button
                                class="badge bg-danger border-0"
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
            <a href="/laporan/semhas/done/print" target="_blank" class="btn btn-secondary float-end mb-5"><i
                    class="bi bi-printer me-2"></i>Print</a>
            {{-- <button type="submit" class="btn btn-primary me-2 float-end mb-5">Generate All</button> --}}
        </div>
    </div>
</div>
@endsection