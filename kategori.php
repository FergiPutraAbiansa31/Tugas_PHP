<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Kalkulator BMI</title>
    <style>
        body {
            background-color: #cad6ee;
        }
    </style>
</head>

<body>
    <div class="container mt-5 py-5 col-6">
        <div class="p-5 mb-4 bg-white rounded-3 shadow mt-5">
            <h2 class="fw-bolder">Kalkulator BMI</h2>
            <form method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="tinggi" class="form-label">Tinggi (cm)</label>
                    <input type="number" class="form-control" id="tinggi" name="tinggi">
                </div>
                <div class="mb-3">
                    <label for="Berat" class="form-label">Berat (kg)</label>
                    <input type="number" class="form-control" id="berat" name="berat">
                </div>
                <button type="submit" class="btn btn-primary">Hitung</button>
            </form>
            <br>
            <?php
            if (isset($_POST['nama'])) {
                $nama = $_POST['nama'];
                $tinggi = $_POST['tinggi'] / 100;
                $berat = $_POST['berat'];

                $bmi = $berat / ($tinggi * $tinggi);

                if ($bmi <= 18.4) {
                    $kategori = "kurus";
                } else if ($bmi <= 24.9) {
                    $kategori = "sedang";
                } else {
                    $kategori = "gemuk";
                }

                echo "Hallo, " . $nama . ". Nilai BMI Anda adalah " . round($bmi, 1) . ", Anda termasuk " . $kategori .".";
            }
            ?>
        </div>
    </div>
</body>

</html>