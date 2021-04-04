<?php 

    require('../koneksi.php');
    $query= mysqli_query("UPDATE pengaduan SET status='proses' WHERE id_pengaduan='$_GET[id]' ");
    if($$query){
        header('Location:verifikasi_pengaduan.php');
    }
?>