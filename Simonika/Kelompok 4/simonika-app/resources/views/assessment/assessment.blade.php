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

<div class="container mx-3">
    {{-- session alert confirm for insert this layout all my data --}}
    @if (session()->has('success'))
    <div class="alert alert-success col-md-10" role="alert">
        {{ session('success') }}
    </div>
    @endif

    {{-- session alert confirm for delete this layout all my data --}}
    @if (session()->has('delete'))
    <div class="alert alert-danger col-md-10" role="alert">
        {{ session('delete') }}
    </div>
    @endif

    {{-- session alert confirm for update this layout all my data --}}
    @if (session()->has('update'))
    <div class="alert alert-info col-md-10" role="alert">
        {{ session('update') }}
    </div>
    @endif

    <div class="table-responsive col-md-10">
        <a href="/penilaian/create" class="btn btn-warning mb-2">Create New Data</a>
        <table class="table table-striped table-sm table-bordered border-secondary mt-3">
            <thead>
                <tr class="text-center">
                    <th scope="col">Id</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Name</th>
                    {{-- <th scope="col">Title</th> --}}
                    <th scope="col">Category</th>
                    <th scope="col">Value</th>
                    <th scope="col">Result</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($informations as $information)
                <tr>
                    <td class="text-center">{{ $informations->count() * ($informations->currentPage() - 1) +
                        $loop->iteration }}</td>
                    <td class="text-center">{{ $information->nim }}</td>
                    <td>{{ $information->nama }}</td>
                    {{-- <td>{{ $information->judulPA }}</td> --}}
                    <td class="text-center">{{ $information->category->name }}</td>
                    <td>{{ $information->nilai }}</td>
                    <td>{{ $information->result->value }}</td>
                    <td class="text-center">
                        <form action="{{ route('penilaian.destroy',$information->id) }}" method="POST">
                            <a href="{{ route('penilaian.show',$information->id) }}" class="badge bg-primary"><i
                                    class="bi bi-eye"></i></a>
                            <a href="{{ route('penilaian.edit',$information->id) }}" class="badge bg-success"><i
                                    class="bi bi-pencil-square"></i></a>
                            @csrf
                            @method('DELETE')
                            <button class="badge bg-danger border-0"
                                onclick="return confirm('Are you sure you want to delete this')"><i
                                    class="bi bi-x-circle"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-3 mb-3">
        {{ $informations->links() }}
    </div>
</div>
@endsection