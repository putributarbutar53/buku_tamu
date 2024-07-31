<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataTable extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kabupaten' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kode_kel' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kelurahan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tps' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
            ],
            'nik' => [
                'type' => 'CHAR',
                'constraint' => 16,
            ],
            'nkk' => [
                'type' => 'CHAR',
                'constraint' => 16,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tgl_lahir' => [
                'type' => 'DATE',
            ],
            'jk' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'status_kawin' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'difabel' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'rt' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'rw' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
        ];

        // Define primary key
        $this->forge->addKey('id', true);

        // Create the table
        $this->forge->addField($fields);
        $this->forge->createTable('db_data');
    }

    public function down()
    {
        // Drop the table if it exists
        $this->forge->dropTable('db_data');
    }
}
