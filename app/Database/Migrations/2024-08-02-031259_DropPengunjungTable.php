<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropPengunjungTable extends Migration
{
    public function up()
    {
        // Menghapus tabel 'tb_pengunjung'
        $this->forge->dropTable('tb_pengunjung', true);
    }

    public function down()
    {
        // Jika migrasi di-rollback, kamu bisa membuat tabel kembali dengan kode ini
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
        $this->forge->createTable('tb_pengunjung');
    }
}
