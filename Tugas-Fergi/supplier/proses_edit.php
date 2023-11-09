<?php
include('../koneksi.php');

$id_supplier = $_POST['id_supplier'];

// Dapatkan data dari form
$nama_supplier = $_POST['nama_supplier'];
$telpon = $_POST['no_telp'];
$alamat = $_POST['alamat'];

// Query update data ke dalam database
$query = "UPDATE supplier SET nama_supplier = '$nama_supplier', no_telp = '$telpon', alamat = '$alamat' WHERE id_supplier = $id_supplier";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Diupdate!";
}
?>
