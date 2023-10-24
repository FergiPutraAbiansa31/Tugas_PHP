<!DOCTYPE html>
<html>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    table {
        border-collapse: collapse;
        margin: auto;
    }

    table, th, td {
        border: 1px solid #dddddd;
    }

    th, td {
        padding: 10px;
    }

    nav {
        background-color: #f5c91b;
        padding: 15px;
        margin-bottom: 40px;

    }
</style>

<body>
    <nav>
        <h1>Daftar Nilai</h1>
    </nav>

    <?php
    $jsondata = file_get_contents('<Folder/data.json');
    $data = json_decode($jsondata, true);

    function hitungUmur($tanggal_lahir)
    {
        $tgl_lahir = new DateTime($tanggal_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tgl_lahir);
        return $umur->y;
    }

    function kategoriNilai($nilai)
    {
        if ($nilai >= 90) {
            return "A";
        } elseif ($nilai >= 80) {
            return "B";
        } elseif ($nilai >= 70) {
            return "C";
        } elseif ($nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

    echo "<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>Nilai</th>
        <th>Hasil</th>
    </tr>";

    foreach ($data as $key => $daftar) {
        $umur = hitungUmur($daftar["tanggal_lahir"]);
        $tanggal_lahir = date_create($daftar["tanggal_lahir"])->format('d F Y');
        $hasil = kategoriNilai($daftar["nilai"]);

        if ($key % 2 == 0) {
            $background_color = 'white';
        } else {
            $background_color = '#f2f2f2';
        }

        echo "<tr style='background-color: $background_color;'>
        <td>" . ($key + 1) . "</td>
        <td>" . $daftar["nama"] . "</td>
        <td>" . $tanggal_lahir . "</td>
        <td>" . $umur . " tahun</td>
        <td>" . $daftar["alamat"] . "</td>
        <td>" . $daftar["kelas"] . "</td>
        <td>" . $daftar["nilai"] . "</td>
        <td>" . $hasil . "</td>
    </tr>";
    }

    echo "</table>";
    ?>
</body>

</html>