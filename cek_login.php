<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql= mysqli_query($conn, "SELECT * FROM masyarakat where username='$username' and password='$password' ");
$cek= mysqli_num_rows($sql);
if ($cek > 0) {
    $data= mysqli_fetch_array($sql);
    session_start();
    $_SESSION['nama'] = $username;
    $_SESSION['nik'] = $data['nik'];
    header("Location:masyarakat.php"); 
}else{
    ?>
        <script type="text/javascript">
        alert("Data atau password tidak ditemukan!");
        window.location = "index.php";
        </script>
    <?php
}
?>