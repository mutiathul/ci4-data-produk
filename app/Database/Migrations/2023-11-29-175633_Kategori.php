<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
           
        ]);

        $this->forge->addPrimaryKey('id_kategori');
        $this->forge->createTable('kategori');
    }

    public function down()
    {
        $this->forge->dropTable('kategori');
    }
}
