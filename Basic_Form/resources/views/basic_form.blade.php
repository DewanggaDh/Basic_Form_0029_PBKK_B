<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Basic Form</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                {{-- Pengetesan --}}
            <div class="card mt-5">
                <h3 class="card-title text-center mt-5">
                    Form Dasar
                </h3>
                <br/>
                @if (count($errors) > 0)
                <div class = "errorero">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <br/>
                <div class="card-body">
                    {{-- back up "{{route('form_dasar')}}" --}}
                    <form method="POST" action="/valida" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Rumah</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
                        </div>
                        <div class="form-group">
                            <label for="wa">Nomor WA</label>
                            <input type="text" class="form-control" id="wa" name="wa" value="{{ old('wa') }}">
                        </div>
                        <div class="form-group">
                            <label for="line">ID Line</label>
                            <input type="text" class="form-control" id="line" name="line" value="{{ old('line') }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="number">Masukan angka float favorit anda</label>
                            <input type="text" class="form-control" id="number" name="number" value="{{ old('number') }}">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Profil</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" value = "{{ old('foto') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Masukkan</button>
                    </form>
                </div>
            </div>
                {{-- <div class="card mt-5">
                    
                    <div class="card-body">
                        <!-- menambahkan query string warna dengan value biru -->
                        <form method="POST" action="{{route('proses-form-guest',['id' => '99','warna' => 'biru'])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>

                            <!-- Input dalam bentuk array dengan checkbox -->
                            <div class="form-group">
                                <label for="name">Hobby</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Bermain" id="Bermain" name="hobby[]">
                                    <label class="form-check-label" for="Bermain">
                                        Bermain
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Membaca" id="Membaca" name="hobby[]">
                                    <label class="form-check-label" for="Membaca">
                                        Membaca
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Tidur" id="Tidur" name="hobby[]">
                                    <label class="form-check-label" for="Tidur">
                                        Tidur
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>