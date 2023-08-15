<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGejalaTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'kode_gejala' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ],
                'nama_gejala' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ],
                'created_at' => [
                    'type' => 'DATETIME'
                ],
                'updated_at' => [
                    'type' => 'DATETIME'
                ]
            ]
        );

        $this->forge->addKey('kode_gejala', true);
        $this->forge->createTable('gejala');
    }

    public function down()
    {
        $this->forge->dropTable('gejala');
    }
}
