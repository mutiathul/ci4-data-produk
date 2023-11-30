# CodeIgniter 4 Application Data Produk

## Menampilkan Data

'http://localhost:8080/produk'

# Database Config
 database.default.hostname = localhost
 
 database.default.database = ci-test
 
 database.default.username = root
 
 database.default.password = 
 
 database.default.DBDriver = MySQLi
 
 database.default.DBPrefix =
 
 database.default.port = 3306

# menambahkan table pada database
php spark migrate

agar relasi tabel berhasil antara table kategori, status dan produk
maka harus :
- tabel kategori harus di migrate pertamakali
- kemudian migrate table status
- dan terakhir migrate table produk 

jika tidak seperti diatas maka relasi tabel tidak bisa dibuat.

# Struktur Tabel Database
- Tabel Kategori

  - id_kategori sebgai primary key
  - 'type' => 'INT',
    
    'unsigned' => true,
    
    'auto_increment' => true
    
 ![kategori](https://github.com/mutiathul/ci4-data-produk/assets/60602195/c7756dea-761b-40d8-a837-4610b649962c)

- Tabel Status

   - id_status sebgai primary key
  - 'type' => 'INT',
    
    'unsigned' => true,
    
    'auto_increment' => true

  ![status](https://github.com/mutiathul/ci4-data-produk/assets/60602195/efdeb47c-c6b1-4d3f-9563-f57b5e090dcb)

- Tabel Produk

   - id_produk sebgai primary key
   - 'type' => 'INT',
    
    'unsigned' => true,
    
    'auto_increment' => true

    - kategori_id dan status_id sebagai foreign key

      - 'type' => 'INT',
    
        'unsigned' => true,
    
        $this->forge->addPrimaryKey('id_produk');
        
        $this->forge->addForeignKey('kategori_id', 'kategori', 'id_kategori');
        
        $this->forge->addForeignKey('status_id', 'status', 'id_status');

  ![produk](https://github.com/mutiathul/ci4-data-produk/assets/60602195/ac13e2d5-b48e-4a28-8278-d1321a772958)

  ![relasi](https://github.com/mutiathul/ci4-data-produk/assets/60602195/acb38823-f1fe-44f7-acea-74448aace43d)

- Tabel Migration
  DIbawah ini adalah tahapan migration yang dilakukan
  - yang pertama migration tabel kategori
  - kedua migration tabel status
  - dan terakhir migration tabel produk
    
  ![migration](https://github.com/mutiathul/ci4-data-produk/assets/60602195/45a58325-f0fb-4315-a6c5-d6417dd492ae)


# menambahkan data pada table
- menambahkan data tabel kategori
  
  php spark db:seed KategoriSeeder
  
- menambahkan data tabel Status

  php spark db:seed StatusSeeder
  
- menambahkan data tabel Produk
  
  php spark db:seed ProdukSeeder

