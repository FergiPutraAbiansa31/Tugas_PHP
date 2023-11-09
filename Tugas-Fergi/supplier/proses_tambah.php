<?php

include('../koneksi.php');

//get data dari form
$nama_supplier = $_POST['nama_supplier'];
$telpon = $_POST['no_telp'];
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO supplier (nama_supplier, no_telp, alamat) VALUES ('$nama_supplier', '$telpon', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";
}

?>