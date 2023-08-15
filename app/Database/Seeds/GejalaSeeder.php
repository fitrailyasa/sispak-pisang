<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\GejalaModel;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        $gejalaData = [
            ['kode_gejala' => 'G01', 'nama_gejala' => 'Tanaman layu mendadak mati', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G02', 'nama_gejala' => 'Jika batang tanaman dipotong, berkas pembuluh angkut berlendir', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G03', 'nama_gejala' => 'Jika batang tanaman dipotong,terdapat cincin coklat pada berkas pembuluh', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G04', 'nama_gejala' => 'Layunya tanaman dimulai dari bagian bawah tanaman dan menjalar hingga keatas tanaman', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G05', 'nama_gejala' => 'Pada batang tanaman terdapat bercak memanjang kuning dan coklat tua', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G06', 'nama_gejala' => 'Daun yang terserang fusarium akan kelihatan berwarna kuning pucat kemudian mudah patah', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G07', 'nama_gejala' => 'Permukaan daun terlihat bercak kuning coklat ', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G08', 'nama_gejala' => 'Pada bawah daun terdapat spora berwarna ungu sampai hitam', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G09', 'nama_gejala' => 'Daun timbul kuning pada tepi daun kemudian melebar menjadi kuning kemerahan sampai kehitaman', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G10', 'nama_gejala' => 'Daun berbintik-bintik dan bercak coklat tua sampai hitam', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G11', 'nama_gejala' => 'Tanaman pisang menguning dan layu, bunga jantan mengering', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
        ];
        $this->db->table('gejala')->insertBatch($gejalaData);
    }
}
