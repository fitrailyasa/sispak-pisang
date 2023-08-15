<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\SolusiModel;

class SolusiSeeder extends Seeder
{
    public function run()
    {
        $solusiData = [
            [
                'kode_kerusakan' => 'P01',
                'nama_solusi' => 'Dengan Menyemprotkan pestisida setiap dua kali seminggu', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'
            ],
            [
                'kode_kerusakan' => 'P02',
                'nama_solusi' => 'Mengganti media tanaman atau dapat juga menyemprotkan pestisida per dua kali seminggu', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'
            ],
            [
                'kode_kerusakan' => 'P03',
                'nama_solusi' => 'Menyemprotkan insektisida pada tanaman tiga hari sekali', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'
            ]
        ];

        $model = new SolusiModel();
        $model->insertBatch($solusiData);
    }
}
