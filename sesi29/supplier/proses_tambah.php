<?php

//include koneksi database
include('../connection.php');

//get data dari form
$nama = $_POST['nama'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO supplier (nama, telpon, alamat) VALUES ('$nama', '$telpon', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: supplier.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>