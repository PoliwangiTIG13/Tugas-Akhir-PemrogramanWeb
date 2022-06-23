<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="simonika, laravel, bootstrap, database">
    <meta name="description" content="Sistem Informasi Proyek Akhir Mahasiswa Jurusan Teknik Informatika (Simonika)">
    <meta name="robots" content="noindex,nofollow">
    <title>Simonika || {{ $title }}</title>
    <link rel="canonical" href="https://ti.poliwangi.ac.id/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/img/logo.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    {{-- Feather Icons --}}
    <link rel="stylesheet" href="https://unpkg.com/feather-icons">
</head>

<body onload="window.print();">
    <div class="container">
        <div class="container mt-5">
            <h3 class="text-uppercase text-center">Rekapitulasi Mahasiswa</h3>
            <h3 class="text-uppercase text-center">Belum Melakukan Seminar Hasil</h3>
        </div>

        <div class="container mx-auto mb-5">
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="{{ asset('dist/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('dist/js/dashboard1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

</body>

</html>