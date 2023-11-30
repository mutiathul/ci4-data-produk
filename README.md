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

# menambahkan data pada table
- menambahkan data tabel kategori
  
  php spark db:seed KategoriSeeder
  
- menambahkan data tabel Status

  php spark db:seed StatusSeeder
  
- menambahkan data tabel Produk
  
  php spark db:seed ProdukSeeder

