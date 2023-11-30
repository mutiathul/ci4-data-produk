<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
               'nama_kategori' => 'L QUEENLY',
               
            ],
            [
                'nama_kategori' => 'S MTH STEMPEL (IM)',
            ],
            [
                'nama_kategori' => 'L MTH AKSESORIS (IM)',
            ],
            [
                'nama_kategori' => 'L MTH AKSESORIS (LK)',
            ],
            [
                'nama_kategori' => 'L MTH TABUNG (LK)',
            ],
            [
                'nama_kategori' => 'SP MTH SPAREPART (LK)',
            ],
            [
                'nama_kategori' => 'CI MTH TINTA LAIN (IM)',
            ]
         ];
      
         $this->db->table('kategori')->insertBatch($data);
    }
}
