<?php

namespace App\Models;

use CodeIgniter\Model;

class CFPenggunaModel extends Model
{
    protected $table = 'cf_pengguna';
    protected $primaryKey = 'id';
    protected $allowedFields = ['certainty_term', 'bobot_pengguna'];
}
