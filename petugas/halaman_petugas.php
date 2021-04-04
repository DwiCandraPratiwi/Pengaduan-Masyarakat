<?php
    if(isset($_GET['url'])){
        $url = $_GET['url'];

        switch($url){
            case 'verifikasi_pengaduan';
            include 'verifikasi_pengaduan.php';
            break;

            case 'detail_pengaduan';
            include 'detail_pengaduan.php';
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

        require '../koneksi.php';
        $sql= mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='0'");
        if($cek=mysqli_num_rows($sql)){
        ?>

        <br><br>

        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><h6>Ada <?php echo $cek; ?> laporan dari masyarakat</h6></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-4x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php
    } }

?>