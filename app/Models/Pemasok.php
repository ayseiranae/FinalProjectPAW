<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Pemasok extends Model
{
    protected $table = 'pemasok';
    protected $primaryKey = 'id_pemasok';
    public $timestamps = false;

    protected $fillable = ['pemasok','kontak'];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_pemasok');
    }
}

