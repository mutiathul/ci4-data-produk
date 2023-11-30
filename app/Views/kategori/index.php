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
                                <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card-body">

                    <a href="/kategori/new" class="btn btn-primary" >Tambah Kategori</a>
                    <div class="row mt-4">
                        <table class="table table-striped w-100" id="kategoriTable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id Kategori</th>
                                    <th>Nama Kategori</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kategori as $kategori): ?>
                                    <tr>
                                        <td>
                                            <?= $i++; ?>
                                        </td>
                                        <td>
                                            <?= $kategori['id_kategori']; ?>
                                        </td>
                                        <td>
                                            <?= $kategori['nama_kategori']; ?>
                                        </td>

                                        <td>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="/kategori/<?= $kategori['id_kategori']; ?>/edit"
                                                        class="btn btn-outline-warning mr-2">Edit</a>
                                                </div>
                                                <div class="col-auto px-0">
                                                    <form action="/kategori/<?= $kategori['id_kategori']; ?>" method="POST">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
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




    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#kategoriTable').DataTable(
                {
                    searching: false
                }
            );

        });
    </script>
</body>

</html>