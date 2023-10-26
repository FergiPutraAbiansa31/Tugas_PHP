<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Kategori Nilai</title>
    <style>
        body {
            background-color: #cad6ee;
        }
    </style>
</head>

<body>
    <div class="container mt-5 py-5 col-6">
        <div class="p-5 mb-4 bg-white rounded-3 shadow mt-5" >
            <h2 class="fw-bolder text-center">Kategori Nilai</h2>
            <form method="POST">
                <div class="mb-3">
                    <label for="nilai" class="form-label">Masukkan Nilai</label>
                    <input type="number" class="form-control" id="nilai" name="nilai">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <?php
            if (isset($_POST['nilai'])) {
                $nilai = $_POST['nilai'];

                switch (true) {
                    case ($nilai >= 90 && $nilai <= 100):
                        $kategori = "A";
                        break;
                    case ($nilai >= 80 && $nilai < 90):
                        $kategori = "B";
                        break;
                    case ($nilai >= 70 && $nilai < 80):
                        $kategori = "C";
                        break;
                    default:
                        $kategori = "D";
                        break;
                }
                echo "Nilai " . $nilai . " merupakan kategori " . $kategori;
            }
            ?>
        </div>
    </div>
</body>

</html>