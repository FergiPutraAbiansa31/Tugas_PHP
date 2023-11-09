<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama_pembeli = $_POST['nama_pembeli'];
$jk = $_POST['jk'];
$telpon = $_POST['no_telp'];
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO pembeli (nama_pembeli, jk, no_telp, alamat) VALUES ('$nama_pembeli','$jk', '$telpon', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";

}

?>