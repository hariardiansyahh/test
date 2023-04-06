<?php
    include 'koneksi.php';
    $dbfutsal = new database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../kasir/tr.css">
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="all">
        <div class="head">
            <h1>TAMBAH DATA TRANSAKSI</h1>
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
            <h2 style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Data Transaksi</h2>
            <table style="padding-center: 720px;">
            <form action="proses.php?aksi=tambahtransaksi" method="post">
                <ul style="list-style-type: none;">
                <li>
                    <label for="nama_lapangan">Nama Lapangan : </label>
                </li>

                <select name="id_lapangan" id="nama_lapangan">
                    <option disabled selected>Pilih Lapangan</option>

                    <?php foreach($dbfutsal -> tampillapangan() as $option) : ?>
                        <option value="<?php echo $option['id_lapangan'] ?>"><?php echo $option['nama_lapangan'] . ' ' . '- Rp ' . $option['harga'] ?></option>
                    <?php endforeach ?>
                </select><br><br>

                <li>
                    <label for="nama_penyewa">Nama Penyewa : </label>
                </li>

                <select name="id_penyewa" id="nama_penyewa">
                    <option disabled selected>Pilih Penyewa</option>

                    <?php foreach($dbfutsal -> tampilpenyewa() as $option) : ?>
                        <option value="<?php echo $option['id_penyewa'] ?>"><?php echo $option['nama_penyewa'] . ' - ' . $option['alamat_penyewa'] . ' - ' . $option['no_telp'] ?></option>
                    <?php endforeach ?>
                </select><br><br>
                <li>
                    <label for="jam_sewa">Berapa Jam Menyewa : </label>
                </li>
                <input type="text" name="jam_sewa" id="jam_sewa"><br><br>

                <button type="submit">Simpan</button>
                </ul>
            </form>
            </table>
        </div>
        </center>
    </div>
</body>
</html>