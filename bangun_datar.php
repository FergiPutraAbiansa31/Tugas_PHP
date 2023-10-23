<!DOCTYPE html>
<html>

<body>
    <?php
    echo "Persegi <br>";
    $s = 5;
    $luaspersegi = $s * $s;
    echo "Sisi : " . $s . " cm<br>";
    echo "Luas Persegi : s * s = " . $luaspersegi . " cm&sup2 <br>";
    echo "<br>";

    echo "Persegi Panjang <br>";
    $p = 8;
    $l = 4;
    $luasPersegiPanjang = $p    * $l;
    echo "Panjang : " . $p . " cm<br>";
    echo "Lebar : " . $l . " cm<br>";
    echo "Luas Persegi Panjang : p * l = " . $luasPersegiPanjang . " cm&sup2 <br>";
    echo "<br>";

    echo "Segitiga <br>";
    $a = 6;
    $t = 10;
    $luasSegitiga = 0.5 * $a * $t;
    echo "Alas : " . $a . " cm<br>";
    echo "Tinggi : " . $t . " cm<br>";
    echo "Luas Segitiga : 0.5 * a * t = " . $luasSegitiga . " cm&sup2 <br>";
    echo "<br>";

    echo "Trapesium <br>";
    $a = 4;
    $b = 8;
    $t = 5;
    $luasTrapesium = 0.5 * ($a + $b) * $t;
    echo "Sisi a : " . $a . " cm<br>";
    echo "Sisi b : " . $b . " cm<br>";
    echo "Tinggi : " . $t . " cm<br>";
    echo "Luas Trapesium : 0.5 * (a + b ) * t = " . $luasTrapesium . " cm&sup2 <br>";
    echo "<br>";

    echo "Lingkaran <br>";
    $r = 7;
    $luasLingkaran = M_PI * $r * $r;
    echo "Jari - jari  : " . $r . " cm<br>";
    echo "Luas Lingkaran : &pi; * r * r = " . round($luasLingkaran, 2) . " cm&sup2 <br>";
    echo "<br>";
    ?>
</body>

</html>