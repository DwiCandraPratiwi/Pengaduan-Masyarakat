<?php
    require "../koneksi.php";

    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $level = $_POST['level'];

    $query = "INSERT INTO petugas(nama_petugas, username, password, telp, level) 
    values('$nama_petugas', '$username', '$password', '$telp', '$level')";

    $hasil=mysqli_query($conn,$query);

    if($hasil){
        ?>
            <script type="text/javascript">
                alert("Data berhasil disimpan!");
                window.location='admin.php?url=lihat_petugas';
            </script>
        <?php
    }

?>