<div class="card-body">
    <div class="form-group">
        <label>Nama</label>
        {{ Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama'])}}
    </div>
    <div class="form-group mt-1">
        <label>Nik</label>
        {{ Form::text('nik',null,['class'=>'form-control','placeholder'=>'Nik'])}}
    </div>
    <div class="form-group mt-1">
        <label>Email</label>
        {{ Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])}}
    </div>
    <div class="form-group mt-1">
        <label>No Hp</label>
        {{ Form::text('no_hp',null,['class'=>'form-control','placeholder'=>'No Hp'])}}
    </div>
    <div class="form-group mt-1">
        <label>Foto</label>
        {{ Form::file('foto',['class'=>'form-control'])}}
    </div>
    <div class="form-group mt-1">
        <label>Jenis Kelamin</label>
        {{ Form::select('jenis_kelamin', ['Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], null,['class'=>'form-control'])}}
    </div>
    <div class="form-group mt-1">
        <label>Tempat Lahir</label>
        {{ Form::text('tempat_lahir',null,['class'=>'form-control','placeholder'=>'Tempat Lahir'])}}
    </div>
    <div class="form-group mt-1">
        <label>Tanggal Lahir</label>
        {{ Form::date('tanggal_lahir',null,['class'=>'form-control'])}}
    </div>
    <div class="form-group mt-1">
        <label>Jabatan</label>
        {{ Form::text('jabatan',null,['class'=>'form-control','placeholder'=>'Jabatan'])}}
    </div>
    <div class="form-group mt-1">
        <label>Alamat</label>
        {{ Form::textarea('alamat',null,['class'=>'form-control','rows' => 3,'placeholder'=>'Alamat'])}}
    </div>
</div>

<div class="card-footer">
  <div class="form-group">
      <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
          
      <a href="{{ route('karyawan.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
  </div>
</div>