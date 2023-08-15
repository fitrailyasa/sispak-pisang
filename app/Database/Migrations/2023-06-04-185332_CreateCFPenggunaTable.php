<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCFPenggunaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true
            ],
            'certainty_term' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'bobot_pengguna' => [
                'type'              => 'FLOAT'
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('cf_pengguna');
    }

    public function down()
    {
        $this->forge->dropTable('cf_pengguna');
    }
}
