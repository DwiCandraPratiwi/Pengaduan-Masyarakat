<?php
    include_once("../koneksi.php");

    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl_tanggapan = $_POST['tgl_tanggapan'];
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_POST['id_petugas'];
    $status = 'selesai';

    $query = "INSERT INTO tanggapan(id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) values('$id_pengaduan', '$tgl_tanggapan', '$tanggapan', '$id_petugas')";

    $update_status = "UPDATE pengaduan SET status='$status' WHERE id_pengaduan='$id_pengaduan' ";

    $hasil=mysqli_query($conn,$query);

    if($hasil){
        ?>
            <script type="text/javascript">
                alert("Data berhasil ditanggapi!");
                window.location= "admin.php?url=verifikasi_pengaduan.php";
            </script>
        <?php
    }else{
        echo "Tanggapan GAGAL tersimpan!";
    }
?>