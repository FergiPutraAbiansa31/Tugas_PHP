<?php
include('../connection.php');

// Dapatkan ID Supplier
$id = $_GET['id'];

// Langkah 1: Hapus produk yang terkait dengan supplier
$deleteProductsQuery = "DELETE FROM produk WHERE supplier_id = $id";

if (mysqli_query($conn, $deleteProductsQuery)) {
    // Langkah 2: Hapus supplier setelah produk tidak lagi mengacu padanya
    $deleteSupplierQuery = "DELETE FROM supplier WHERE id = $id";

    if (mysqli_query($conn, $deleteSupplierQuery)) {
        header("location: supplier.php");
    } else {
        echo "Gagal menghapus supplier: " . mysqli_error($conn);
    }
} else {
    echo "Gagal menghapus produk yang terkait: " . mysqli_error($conn);
}
?>
