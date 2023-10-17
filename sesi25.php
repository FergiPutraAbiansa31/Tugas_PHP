<!DOCTYPE html>
<html>

<body>
    <p>Soal no.1</p>
    <?php
    $bilangan = 10;
    if ($bilangan % 2 == 0) {
        echo "$bilangan adalah bilangan genap";
    } else {
        echo "$bilangan adalah bilangan ganjil";
    }
    ?>
    <br>
    <p>Soal no.2</p>
    <?php
    $tahun = 2020;
    if (($tahun % 4 == 0) && ($tahun % 100 != 0) || ($tahun % 400 == 0)) {
        echo "$tahun adalah tahun kabisat";
    } else {
        echo "$tahun bukan tahun kabisat";
    }
    ?>
    <br>
    <p>Soal no.3</p>
    <?php
    $nilai = 80;
    if ($nilai >= 90) {
        echo "$nilai adalahh A";
    } elseif ($nilai >= 80) {
        echo "$nilai adalah B"; 
    } elseif ($nilai >= 70) {
        echo "$nilai adalah C";
    } elseif ($nilai >= 60) {
        echo "$nilai adalah D";
    } else {
        echo "$nilai adalah E";
    }
    ?>

</body>

</html>