<?php

//include koneksi database
include('../connection.php');

//get data dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO pelanggan (nama, jenis_kelamin, telpon, alamat) VALUES ('$nama','$jenis_kelamin', '$telpon', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: pelanggan.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>