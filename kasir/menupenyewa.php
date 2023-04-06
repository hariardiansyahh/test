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
        <h1>MENU PENYEWA</h1>
    </div>    
    </div>
    <div class="nav">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="menulapangan.php">Menu Lapangan</a></li>
            <li><a href="menupenyewa.php">Menu Penyewa</a></li>
            <li><a href="menutransaksi.php">Data Pesanan</a></li>
            <li><a href="menulapangan.php">Logout</a></li>
        </ul>
    </div>
    <center>
        <div class="box">
            <h2 style="text-align: center; margin-bottom: 20px">KASIR PENYEWA FUTSAL</h2>
            <a href="tambah_penyewa.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Sewaan</a>
            <table border="1" cellspacing="0" cellpadding="8 border="1" width="100%" style="text-align : center; font-size: 15px; margin-bottom: 20px;">
        <tr>
            <th>NO</th>
            <th>Nama Sewa</th>
            <th>Alamat Sewa</th>
            <th>Nomor Telpon</th>
       </tr>
       <?php
       $no=1;
       foreach ($dbfutsal->tampilpenyewa() as $x) {
       
       ?>
       <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $x ['nama_penyewa'];?></td>
            <td><?php echo $x['alamat_penyewa'];?></td>
            <td><?php echo $x['no_telp'];?></td>
       </tr>
       <?php } ?>
       </table>
        </div>
    </center>
        </div>
</body>
</html>