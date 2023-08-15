<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
    protected $table = 'gejala';
    protected $primaryKey = 'kode_gejala';
    protected $allowedFields = ['kode_gejala', 'nama_gejala', 'created_at', 'updated_at'];

    public function rule()
    {
        return $this->hasMany('App\Models\RuleModel', 'kode_gejala', 'kode_gejala');
    }

}
