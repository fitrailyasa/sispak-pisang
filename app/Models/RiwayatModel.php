<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    protected $table = 'riwayat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['token', 'kode_kerusakan', 'jenis_pisang', 'created_at'];

    public function kerusakan()
    {
        return $this->belongsTo('App\Models\KerusakanModel', 'kode_kerusakan', 'kode_kerusakan');
    }
}
