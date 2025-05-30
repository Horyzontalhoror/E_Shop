<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //model kategori
    protected $table = 'kategoris';
    protected $fillable =   ['nama_kategori', 'gambar', 'stock'];
}
