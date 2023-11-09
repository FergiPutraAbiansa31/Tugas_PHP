<?php

//include koneksi database
include('../connection.php');

//get data dari form
$kode_produk = $_POST['kode_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$supplier_id = $_POST['supplier_id'];


//query insert data ke dalam database
$query = "INSERT INTO produk (kode_produk, nama_produk, harga, stok, satuan, supplier_id) VALUES ('$kode_produk', '$nama_produk', $harga, $stok, '$satuan', $supplier_id)"; 

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: ../index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
?>