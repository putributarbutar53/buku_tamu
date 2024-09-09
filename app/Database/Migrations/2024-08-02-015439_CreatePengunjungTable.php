<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengunjungTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'tujuan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'kepentingan' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pengunjung');
    }

    public function down()
    {
        $this->forge->dropTable('pengunjung');
    }
}
