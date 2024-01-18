<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Company - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css
">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        
                        <form action="{{ route('grades.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Company">

                                <!-- error message untuk name -->
                                @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">KEHADIRAN</label>
                                <input type="number" class="form-control @error('kehadiran') is-invalid @enderror" name="kehadiran" value="{{ old('kehadiran') }}" placeholder="Masukkan Kehadiran Anda">

                                <!-- error message untuk email -->
                                @error('kehadrian')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">TUGAS</label>
                                <input type="tugas" class="form-control @error('tugas') is-invalid @enderror" name="tugas" value="{{ old('tugas') }}" placeholder="Masukkan Nilai Tugas"></textarea>
                                <!-- error message untuk address -->
                                @error('tugas')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">UTS</label>
                                <input type="number" class="form-control @error('uts') is-invalid @enderror" name="uts" value="{{ old('uts') }}" placeholder="Masukkan Nilai UTS"></textarea>
                                <!-- error message untuk address -->
                                @error('uts')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">UAS</label>
                                <input type="number" class="form-control @error('uas') is-invalid @enderror" name="uas" value="{{ old('uas') }}" placeholder="Masukkan Nilai UAS"></textarea>
                                <!-- error message untuk address -->
                                @error('uas')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>

                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('address');
    </script>
</body>

</html>