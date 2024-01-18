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
                            <a href="{{ route('guru.trash',$g->id)}}" class="btn btn-success">Restore</a>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br />

                Halaman : {{ $guru->currentPage() }} <br />
                Jumlah Data : {{ $guru->total() }} <br />
                Data Per Halaman : {{ $guru->perPage() }} <br />

                {{ $guru->links() }}


                
            </div>
        </div>
    </div>
</body>

</html>