<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Tambah Barang</h2>
        <form action="proses_tambah.php" method="post">
        <div class="form-group">
                <label for="nama_barang">Nama Brang:</label>
                <input type="text" class="form-control" id="nama_item" name="nama_item" required>
            </div>
            <div class="form-group">
                <label for="harga_per_item">Harga/item:</label>
                <input type="text" class="form-control" id="harga_per_item" name="harga_per_item" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="text" class="form-control" id="stok" name="stok" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Barang</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
