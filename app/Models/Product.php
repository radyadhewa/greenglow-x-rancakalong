<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['gambar' , 'nama', 'slug', 'harga','stok', 'tags' , 'kategori' , 'deskripsi' , 'statusPosting'];

    protected $casts = [
        'tags' => 'array',
    ];
}


