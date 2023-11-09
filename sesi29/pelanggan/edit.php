<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pelanggan</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT PELANGGAN
                    </div>
                    <div class="card-body">
                        <?php
                        include('../connection.php');

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $query = mysqli_query($conn, "SELECT * FROM pelanggan WHERE id = '$id'");
                            $row = mysqli_fetch_array($query);

                            if (!$row) {
                                echo "Pelanggan Tidak Ditemukan";
                                exit;
                            }
                        } else {
                            echo "Pelanggan ID Tidak Ada";
                            exit;
                        }
                        ?>
                        <form action="proses_edit.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_pria" value="pria" <?php if ($row['jenis_kelamin'] === 'pria') echo 'checked'; ?>>
                                        <label class="form-check-label" for="jenis_kelamin_pria">Pria</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_wanita" value="wanita" <?php if ($row['jenis_kelamin'] === 'wanita') echo 'checked'; ?>>
                                        <label class="form-check-label" for="jenis_kelamin_wanita">Wanita</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Telpon</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="telpon" value="<?php echo $row['telpon'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="alamat" rows="4"><?php echo $row['alamat'] ?></textarea>
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