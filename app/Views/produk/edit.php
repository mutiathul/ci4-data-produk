<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <title>Test Programmer</title>

    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row mt-3 align-items-center">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-10">
                        <nav aria-label="breadcrumb" class="bg-light p-3">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/produk/<?= $produk['id_produk']; ?>" method="POST" enctype='multipart/form-data'>
                        <?php csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="mb-3 col-4">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control " id="namaProduk" name="nama_produk" 
                            value="<?= $produk['nama_produk']; ?>" required >
                        </div>
                        <div class="mb-3 col-4">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control " id="harga" name="harga" 
                            value="<?= $produk['harga']; ?>" required
                                onkeypress="return isNumber(event)" onpaste="return false;">
                        </div>
                        <div class="mb-3 col-4">
                        <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-select" aria-label="kategori" name="kategori_id" required>
                                <option selected disabled value>-pilih kategori-</option>
                                <?php foreach ($kategori as $kategori): ?>
                                    <option value="<?= $kategori['id_kategori']; ?>"
                                        <?= $produk['kategori_id'] == $kategori['id_kategori'] ? 'selected' : null ?>>
                                        <?= $kategori['nama_kategori']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 col-4">
                        <label for="harga" class="form-label">Status</label>
                            <select class="form-select" aria-label="status" name="status_id" required>
                                <option selected disabled value>-pilih status-</option>
                                <?php foreach ($status as $status): ?>
                                    <option value="<?= $status['id_status']; ?>" <?=$produk['status_id'] == $status['id_status'] ? 'selected':null ?>>
                                        <?= $status['nama_status']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-outline-warning " onclick="location.href='<?php echo base_url();?>produk/index'">Cancel</button>
                    </form>

                </div>
            </div>
        </div>




    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#ProdukTable').DataTable(
                {
                    searching: false
                }
            );

        });
    </script>
    <script type="text/javascript">
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ((charCode > 31 && charCode < 48) || charCode > 57) {
                return false;
            }
            return true;
        }
    </script>
</body>

</html>