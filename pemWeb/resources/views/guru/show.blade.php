<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
    
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2><a href="https://www.agussuratna.net">www.agussuratna.net</a></h2>
                    Data Guru - <strong>SHOW DATA</strong> - {{ $guru->nama }}  
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <td>{{ $guru->nip }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $guru->nama }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $guru->alamat }}</td>
                            </tr>
                        </tbody>
                </div>
            </div>
        </div>
    </body>
</html>