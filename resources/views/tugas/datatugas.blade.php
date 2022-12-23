@extends('layout.main')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
            integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link
            href="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
            rel="stylesheet" type="text/css" />
        <link
            href="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
            rel="stylesheet" type="text/css" />
        <link
            href="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
            rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>CRUD LARAVEL</title>
    </head>

    <body>
        <h1 class="text-center mb-5">TUGAS</h1>
        <div class="row-2">
            <div class="container-fluid">
                <div class="justify-content-center"></div>
                <div class="col-xl-12">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="container">
                                <br><h1 class="text-center mb-5">TUGAS</h1>
                                <hr>
                                @if(auth()->user()->role=="admin")
                                <a href="/tambahtugas" class="btn btn-success mb-3"><i class="fa-solid fa-plus"></i></a>
                                @endif
                                <!--@if ($message = Session::get('succes'))
    <div class="alert alert-success" role="alert">
                                    {{ $message }}
                                </div>
    @endif-->
                                <table id="datatable" class="table text-center table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Halaman</th>
                                            <th scope="col">Tenggat Waktu</th>
                                            <th scope="col">Dibuat</th>
                                            @if(auth()->user()->role=="admin")
                                            <th scope="col">Aksi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $row)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ asset('fototugas/' . $row->foto) }}" alt=""
                                                        style="width: 40px">
                                                </td>
                                                <td>{{ $row->mapel ? $row->mapel->mapel : 'Data Tidak Ada' }}</td>
                                                <td>{{ $row->hal }}</td>
                                                <td>{{ $row->dl }}</td>
                                                <td>{{ $row->created_at}}</td>

                                                @if(auth()->user()->role=="admin")
                                                <td scope="row">
                                                    <a href="/tampilkandatatugas/{{ $row->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-sharp fa-solid fa-pen-to-square"></i></a>

                                                    <a href="#" class="btn btn-danger deletetugas"
                                                        data-id="{{ $row->id }}"
                                                        data-nama="{{ $row->mapel->mapel }}"><i
                                                            class="fa-sharp fa-solid fa-trash"></i></a>
                                                        </td>
                                                        @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://cdn.s.net/v/dt/dt-1.12.1/datatables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script
            src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}">
        </script>
        <script
            src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}">
        </script>
        <script
            src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
        </script>
        <script
            src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
        </script>
        <script src="{{ asset('admin/template/morvin-django/layouts/assets/js/pages/datatables.init.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
                </script>
                -->
    </body>
    <script>
        $('.deletetugas').click(function() {
            var pegawaiid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin Ingin Menghapus?",
                    text: "Kamu akan menghapus data tugas dengan mapel " + nama + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletetugas/" + pegawaiid + ""
                        swal("Data berhasil di hapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi di hapus");
                    }
                });
        });
    </script>
    <script>
        @if (Session::has('succes'))
            toastr.success("{{ Session::get('succes') }}");
        @endif
    </script>

    </html>
@endsection
