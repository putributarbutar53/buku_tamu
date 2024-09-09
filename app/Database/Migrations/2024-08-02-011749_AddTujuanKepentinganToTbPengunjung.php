<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTujuanKepentinganToTbPengunjung extends Migration
{
    public function up()
    {
        $fields = [
            'tujuan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'after' => 'nik' // ganti 'existing_column_name' dengan nama kolom yang ada sebelumnya
            ],
            'kepentingan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'after' => 'tujuan'
            ],
        ];

        $this->forge->addColumn('tb_pengunjung', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('tb_pengunjung', ['tujuan', 'kepentingan']);
    }
}
