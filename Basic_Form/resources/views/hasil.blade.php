<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="my-4">Hasil Form</h3>
                    <h4>Nama anda adalah {{ $data->nama }}.</h4>
                    <h4>Tempat tinggal anda berada di {{ $data->alamat }}</h4>
                    <h4>Nomor Whatsapp anda adalah {{ $data->wa }}</h4>
                    <h4>ID Line anda adalah {{ $data->line }}</h4>
                    <h4>Email anda adalah {{ $data->email }}</h4>
                    <a href="/basicform" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html> 