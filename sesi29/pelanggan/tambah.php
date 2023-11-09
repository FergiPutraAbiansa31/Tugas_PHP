<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Pelanggan</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH PELANGGAN
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Pria">
                                        <label class="form-check-label" for="inlineRadio1">Pria</label>
                                    </div>
                                    <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Wanita">
                                        <label class="form-check-label" for="inlineRadio2">Wanita</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Telpon</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="telpon">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="alamat" rows="4"></textarea>
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