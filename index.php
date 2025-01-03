<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Data Barang</h2>
        <?php
            
            $user = $_SESSION['user'];
            echo $user;
        ?><br>
        <form action="logout.php" method="post">
            <button type="submit" class="btn btn-danger mb-3 name="logout">logout</button>
            </form>
            <br>
        <a class="btn btn-success mb-3" href="tambah.php">Tambah Item</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Item</th>
                    <th>Nama Barang</th>
                    <th>Harga/Item</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'koneksi.php';
                    // Mendapatkan data mahasiswa dari database
                    $sql = "SELECT * FROM data_barang";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $data_mahasiswa = $result;
                        foreach ($data_mahasiswa as $mahasiswa) {
                            echo "<tr>";
                            echo "<td>".$mahasiswa['kode_item']."</td>";
                            echo "<td>".$mahasiswa['nama_item']."</td>";
                            echo "<td>".$mahasiswa['harga_per_item']."</td>";
                            echo "<td>".$mahasiswa['stok']."</td>";
                            echo "<td>";
                            echo "<a class='btn btn-primary' href='edit.php?kode_item=".$mahasiswa['kode_item']."'>Edit</a> ";
                            echo "<a class='btn btn-danger' href='proses_hapus.php?kode_item=".$mahasiswa['kode_item']."'>Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                }
                    } else {
                        echo "0 results";
                    } 



                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
