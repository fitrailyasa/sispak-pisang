<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('GejalaSeeder');
        $this->call('KerusakanSeeder');
        $this->call('SolusiSeeder');
        $this->call('RuleSeeder');
        $this->call('CFPenggunaSeeder');
        // $this->call('RiwayatSeeder');
    }
}
