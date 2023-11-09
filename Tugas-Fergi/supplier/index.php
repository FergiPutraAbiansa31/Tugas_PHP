<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM supplier");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Supplier</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <nav>
            <img src="../img/logo.png" alt="" width="150px">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../barang/index.php">Barang</a></li>
                <li><a href="index.php">Supplier</a></li>
                <li><a href="../pembeli/index.php">Pembeli</a></li>
            </ul>
        </nav>
    </div>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA SUPPLIER
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#tambah" style="margin-bottom: 10px">TAMBAH SUPPLIER</button>
                        <table class="table table-hover text-center" id="Table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Telpon</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nama_supplier'] ?></td>
                                        <td><?php echo $row['no_telp'] ?></td>
                                        <td><?php echo $row['alamat'] ?></td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" name="edit" data-target="#edit<?= $no ?>">EDIT</a>
                                            <a href="#" class="btn btn-sm btn-danger"data-toggle="modal" name="hapus" data-target="#hapus<?= $no ?>">HAPUS</a>
                                        </td>
                                    </tr>
                                    <!-- Modal Edit -->
                                    <div id="edit<?= $no ?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data Supplier</h5>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="id_supplier" value="<?= $row['id_supplier'] ?>">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label class="control-label" for="nama_supplier">Nama Supplier</label>
                                                            <input type="text" name="nama_supplier" class="form-control" id="nama_supplier" value="<?= $row['nama_supplier'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="no_telp">Telpon</label>
                                                            <input type="number" name="no_telp" class="form-control" id="no_telp" value="<?= $row['no_telp'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="alamat">Alamat</label>
                                                            <textarea class="form-control" name="alamat" rows="4" required><?php echo $row['alamat']; ?></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="reset" class="btn btn-danger">Reset</button>
                                                            <input type="submit" class="btn btn-success" name="tambah" value="simpan"></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Edit Akhir -->
                                    <!-- Modal Hapus -->
                                    <div id="hapus<?= $no ?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Hapus Data Supplier</h5>
                                                </div>
                                                <form action="proses_hapus.php" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="id_supplier" value="<?= $row['id_supplier'] ?>">
                                                    <div class="modal-body">
                                                        <h5 class="text-center"> Apakah Anda Yakin Akan Hapus <br>
                                                            <span class="text-danger"><?= $row['nama_supplier'] ?></span>
                                                        </h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus Akhir -->
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah -->
    <div id="tambah" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label" for="nama_supplier">Nama Supplier</label>
                            <input type="text" name="nama_supplier" class="form-control" id="nama_supplier" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="no_telp">Telpon</label>
                            <input type="number" name="no_telp" class="form-control" id="no_telp" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="4" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <input type="submit" class="btn btn-success" name="tambah" value="simpan"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Akhir -->

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