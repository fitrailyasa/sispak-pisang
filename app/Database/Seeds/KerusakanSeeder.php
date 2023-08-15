<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\KerusakanModel;

class KerusakanSeeder extends Seeder
{
    public function run()
    {
        $kerusakanData = [
            ['kode_kerusakan' => 'P01', 'nama_kerusakan' => 'Layu Bakteri (Erwinia tracheiphila)', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'P02', 'nama_kerusakan' => 'Layu Fusarium (Fusarium oxysporum)', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_kerusakan' => 'P03', 'nama_kerusakan' => 'Busuk Daun (Downy mildew)', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
        ];
        $this->db->table('kerusakan')->insertBatch($kerusakanData);
    }
}
