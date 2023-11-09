<?php
include('../koneksi.php');

$id_pembeli = $_POST['id_pembeli'];

$updateQuery = "UPDATE transaksi SET id_pembeli = NULL WHERE id_pembeli = $id_pembeli";

if (mysqli_query($conn, $updateQuery)) {
    $deleteQuery = "DELETE FROM pembeli WHERE id_pembeli = $id_pembeli";
    if (mysqli_query($conn, $deleteQuery)) {
        header("location: index.php");
    } else {
        echo "Data Gagal Hapus!";
    }
} else {
    echo "Gagal menghapus FOREIGN KEY.";
}
?>
