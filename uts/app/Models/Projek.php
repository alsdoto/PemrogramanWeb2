<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;

    protected $table = 'projek';

    protected $fillable = ['nama_projek', 'tanggal_mulai', 'tanggal_selesai'];
}
