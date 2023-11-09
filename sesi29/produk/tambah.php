<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Produk</title>
</head>

<?php
include '../connection.php';
$suppliers = mysqli_query($conn, "SELECT * FROM supplier");
?>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH PRODUK
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Kode Produk</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="kode_produk" id="kode_produk" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Produk</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="harga" id="harga" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Stok</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="stok" id="stok" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Satuan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="satuan" id="satuan" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Default select example" class="col-sm-3 col-form-label">Supplier</label>
                                <div class="col-sm-9">
                                    <select class="form-control" aria-label="Large select example" name="supplier_id">
                                        <option selected>Pilih Supplier</option>
                                        <?php foreach ($suppliers as $supplier) { ?>
                                            <option value="<?php echo $supplier['id'] ?>"><?php echo $supplier['nama'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success" value="simpan" name="proses">SIMPAN</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>