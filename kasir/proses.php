<?php
include 'koneksi.php';
$dbfutsal= new database();

$aksi = $_GET['aksi'];
//proses tambah lapangan
if($aksi == "tambahlapangan"){
    $dbfutsal->tambahlapangan($_POST['nama_lapangan'], 
    $_POST['harga']);
    header("location:menulapangan.php");
}
//proses tambah penyewa
if($aksi == "tambahpenyewa"){
    $dbfutsal->tambahpenyewa($_POST['nama_penyewa'], 
    $_POST['alamat_penyewa'], 
    $_POST['no_telp']);
    header("location:menupenyewa.php");
}

elseif ($aksi == "hapuspesanan"){
    $dbfutsal->hapuspesanan($_GET['id_pesanan']);
    header("location:kasir.php");
}

// proses tambah transaksi
if($aksi == "tambahtransaksi") {
    $id_lapangan = $_POST["id_lapangan"];
    $query = mysqli_query(mysqli_connect("localhost", "root", "", "db_futsal"), "SELECT harga FROM tb_lapangan WHERE id_lapangan = '$id_lapangan'");

    while( $row = mysqli_fetch_array($query) ) {
        $total_pembayaran = $row["harga"] * $_POST["jam_sewa"];
        $dbfutsal->tambahtransaksi($_POST["id_lapangan"], $_POST["id_penyewa"], $_POST["jam_sewa"], $row ["harga"], $total_pembayaran);
        header("location: menutransaksi.php");
    }
}
?>