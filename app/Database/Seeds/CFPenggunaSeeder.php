<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CFPenggunaSeeder extends Seeder
{
    public function run()
    {
        $cf_pengguna = [
            [
                'certainty_term' => 'Tidak Ada',
                'bobot_pengguna' => 0
            ],
            [
                'certainty_term' => 'Sedikit',
                'bobot_pengguna' => 0.25
            ],
            [
                'certainty_term' => 'Cukup Banyak',
                'bobot_pengguna' => 0.5
            ],
            [
                'certainty_term' => 'Banyak',
                'bobot_pengguna' => 0.75
            ],
            [
                'certainty_term' => 'Sangat Banyak',
                'bobot_pengguna' => 1
            ],
        ];
        $this->db->table('cf_pengguna')->insertBatch($cf_pengguna);
    }
}
