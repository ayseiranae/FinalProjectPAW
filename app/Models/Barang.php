<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    public $timestamps = false;

    protected $fillable = [
        'id_kategori',
        'barang',
        'deskripsi',
        'satuan',
        'id_pemasok',
    ];

    public function kategori()
    {
        return $this->belongsTo(\App\Models\Kategori::class, 'id_kategori');
    }

    public function pemasok()
    {
        return $this->belongsTo(\App\Models\Pemasok::class, 'id_pemasok');
    }
}
