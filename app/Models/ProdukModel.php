<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'produk';
    protected $primaryKey       = 'id_produk';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_produk','harga','kategori_id','status_id'];

    public function getProduk()
    {
        
          return $this->db->table('produk')
         ->join('kategori','kategori.id_kategori=produk.kategori_id')
         ->join('status', 'status.id_status=produk.status_id')
         ->where('status.nama_status','bisa dijual')
         ->get()->getResultArray();  
    }
}
