<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql= mysqli_query($conn, "SELECT * FROM petugas where username='$username' and password='$password' ");
$cek= mysqli_num_rows($sql);
if ($cek > 0) {
    $data= mysqli_fetch_array($sql);
    if ($data['level']=='admin')
    {
        session_start();
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['user'] = $username;
        $_SESSION['nama'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];
        header("Location:admin/admin.php"); 
    }else if($data['level']=='petugas'){
        session_start();
        $_SESSION['user'] = $username;
        $_SESSION['nama'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];
        header("Location:petugas/petugas.php"); 
    }
}else{
    ?>
        <script type="text/javascript">
        alert("Data atau password tidak ditemukan!");
        window.location = "index2.php";
        </script>
    <?php
}
?>