<?php
    if(isset($_GET['url'])){
        $url = $_GET['url'];

        switch($url){
            case 'tulis_pengaduan';
            include 'tulis_pengaduan.php';
            break;

            case 'lihat_pengaduan';
            include 'lihat_pengaduan.php';
            break;

            case 'detail_pengaduan';
            include 'detail_pengaduan.php';
            break;

            case 'lihat_tanggapan';
            include 'lihat_tanggapan.php';
            break;
        }
    }else{
        ?>
        <h3><b>Selamat datang di Aplikasi Pengaduan Masyarakat</b></h3>
        <p>Silakan laporkan masalah pelanggaran atau penyimpangan yang terjadi di masyarakat di tempat anda berada. 
            Setiap pelapor dilindungi oleh negara <b>Mari bangun Bali Aman, Damai & Berdedikari</b> 
        </p>
        <br><br>
        <h5><b>Anda Login Sebagai:</b></h5>
        <?php

        echo $_SESSION['nama'];
    }

?>