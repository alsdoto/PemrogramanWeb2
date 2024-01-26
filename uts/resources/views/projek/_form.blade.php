<div class="card-body">
    <div class="form-group">
        <label>Nama Projek</label>
        {{ Form::text('nama_projek',null,['class'=>'form-control','placeholder'=>'Nama Projek'])}}
    </div>
    <div class="form-group mt-1">
        <label>Tanggal Mulai</label>
        {{ Form::date('tanggal_mulai',null,['class'=>'form-control'])}}
    </div>
    <div class="form-group mt-1">
        <label>Tanggal Selesai</label>
        {{ Form::date('tanggal_selesai',null,['class'=>'form-control'])}}
    </div>
</div>

<div class="card-footer">
  <div class="form-group">
      <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
          
      <a href="{{ route('projek.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
  </div>
</div>