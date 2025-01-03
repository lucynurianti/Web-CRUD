<?php
// Konfigurasi database
include 'koneksi.php';

// Mendapatkan data dari form tambah
$nama = $_POST['nama_item'];
$alamat = $_POST['harga_per_item'];
$tempat_lahir = $_POST['stok'];

// Menambah data barang ke dalam database
$sql = "INSERT INTO data_barang (nama_item, harga_per_item, stok) VALUES ('$nama', '$alamat', '$tempat_lahir')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Ganti 'kode_item.php' dengan halaman tujuan Anda
    exit(); // Pastikan script berhenti setelah redirect
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
