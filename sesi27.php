<!DOCTYPE html>
<html>
<style>
    th {
        background-color: #03b1fc;
    }
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
        text-align: center;
    }
</style>
<body>
    <?php
    for ($i = 0; $i <= 8; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    ?>
    <br>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $nama = "Nama ke $i";
            $kelas = "Kelas " . (10 - $i + 1);

            if ($i % 2 == 1) {
                $row_color = "lightgray";
            } else {
                $row_color = "white";
            }
        ?>
            <tr style="background-color: <?php echo $row_color; ?>">
                <td><?php echo $i; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $kelas; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>