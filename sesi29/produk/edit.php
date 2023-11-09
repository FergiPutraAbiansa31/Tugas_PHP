<?php 
  
  include('../connection.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM produk JOIN supplier ON produk.supplier_id = supplier.id WHERE produk.id = $id";

  $result = mysqli_query($conn, $query);

  $row = mysqli_fetch_array($result);

  ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Produk</title>
</head>


<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT PRODUK
                    </div>
                    <div class="card-body">
                        <form action="proses_edit.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Kode Produk</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="kode_produk" value="<?php echo $row['kode_produk']; ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Produk</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_produk" value="<?php echo $row['nama_produk']; ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="harga" value="<?php echo $row['harga']; ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Stok</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="stok" value="<?php echo $row['stok']; ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Satuan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="satuan" value="<?php echo $row['satuan']; ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Supplier</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="supplier" name="supplier" required>
                                        <?php
                                        $query_supplier = mysqli_query($conn, "SELECT * FROM supplier");
                                        while ($row_supplier = mysqli_fetch_array($query_supplier)) {
                                            if ($row_supplier['id'] == $row['supplier_id']) {
                                                echo "<option value='" . $row_supplier['id'] . "' selected>" . $row_supplier['nama'] . "</option>";
                                            } else {
                                                echo "<option value='" . $row_supplier['id'] . "'>" . $row_supplier['nama'] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">SIMPAN</button>
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