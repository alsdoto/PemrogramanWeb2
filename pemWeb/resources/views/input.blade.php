@extends('layout.master')

@section('content')
<div class="container">
        <h1 class="mt-4">Input Nilai Mahasiswa</h1>
        {{-- menampilkan error validasi --}}
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>

                        @endforeach
                        </ul>
                        </div>
                        @endif
        <form method="post" action="/hitung" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kehadiran">Kehadiran:</label>
                <input type="number" name="kehadiran" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="uts">UTS:</label>
                <input type="number" name="uts" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="uas">UAS:</label>
                <input type="number" name="uas" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tugas">Tugas:</label>
                <input type="number" name="tugas" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>

        @if(isset($hasil_sebelumnya) && count($hasil_sebelumnya) > 0)
        <h2 class="mt-5">Hasil Perhitungan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai Akhir</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hasil_sebelumnya as $hasil)
                <tr>
                    <td>{{ $hasil['nama'] }}</td>
                    @if(isset($hasil['nilai_akhir']))
                        <td>{{ $hasil['nilai_akhir'] }}</td>
                        <td>{{ $hasil['status'] }}</td>
                    @else
                        <td>Belum dihitung</td>
                        <td>-</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
@endsection