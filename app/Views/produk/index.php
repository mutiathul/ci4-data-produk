<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <title>CodeIgniter CRUD</title>

    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
    <div class="row mt-3 align-items-center">
      <div class="col-md-10">
        <nav aria-label="breadcrumb" class="bg-light p-3">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
          </ol>
        </nav>
      </div>
      <div class="col-md-2 text-end">
        <a href="/produk/new" class="btn btn-primary" >Tambah Produk</a>
      </div>
    </div>
       
        <div class='card'>
            <div class="card-body">
                <div class="row m-2">
                    <table class="table table-striped w-100" id="produkTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($produk as $produk): ?>
                                <tr>
                                    <td>
                                        <?= $i++; ?>
                                    </td>
                                    <td>
                                        <?= $produk['nama_produk']; ?>
                                    </td>
                                    <td>
                                        <?= $produk['harga']; ?>
                                    </td>
                                    <td>
                                        <?= $produk['nama_kategori']; ?>
                                    </td>
                                    <td>
                                        <?= $produk['nama_status']; ?>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="/produk/<?= $produk['id_produk']; ?>/edit"
                                                    class="btn btn-outline-warning  btn-sm">Edit</a>
                                            </div>
                                            <div class="col-6 px-0">
                                                <form action="/produk/<?= $produk['id_produk']; ?>" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
            $('#produkTable').DataTable({
                searching: false

            });
        });
    </script>
</body>

</html>