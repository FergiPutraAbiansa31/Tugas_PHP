<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_supplier = $_POST['id_supplier'];

//query insert data ke dalam database
$query = "INSERT INTO barang (nama_barang, harga, stok, id_supplier) VALUES ('$nama_barang', '$harga', '$stok', '$id_supplier')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";

}

?>