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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
            integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />


        <title>CRUD LARAVEL</title>
    </head>

    <body>
        <h1 class="text-center mb-5">Data Siswa</h1>
        <div class="row">
            <div class="row-2">
                <div class="container-fluid">
                    <div class="justify-content-center"></div>
                    <div class="col-xl-12">
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="container">
                                    <br><h1 class="text-center mb-5">Data Siswa</h1>
                                    <hr>
                                    @if(auth()->user()->role=="admin")
                                    <a href="/tambahsiswa" class="btn btn-success mb-3"><i class="fa-solid fa-plus"></i></a>
                                    @endif
                                    <table id="datatable" class="table text-center table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Foto</th>
                                                <th scope="col">NIS</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Agama</th>
                                                <th scope="col">Kelas</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No Telpon</th>
                                                <th scope="col">Jenis Kelamin</th>
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
                                                        <img src="{{ asset('fotosiswa/' . $row->foto) }}" alt=""
                                                            style="width: 40px">
                                                    </td>
                                                    <td>{{ $row->nis }}</td>
                                                    <td>{{ $row->nama }}</td>
                                                    <td>{{ $row->agama }}</td>
                                                    <td>{{ $row->kelas ? $row->kelas->kelas : 'Data Tidak Ada' }}</td>
                                                    <td>{{ $row->alamat }}</td>
                                                    <td>0{{ $row->notelpon }}</td>
                                                    <td>{{ $row->jeniskelamin }}</td>
                                                    <td>{{ $row->created_at}}</td>
                                                    @if(auth()->user()->role=="admin")
                                                    <td scope="row">
                                                        <a href="/tampilkandatasiswa/{{ $row->id }}"
                                                            class="btn btn-warning"><i
                                                                class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                        <a href="#" class="btn btn-danger deletesiswa"
                                                            data-id="{{ $row->id }}"
                                                            data-nama="{{ $row->nama }}"><i
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
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
    </body>
    <script>
        $('.deletesiswa').click(function() {
            var pegawaiid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin Ingin Menghapus?",
                    text: "Kamu akan menghapus data siswa dengan nama " + nama + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletesiswa/" + pegawaiid + ""
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
     <script>
        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>



    </html>
@endsection
