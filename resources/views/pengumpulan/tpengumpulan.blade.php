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
        <h1 class="text-center mb-5">Pengumpulan</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5">Pengumpulan</h1>
                            <form action="/intpengum" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <select class="form-select" @error('siswas_id') @enderror name="siswas_id"
                                        id="siswas_id">
                                        <option value disabled selected>Pilih Siswa</option>
                                        @foreach ($datas as $b)
                                            <option value="{{ $b->id }}">{{ $b->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('siswas_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                   <br> <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Halaman</label>
                                        <input type="text" name="hal" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Halaman">
                                        @error('hal')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    <div class="mb-3">
                                        <br> <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                                        <select class="form-select" @error('mapels_id') @enderror name="mapels_id"
                                            id="mapels_id">
                                            <option value disabled selected>Pilih Mapel</option>
                                            @foreach ($data as $a)
                                                <option value="{{ $a->id }}">{{ $a->mapel }}</option>
                                            @endforeach
                                        </select>
                                        @error('mapels_id')
                                            <div class="text-danger">
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <br><label for="exampleInputEmail1" class="form-label">Keterangan : </label></br>
                                        <input class="form-check-input" type="radio" name="ket" id="ket"
                                            value="Sudah">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sudah
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="ket" id="ket"
                                            value="Belum">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Belum
                                        </label>
                                        @error('ket')
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
                                        <a href="/pengumpulan" class="btn btn-danger waves-effect waves-light mb-10">Kembali</a>
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
