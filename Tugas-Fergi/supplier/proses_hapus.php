<?php
include '../koneksi.php';

$id_supplier = $_POST['id_supplier'];

//Update di barang
$updateQuery = "UPDATE barang SET id_supplier = NULL WHERE id_supplier = $id_supplier";

if (mysqli_query($conn, $updateQuery)) {
    $deleteQuery = "DELETE FROM supplier WHERE id_supplier = $id_supplier";
    if (mysqli_query($conn, $deleteQuery)) {
        header("location: index.php");
    } else {
        echo "Data Gagal Hapus!";
    }
} else {
    echo "Gagal menghapus FOREIGN KEY.";
}
?>