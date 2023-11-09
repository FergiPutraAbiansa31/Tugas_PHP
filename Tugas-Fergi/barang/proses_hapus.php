<?php
include '../koneksi.php';

$id_barang = $_POST['id_barang'];

//query insert data ke dalam database
$updateQuery = "UPDATE transaksi SET id_barang = NULL WHERE id_barang = $id_barang";

if (mysqli_query($conn, $updateQuery)) {
    $deleteQuery = "DELETE FROM barang WHERE id_barang = $id_barang";
    if (mysqli_query($conn, $deleteQuery)) {
        header("location: index.php");
    } else {
        echo "Data Gagal Hapus!";
    }
} else {
    echo "Gagal menghapus FOREIGN KEY.";
}
?>