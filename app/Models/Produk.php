<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//query bilder
//eloquent


class Produk extends Model
{
    use HasFactory;

    //memanggil table yang akan dikelola
    protected $table = 'produk';
    public $timestamps = false;
    //mendekiarasikan kolom yang ada didalam

    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stoc',
        'deskripsi',
        'kategori_produk_id'
    ];
    public function KategoriProduk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }

    public function getAllData()
    {
        return DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama')
            ->get();
    }

}