<?php

    require '../koneksi.php';

    $id=$_GET['id'];

    $query=mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas='$id' ");

    if($query){
        ?>
            <script type="text/javascript">
                alert("Data berhasil dihapus!");
                window.location="admin.php?url=lihat_petugas";
            </script>
        <?php
    }
?>