<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Edit Barang</h2>
        <?php
        include 'koneksi.php';

        // Mendapatkan NIM mahasiswa yang akan diedit dari URL
        $nim = $_GET['kode_item'];

        // Mengambil data mahasiswa dari database berdasarkan NIM
        $sql = "SELECT * FROM data_barang WHERE kode_item='$nim'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="kode_item" value="<?php echo $row['kode_item']; ?>">
            <div class="form-group">
                <label for="nama_barang">Nama Brang:</label>
                <input type="text" class="form-control" id="nama_item" name="nama_item" value="<?php echo $row['nama_item']; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga_per_item">Harga/item:</label>
                <input type="text" class="form-control" id="harga_per_item" name="harga_per_item" value="<?php echo $row['harga_per_item']; ?>" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $row['stok']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
        <?php
        } else {
            echo "Data mahasiswa tidak ditemukan.";
        }

        ?>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
