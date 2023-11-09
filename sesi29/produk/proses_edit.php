<?php
include('../connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $satuan = $_POST['satuan'];
    $supplier_id = $_POST['supplier'];

    // Update data in the database
    $update_query = "UPDATE produk SET 
                    kode_produk = '$kode_produk', 
                    nama_produk = '$nama_produk', 
                    harga = '$harga', 
                    stok = '$stok', 
                    satuan = '$satuan', 
                    supplier_id = '$supplier_id' 
                    WHERE id = '$id'";

    if ($conn->query($update_query)) {
        // Redirect to the product list page after successful update
        header("location: ../index.php");
    } else {
        echo "Error updating product: " . $conn->error;
    }
} else {
    echo "Invalid request!";
}
?>
