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

        <title>CRUD LARAVEL</title>
    </head>

    <body>
        <h1 class="text-center mb-5">Tambah Data Siswa</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5">Tambah Data Siswa</h1>
                            @php
                                $siswa_add = App\Models\User::where('role','user')->get();
                            @endphp
                            <form action="/insertsiswa" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">NIS</label>
                                    <input type="number" name="nis" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="NIS">
                                    @error('nis')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                        <select class="form-select" name="nama" aria-label="Default select example">
                                            <option disabled selected>- Pilih siswa -</option>
                                            @foreach ( $siswa_add as $a )
                                            <option value="{{$a->name}}">{{$a->name}}</option>
                                            @endforeach
                                        </select>
                                        {{-- <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{Auth::user()->name}}">
                                        @error('nama')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Agama</label>
                                        <select class="form-select" name="agama" aria-label="Default select example">
                                            <option disabled selected>- Pilih Agama -</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    @error('agama')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="mb-3">
                                        <br> <label for="exampleInputEmail1" class="form-label">Kelas</label>
                                        <select class="form-select" @error('kelas_id') @enderror name="kelas_id"
                                            id="kelas_id">
                                            <option value disabled selected>Pilih Kelas</option>
                                            @foreach ($data as $a)
                                                <option value="{{ $a->id }}">{{ $a->kelas }}</option>
                                            @endforeach
                                        </select>
                                        @error('kelas_id')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br><div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
                                            @error('alamat')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <br>
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">No Telpon</label>
                                                <input type="number" name="notelpon" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telpon">
                                                @error('notelpon')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <br><label for="exampleInputEmail1" class="form-label">Jenis Kelamin :
                                                </label></br>
                                                <input class="form-check-input" type="radio" name="jeniskelamin"
                                                    id="jeniskelamin" value="laki-laki">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="jeniskelamin"
                                                    id="jeniskelamin" value="perempuan">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Perempuan
                                                </label>
                                                @error('jeniskelamin')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="/datasiswa" class="btn btn-danger waves-effect waves-light mb-10">Kembali</a>
                                            </div>
                            </form>
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

    </html>
@endsection
