<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Basic Form</title>
</head>

<body class="bg-danger">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <div class="card rounded-0 bg-warning">
                <h3 class="card-title text-center mt-5 bg-dark text-white">
                    BASIC FORM
                </h3>
                <br/>
                @if (count($errors) > 0)
                <div class = "mt-3 bg-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <br/>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                <div class="card-body">
                    <form method="POST" action="/valida" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Udin Syarifudin" value="{{ old('Nama') }}">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat Rumah</label>
                            <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Jl. Kearah Timur, 45, Langkah, Disanada, Artakarun" value="{{ old('Alamat') }}">
                        </div>
                        <div class="form-group">
                            <label for="Nomor_WA">Nomor WA</label>
                            <input type="text" class="form-control" id="Nomor_WA" name="Nomor_WA" placeholder="081208130814" value="{{ old('Nomor_WA') }}">
                        </div>
                        <div class="form-group">
                            <label for="ID_Line">ID Line</label>
                            <input type="text" class="form-control" id="ID_Line" name="ID_Line" placeholder="sossossos" value="{{ old('ID_Line') }}">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" id="Email" name="Email" placeholder="cangkulny@gudang.com" value="{{ old('Email') }}">
                        </div>
                        <div class="form-group">
                            <label for="Nomor">Masukan angka float favorit anda antara 2.5 sampai 99.99</label>
                            <input type="text" class="form-control" id="Nomor" name="Nomor" placeholder="95.99" value="{{ old('Nomor') }}">
                        </div>
                        <div class="form-group">
                            <label for="Foto">Foto Profil</label>
                            <input type="file" class="form-control-file" id="Foto" name="Foto" value = "{{ old('Foto') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Masukkan</button>
                        <p><img src= {{ 'Foto' }}></p>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>