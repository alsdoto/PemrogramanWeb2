<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    protected $table = 'products';
    
    protected $fillable = [
        'code', 'name', 'quantity', 'price', 'description', 'images',
    ];
    
    use HasFactory;

    use SoftDeletes;
}
