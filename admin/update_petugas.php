<?php
    require "../koneksi.php";

    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $level = $_POST['level'];
    $id = $_POST['id_petugas'];

    $query = mysqli_query($conn, "UPDATE petugas SET nama_petugas='$nama_petugas', username='$username', 
    password='$password', telp='$telp', level='$level' WHERE id_petugas='$id' ");

    if($query){
        ?>
            <script type="text/javascript">
                alert("Data berhasil diubah!");
                window.location='admin.php?url=lihat_petugas';
            </script>
        <?php
    }

?>