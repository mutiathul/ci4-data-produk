<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga' => [
                'type' => 'INT',
            ],
            'kategori_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'status_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id_produk');
        $this->forge->addForeignKey('kategori_id', 'kategori', 'id_kategori');
        $this->forge->addForeignKey('status_id', 'status', 'id_status');
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropForeignKey('produk', 'produk_kategori_id_foreign');
        $this->forge->dropForeignKey('produk', 'produk_status_id_foreign');
        $this->forge->dropTable('produk');
    }
}
