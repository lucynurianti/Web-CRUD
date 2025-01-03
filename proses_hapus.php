<?php
include 'koneksi.php';
// Mendapatkan NIM mahasiswa yang akan dihapus dari URL
$nim = $_GET['kode_item'];

// Hapus data mahasiswa
$sql = "DELETE FROM data_barang WHERE kode_item='$nim'";
if ($conn->query($sql) === TRUE) {
    echo "Data barang berhasil dihapus.";
} else {
    echo "Error deleting record: " . $conn->error;
}
header('Location: index.php');
?>
