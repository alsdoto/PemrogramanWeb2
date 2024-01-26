<div class="card-body">
    <div class="form-group">
        <label>Nama Karyawan</label>
        {{ Form::select('karyawan_id',$karyawan, null,['class'=>'form-control select2'])}}
    </div>
    <div class="form-group mt-1">
        <label>Nama Projek</label>
        {{ Form::select('projek_id',$projek, null,['class'=>'form-control select2'])}}
    </div>
</div>

<div class="card-footer">
  <div class="form-group">
      <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
          
      <a href="{{ route('assignprojek.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
  </div>
</div>