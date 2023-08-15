<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RuleSeeder extends Seeder
{
    public function run()
    {
        $rule = [
            [
                'kode_rule' => 'R01',
                'kode_gejala' => 'G01',
                'kode_kerusakan' => 'P01',
                'bobot_pakar' => 0.9
            ],
            [
                'kode_rule' => 'R01',
                'kode_gejala' => 'G02',
                'kode_kerusakan' => 'P01',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R01',
                'kode_gejala' => 'G03',
                'kode_kerusakan' => 'P01',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R01',
                'kode_gejala' => 'G11',
                'kode_kerusakan' => 'P01',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R02',
                'kode_gejala' => 'G04',
                'kode_kerusakan' => 'P02',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R02',
                'kode_gejala' => 'G05',
                'kode_kerusakan' => 'P02',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R02',
                'kode_gejala' => 'G02',
                'kode_kerusakan' => 'P02',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R02',
                'kode_gejala' => 'G06',
                'kode_kerusakan' => 'P02',
                'bobot_pakar' => 0.5
            ],
            [
                'kode_rule' => 'R03',
                'kode_gejala' => 'G07',
                'kode_kerusakan' => 'P03',
                'bobot_pakar' => 0.6
            ],
            [
                'kode_rule' => 'R03',
                'kode_gejala' => 'G08',
                'kode_kerusakan' => 'P03',
                'bobot_pakar' => 0.6
            ],
            [
                'kode_rule' => 'R03',
                'kode_gejala' => 'G09',
                'kode_kerusakan' => 'P03',
                'bobot_pakar' => 0.7
            ],
            [
                'kode_rule' => 'R03',
                'kode_gejala' => 'G10',
                'kode_kerusakan' => 'P03',
                'bobot_pakar' => 0.8
            ]
        ];
        $this->db->table('rule')->insertBatch($rule);
    }
}
