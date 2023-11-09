<?php
include('../koneksi.php');

$id_pembeli = $_POST['id_pembeli'];

// Dapatkan data dari form
$nama_pembeli = $_POST['nama_pembeli'];
$jk = $_POST['jk'];
$telpon = $_POST['no_telp'];
$alamat = $_POST['alamat'];

// Query update data ke dalam database
$query = "UPDATE pembeli SET nama_pembeli = '$nama_pembeli', jk = '$jk', no_telp = '$telpon', alamat = '$alamat' WHERE id_pembeli = $id_pembeli";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Diupdate!";
}
?>
