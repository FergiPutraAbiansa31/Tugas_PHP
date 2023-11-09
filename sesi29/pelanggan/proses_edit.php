<?php
include('../connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];


    $updateQuery = "UPDATE pelanggan SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', telpon = '$telpon', alamat = '$alamat' WHERE id = $id";

    if (mysqli_query($conn, $updateQuery)) {
        header("location: pelanggan.php");
    } else {
        echo "Gagal mengedit pelanggan: " . mysqli_error($conn);
    }
} else {
    echo "Aksi tidak diizinkan!";
}
?>
