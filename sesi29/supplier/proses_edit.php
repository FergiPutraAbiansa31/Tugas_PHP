<?php

//include koneksi database
include('../connection.php');

//get data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE supplier SET nama = '$nama', telpon = '$telpon', alamat = '$alamat' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 
    header("location: supplier.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>