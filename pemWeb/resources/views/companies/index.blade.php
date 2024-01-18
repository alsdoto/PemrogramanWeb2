<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Companys</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>
    <body style="background: lightgray">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="text-center my-4">Tutorial Laravel & MySQL Database</h3>
                        <hr>
                    </div>

                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <a href="{{ route('companies.create') }}" class="btn btn-md btn-success mb-3">TAMBAH COMPANY</a>

                            <table class="table table-bordered">
                            <thead>
                            <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">AKSI</th>
                            </tr>
                            </thead>
                                <tbody>
                                    @forelse ($companies as $post)
                                        <tr>
                                            <td>{{ $post->name }}</td>
                                            <td>{{ $post->email }}</td>
                                            <td>{!! $post->address !!}</td>
                                            <td class="text-center"> 
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('companies.destroy', $post->id) }}" method="POST">
                                                    <a href="{{ route('companies.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                    <a href="{{ route('companies.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                        @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">Data Company belum Tersedia.</div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $companies->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            // message with toastr
            <?php if(session()->has('success')): ?>
            toastr.success('<?php echo session('success'); ?>', 'BERHASIL!');
            <?php elseif(session()->has('error')): ?>
            toastr.error('<?php echo session('error'); ?>', 'GAGAL!');
            <?php endif; ?>
        </script>
    </body>
</html>