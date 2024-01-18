<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-
scale=1">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.
css" rel="stylesheet">
    <title>Tutorial Membuat Pagination Pada Laravel</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h2><a href="https://www.agussuratna.net">www.agussuratna.net</a></h2>
                Data Guru

                <form action="/guru/cari" method="GET">
                    <input type="text" name="cari" placeholder="Cari Guru .." value="{{ old('cari') }}">
                    <input type="submit" value="CARI">
                </form>
                <a href="{{ route('guru.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Data</a>
            </div>
            <div class="card-body">
                <br />

                <table class="table table-bordered table-hover table-
striped">

                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($guru as $g)

                        <tr>

                            <td>{{ $g->nip }}</td>
                            <td>{{ $g->nama }}</td>
                            <td>{{ $g->alamat }}</td>
                            <td>
                            <a class="btn btn-danger" href="{{ route('guru.destroy', $g->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $g->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $g->id }}" action="{{ route('guru.destroy', $g->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            <a href="{{ route('guru.edit',$g->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('guru.show',$g->id)}}" class="btn btn-success">Show</a>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br />



                
            </div>
        </div>
    </div>
</body>

</html>