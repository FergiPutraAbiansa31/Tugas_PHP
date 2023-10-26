<!DOCTYPE html>
<html>

<body>
    <p>Kubus</p>
    <?php
    $s = 5;
    $v = $s * $s * $s;
    echo "Sisi : " . $s . " cm<br>";
    echo "Volume : s * s * s = " . $v . " cm&sup3 <br>";
    ?>

    <p>Balok</p>
    <?php
    $p = 10;
    $l = 5;
    $t = 6;
    $v = $p * $l * $t;
    echo "Panjang : " . $p . " cm<br>";
    echo "Lebar : " . $l . " cm<br>";
    echo "Tinggi : " . $t . " cm<br>";
    echo "Volume : p * l * t = " . $v . " cm&sup3 <br>";
    ?>

    <p>Kerucut </p>
    <?php
    $r = 4;
    $t = 10;
    $v = 1 / 3 * M_PI * $r * $r * $t;
    echo "Jari-jari : " . $r . " cm<br>";
    echo "Tinggi : " . $t . " cm<br>";
    echo "Volume: 1/3 * &pi; * r * r * t = " . round($v, 2) . " cm&sup3 <br>";
    ?>
</body>

</html>