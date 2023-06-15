<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    public $timestamps = false;
    //mendeklarasikan kolom yang ada
    protected $fillable = [
        'id',
        'tanggal',
        'nama_pesanan',
        'alamat_pesanan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id',
    ];
    public function Produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function getAllData()
    {
        return DB::table('pesanan')
        ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
        ->select('pesanan.*', 'produk.nama as nama')
        ->get();
    }

}
