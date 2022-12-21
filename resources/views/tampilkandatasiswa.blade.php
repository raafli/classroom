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
        <h1 class="text-center mb-5">Edit Data Siswa</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5">Edit Data Siswa</h1>
                            <form action="/updatedatasiswa/{{ $data->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">NIS</label>
                                    <input type="text" readonly name="nis" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nis }}">
                                    @error('nis')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $data->nama }}">
                                        @error('nama')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Agama</label>
                                        <select class="form-select" name="agama" aria-label="Default select example">
                                            <option value="islam" {{ $data->agama == 'islam' ? 'selected' : '' }}>Islam
                                            </option>
                                            <option value="kristen" {{ $data->agama == 'kristen' ? 'selected' : '' }}>
                                                Kristen</option>
                                            <option value="katolik {{ $data->agama == 'katolik' ? 'selected' : '' }}">
                                                Katolik</option>
                                            <option value="hindu" {{ $data->agama == 'hindu' ? 'selected' : '' }}>Hindu
                                            </option>
                                            <option value="buddha" {{ $data->agama == 'buddha' ? 'selected' : '' }}>Buddha
                                            </option>
                                            <option value="konghucu" {{ $data->agama == 'konghucu' ? 'selected' : '' }}>
                                                Konghucu</option>
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
                                            @foreach ($datas as $a)
                                                <option value="{{ $a->id }}"<?php if ($data->kelas_id == $a->id) {
                                                    echo 'selected';
                                                } ?>>{{ $a->kelas }}
                                                </option>>
                                            @endforeach
                                        </select>
                                        @error('kelas_id')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                value="{{ $data->alamat }}">
                                            @error('alamat')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <br>
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">No Telpon</label>
                                                <input type="number" name="notelpon" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                    value="{{ $data->notelpon }}">
                                                @error('notelpon')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <br><label for="exampleInputEmail1" class="form-label">Jenis Kelamin :
                                                </label></br>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    <input class="form-check-input" type="radio" name="jeniskelamin"
                                                        id="jeniskelamin" value="laki-laki" <?php if ($data['jeniskelamin'] == 'laki-laki') {
                                                            echo 'checked';
                                                        } ?>>Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <input class="form-check-input" type="radio" name="jeniskelamin"
                                                        id="jeniskelamin" value="perempuan" <?php if ($data['jeniskelamin'] == 'perempuan') {
                                                            echo 'checked';
                                                        } ?>>Perempuan
                                                </label>
                                                @error('jeniskelamin')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                                                <br><img class="img mb-3"src="{{ asset('fotosiswa/' . $data->foto) }}"
                                                    alt="" style="width: 90px" alt="">
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
