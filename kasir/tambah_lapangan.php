<?php
include 'koneksi.php';
$dbfutsal = new database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="all">
    <div class="head">
        <h1>FUTSAL OK</h1>
    </div>    
    </div>
    <div class="nav">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="menulapangan.php">Menu Lapangan</a></li>
            <li><a href="menupenyewa.php">Menu Penyewa</a></li>
            <li><a href="kasir.php">Data Pesanan</a></li>
            <li><a href="../index.php">Logout</a></li>
        </ul>
    </div>
    <center>
        <div class="box">
            <h2 style="text-align: center; margin-bottom: 20px">Tambah Menu Lapangan</h2>
        <table style="padding-center: 720px";>
        <form action = "proses.php?aksi=tambahlapangan" method="post">
            <tr>
                <td>Nama Lapangan:</td>
                <td><input type="text" name="nama_lapangan"></td>
            </tr>
            <tr>
                <td>Harga Lapangan:</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
       </table>
        </div>
    </center>
        </div>
</body>
</html>