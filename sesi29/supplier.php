<?php
include 'connection.php';
$query = mysqli_query($conn, "SELECT * FROM supplier");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Produk</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Produk</a></li>
                <li class="nav-item"><a href="pelanggan.php" class="nav-link">Pelanggan</a></li>
                <li class="nav-item"><a href="supplier.php" class="nav-link active">Supplier</a></li>
            </ul>
        </header>
    </div>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA SUPPLIER
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH SUPPLIER</a>
                        <table class="table table-hover" id="Table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Telpon</th>
                                    <th scope="col">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['telpon'] ?></td>
                                        <td><?php echo $row['alamat'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#Table').DataTable();
        });
    </script>
</body>

</html>