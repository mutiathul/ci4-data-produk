<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
               'nama_produk' => 'ALCOHOL GEL POLISH CLEANSER GP-CLN01',
               'harga' => 12500,
               'kategori_id' => 1,
               'status_id' => 1,
            ],
            [
                'nama_produk' => 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM',
                'harga' => 1000,
                'kategori_id' => 1,
                'status_id' => 1,
            ]
         ];
      
         $this->db->table('produk')->insertBatch($data);
    }
}
