<?php 
	include_once("koneksi.php");

	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
    $password = $_POST['password'];
	$telp = $_POST['telp'];

	$query="INSERT INTO masyarakat (nik, nama, username, password, telp) VALUE ('$nik','$nama','$username','$password','$telp')";

	$hasil=mysqli_query($conn,$query);

	if ($hasil) {
        ?>
            <script type="text/javascript">
            alert("Data berhasil disimpan, Silakan LOGIN!");
            window.location = "index.php";
            </script>
        <?php
	} else {
		echo "input data gagal";
	}
 ?>