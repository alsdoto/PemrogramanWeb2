<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-
scale=1">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tutorial Membuat Pagination Pada Laravel</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h2><a href="https://www.agussuratna.net">www.agussuratna.net</a></h2>
                Data Guru - <strong>CREATE DATA</strong>

                <a href="{{ route('guru.index') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Kembali</a>

                <form method="POST" action="{{ route('guru.store') }}">
                    @csrf
                    <label for="nip">NIP:</label><br>
                    <input type="text" id="nip" name="nip"><br>
                    @error('nip')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">Nama:</label><br>
                    <input type="text" id="nama" name="nama"><br>
                    @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="alamat">Alamat:</label><br>
                    <input type="text" id="alamat" name="alamat"><br><br>
                    @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="submit" value="Submit">
                </form>

            </div>
        </div>
    </div>
</body>

</html>