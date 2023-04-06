<?php
    class database{
        var $host = 'localhost';
        var $name = 'root';
        var $pw = '';
        var $db = 'db_futsal';

        function _construcrt(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            mysqli_select_db($koneksi, $this->db);
        }
        // koneksi lapangan
        function tampillapangan(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            $datalapangan = mysqli_query($koneksi, "SELECT * FROM tb_lapangan");
            while($d = mysqli_fetch_array($datalapangan)){
                $hasil[] = $d;
            }
            return $hasil;
        }

        // koneksi penyewa
        function tampilpenyewa(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            $datapenyewa = mysqli_query($koneksi, "SELECT * FROM tb_penyewa");
            while ($dp = mysqli_fetch_array($datapenyewa)) {
                $hasil[] = $dp;
            }
            return $hasil;
        }

        // koneksi transaksi
        function tampiltransaksi(){
            $sql = "SELECT tb_transaksi.id_transaksi, tb_lapangan.nama_lapangan, tb_penyewa.nama_penyewa, tb_transaksi.jam_sewa, tb_transaksi.harga, tb_transaksi.total_pembayaran FROM tb_lapangan INNER JOIN tb_transaksi ON tb_lapangan.id_lapangan = tb_transaksi.id_lapangan INNER JOIN tb_penyewa ON tb_penyewa.id_penyewa = tb_transaksi.id_penyewa";
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            $datatransaksi = mysqli_query($koneksi, $sql);
            while ($dt = mysqli_fetch_array($datatransaksi)) {
                $hasil[] = $dt;
            }
            return $hasil;
        }

        // tambah lapangan
        function tambahlapangan($nama_lapangan, $harga) {
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            mysqli_query($koneksi, "INSERT INTO tb_lapangan VALUES('', '$nama_lapangan', '$harga')");
        }

        // tambah penyewa
        function tambahpenyewa($nama_penyewa, $alamat_penyewa, $no_telp) {
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            mysqli_query($koneksi, "INSERT INTO tb_penyewa VALUES('', '$nama_penyewa', '$alamat_penyewa', '$no_telp')");
        }
        
        // tambah transaksi
        function tambahtransaksi($id_lapangan, $id_penyewa, $jam_sewa, $harga, $total_pembayaran) {
            $koneksi = mysqli_connect( $this->host, $this->name, $this->pw, $this->db); 
            mysqli_query($koneksi, "INSERT INTO tb_transaksi VALUES ('', $id_lapangan, $id_penyewa, $jam_sewa, $harga, $total_pembayaran)");
        }
    }
?>