<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = ['nama', 'nik', 'email', 'no_hp', 'foto', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'jabatan', 'alamat'];
}
