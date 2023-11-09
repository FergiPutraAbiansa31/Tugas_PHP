<?php
include('../connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM pelanggan WHERE id = $id";

    if (mysqli_query($conn, $deleteQuery)) {
        header("location: pelanggan.php");
    } else {
        echo "Gagal menghapus pelanggan: " . mysqli_error($conn);
    }
} else {
    echo "Aksi tidak diizinkan!";
}
?>
