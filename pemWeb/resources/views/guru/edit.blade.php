<!DOCTYPE html>
<html>
<head>
    <title>Update Guru</title>
</head>
<body>
    <h1>Update Guru</h1>
    <form method="POST" action="{{ route('guru.update',$guru->id) }}">
        @csrf
        @method('PUT')
        <label for="nip">NIP:</label><br>
        <input type="text" id="nip" name="nip" value="{{ $guru->nip }}"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $guru->nama }}"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="{{ $guru->alamat }}"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
