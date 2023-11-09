<?php

include('../koneksi.php');

$id_barang = $_POST['id_barang'];

//get data dari form
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_supplier = $_POST['id_supplier'];

//query insert data ke dalam database
$query = "UPDATE barang SET nama_barang = '$nama_barang', harga = '$harga', stok = '$stok', id_supplier = '$id_supplier' WHERE id_barang = $id_barang";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";
}
?>