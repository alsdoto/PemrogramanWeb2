<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignProjek extends Model
{
    use HasFactory;

    protected $table = 'assign_projek';

    protected $fillable = ['karyawan_id', 'projek_id'];

    public function projek()
    {
        return $this->belongSto('App\Models\Projek');
    }

    public function karyawan()
    {
        return $this->belongSto('App\Models\Karyawan');
    }
}
