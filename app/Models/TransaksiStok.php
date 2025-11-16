<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiStok extends Model
{
    use HasFactory;

    protected $table = 'transaksi_stok';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = false; // karena tabelmu tidak punya kolom created_at/updated_at

    protected $fillable = [
        'id_barang',
        'id_pegawai',
        'transaksi',
        'jumlah',
        'keterangan',
        'id_pemasok'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function pemasok()
    {
        return $this->belongsTo(Pemasok::class, 'id_pemasok');
    }
}
