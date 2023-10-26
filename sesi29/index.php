<?php
include 'connection.php';
$query = mysqli_query($conn, "SELECT * FROM produk");
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

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA PRODUK
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH PRODUK</a>
                        <table class="table text-center table-hover" id="Table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Kode Produk</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Satuan</th>
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
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-warning">EDIT</a>
                                            <a href="#" class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
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