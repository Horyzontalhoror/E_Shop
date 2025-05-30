<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = [
        'nama_produk',
        'kategori_id',
        'harga',
        'stok',
        'gambar',
        'deskripsi',
        'informasi',
        'slug',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    protected static function booted()
    {
        static::updating(function ($produk) {
            if ($produk->isDirty('nama_produk')) {
                $produk->slug = Str::slug($produk->nama_produk) . '-' . uniqid();
            }
        });
    }

}
