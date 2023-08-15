<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSolusiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'kode_kerusakan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_solusi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('kode_kerusakan', 'kerusakan', 'kode_kerusakan', 'CASCADE', 'CASCADE');

        $this->forge->createTable('solusi');
    }

    public function down()
    {
        $this->forge->dropTable('solusi');
    }
}
