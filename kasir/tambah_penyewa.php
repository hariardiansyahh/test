<?php
include 'koneksi.php';
$dbfutsal = new database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Penyewa</title>
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
            <li><a href="menutransaksi.php">Data Pesanan</a></li>
            <li><a href="../index.php">Logout</a></li>
        </ul>
    </div>
    <center>
        <div class="box">
            <h2 style="text-align: center; margin-bottom: 20px">Tambah Menu Penyewa</h2>
        <table style="padding-center: 720px";>
        <form action = "proses.php?aksi=tambahpenyewa" method="post">
            <tr>
                <td>Nama Penyewa:</td>
                <td><input type="text" name="nama_penyewa"></td>
            </tr>
            <tr>
                <td>Alamat Penyewa:</td>
                <td><input type="text" name="alamat_penyewa"></td>
            </tr>
            <tr>
                <td>NO Telp:</td>
                <td><input type="text" name="no_telp"></td>
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