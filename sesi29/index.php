<?php
include 'connection.php';
$query = mysqli_query($conn, "SELECT * FROM produk JOIN supplier ON produk.supplier_id = supplier.id");
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
                <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Produk</a></li>
                <li class="nav-item"><a href="pelanggan/pelanggan.php" class="nav-link">Pelanggan</a></li>
                <li class="nav-item"><a href="supplier/supplier.php" class="nav-link">Supplier</a></li>
            </ul>
        </header>
    </div>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA PRODUK
                    </div>
                    <div class="card-body">
                        <a href="produk/tambah.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH PRODUK</a>
                        <table class="table text-center table-hover" id="Table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Kode Produk</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Supplier</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['kode_produk'] ?></td>
                                        <td><?php echo $row['nama_produk'] ?></td>
                                        <td><?php echo $row['harga'] ?></td>
                                        <td><?php echo $row['stok'] ?></td>
                                        <td><?php echo $row['satuan'] ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-warning" href="produk/edit.php?id=<?php echo $row['id'] ?>">EDIT</a>
                                            <a class="btn btn-sm btn-danger" href="produk/proses_hapus.php?id=<?php echo $row['id'] ?>" 
                                            onclick="return confirm('Hapus ?');">HAPUS</a>
                                        </td>
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