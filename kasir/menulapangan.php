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
        <h1>MENU LAPANGAN</h1>
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
            <h2 style="text-align: center; margin-bottom: 20px">KASIR LAPANGAN FUTSAL</h2>
            <a href="tambah_lapangan.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Lapangan</a>
            <table border="1" cellspacing="0" cellpadding="8 border="1" width="100%" style="text-align : center; font-size: 15px; margin-bottom: 20px;">
        <tr>
            <th>NO</th>
            <th>Nama Lapangan</th>
            <th>Harga Lapangan</th>
       </tr>
       <?php
       $no=1;
       foreach ($dbfutsal->tampillapangan() as $x) {
       
       ?>
       <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $x ['nama_lapangan'];?></td>
            <td><?php echo $x['harga'];?></td>
       </tr>
       <?php } ?>
       </table>
        </div>
    </center>
        </div>
</body>
</html>