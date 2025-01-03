<?php
include 'koneksi.php';
// Mendapatkan data dari form edit
$nim = $_POST['kode_item'];
$nama = $_POST['nama_item'];
$alamat = $_POST['harga_per_item'];
$tempat_lahir = $_POST['stok'];

// Update data mahasiswa
$sql = "UPDATE data_barang SET nama_item='$nama', harga_per_item='$alamat', stok='$tempat_lahir' WHERE kode_item='$nim'";
if ($conn->query($sql) === TRUE) {
    echo "Data barang berhasil diupdate.";
    header("Location: index.php"); // Ganti 'kode_item.php' dengan halaman tujuan Anda
} else {
    echo "Error updating record: " . $conn->error;
}

?>
