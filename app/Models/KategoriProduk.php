<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'KategoriProduk';
    protected $fillable = [
        'nama'
    ];
    public function produk(){
        return $this->hasmany(produk::class);
    }
}
