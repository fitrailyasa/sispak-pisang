<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRuleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true
            ],
            'kode_rule' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'kode_gejala' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'kode_kerusakan' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'bobot_pakar' => [
                'type' => 'FLOAT'
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('kode_gejala', 'gejala', 'kode_gejala', 'CASCADE', 'CASCADE');

        $this->forge->addForeignKey('kode_kerusakan', 'kerusakan', 'kode_kerusakan', 'CASCADE', 'CASCADE');

        $this->forge->createTable('rule');
    }

    public function down()
    {
        $this->forge->dropTable('rule');
    }
}
