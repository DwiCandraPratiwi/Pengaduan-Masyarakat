<?php 
	$conn = mysqli_connect("localhost","root","","pengaduan_masyarakat");

	if(!$conn) {
		echo "Koneksi gagal!";
		die();
	}
 ?>