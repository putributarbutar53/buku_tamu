<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengunjungTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nik' => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_pengunjung');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pengunjung');
    }
}
