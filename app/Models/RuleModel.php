<?php

namespace App\Models;

use CodeIgniter\Model;

class RuleModel extends Model
{
    protected $table = 'rule';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_rule', 'kode_gejala', 'kode_kerusakan', 'bobot_pakar'];

    public function gejala()
    {
        return $this->belongsTo('App\Models\GejalaModel', 'kode_gejala', 'kode_gejala');
    }

    public function kerusakan()
    {
        return $this->belongsTo('App\Models\KerusakanModel', 'kode_kerusakan', 'kode_kerusakan');
    }

}
