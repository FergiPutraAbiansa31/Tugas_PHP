<!DOCTYPE html>
<html>

<body>
    <p>Soal Nomor 1</p>
    <?php
    $array = array("satu", "dua", "tiga", "empat", "lima");
    for ($i = count($array) - 1; $i >= 0; $i--) {
        echo $array[$i];
        echo "<br>";
    }
    ?>

    <p>Soal Nomor 2</p>
    <?php
    $array = array("apel", "nanas", "mangga", "jeruk");
    $count = count($array);
    echo "Terdapat $count buah";
    echo "<br>";
    ?>

    <p>Soal Nomor 3</p>
    <?php
    $array = array(7, 3, 4, 9);
    $total = 0;
    for ($i = 0; $i < count($array); $i++) {
        $total += $array[$i];
    }
    echo "Totalnya adalah $total";
    echo "<br>";
    ?>

    <p>Soal Nomor 4</p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $hasil = 1 * $i;
        echo "1 x $i = $hasil";
        echo "<br>";
    }
    ?>
</body>

</html>