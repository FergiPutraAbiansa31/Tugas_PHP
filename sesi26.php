<!DOCTYPE html>
<html>

<body>
    <p>Nomor 1 :</p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "Angka $i adalah bilangan genap";
        } else {
            echo "Angka $i adalah bilangan ganjil";
        }
        echo "<br>";
    }
    ?>
    <br>
    <p>Nomor 2 :</p>
    <?php
    for ($tahun = 2000; $tahun <= 2023; $tahun++) {
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            echo "Tahun $tahun adalah tahun kabisat";
        } else {
            echo "Tahun $tahun bukan tahun kabisat";
        }
        echo "<br>";
    }
    ?>
    <br>
    <p>Nomor 3 :</p>
    <?php
    for ($i = 9; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    ?>
</body>

</html>