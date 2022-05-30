<?php 
include "backend/koneksi.php";
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM antrian WHERE id_user = $id");
	$getid = mysqli_fetch_array($query);
    $cekid_dokter = isset($getid['id_dokter']) ? $getid['id_dokter'] : '';
	$id_dokter = $cekid_dokter;
}
 ?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pesan Antrian</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <div class="responsive-header visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section">
                            <div class="profile-image">
                                <img src="img/profile.jpg" alt="Volton">
                            </div>
                            <div class="profile-content">
                                <h3 class="profile-title">Volton</h3>
                                <p class="profile-description">Digital Photographer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                <div class="main-navigation responsive-menu">
                    <ul class="navigation">
                        <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i>About Me</a></li>
                        <li><a href="#projects"><i class="fa fa-newspaper-o"></i>My Gallery</a></li>
                        <li><a href="#contact"><i class="fa fa-envelope"></i>Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- jika ingin merubah sesuatu codingan dimulai dari sini -->
        <div class="sidebar-menu hidden-xs hidden-sm">
            <div class="top-section">
                <div class="profile-image">
                    <img src="img/default.webp" alt="Volton">
                </div>
                <?php if(isset($_SESSION['data'])){
                $querydokter = mysqli_query($koneksi, "SELECT * FROM user WHERE id ='$id' ");
                $datauser = mysqli_fetch_array($querydokter);
                 ?>

                <h3 class="profile-title"><?= $datauser['nama']; ?></h3>
                <p class="profile-description">Pasien</p>
                <?php } else { ?>
                    <h3 class="profile-title">Anonimouse</h3>
                    <p class="profile-description">Pasien</p>
                <?php } ?>
            </div> 
            <div class="main-navigation">
                <ul class="navigation">
                    <li><a href="user.php"><i class="fa fa-home"></i>Pesan Atrian</a></li>
                    <li><a href="notifikasi.php"><i class="fa fa-newspaper-o"></i>Notifikasi</a></li>
                    <li><a href="backend/logout.php"><i class="fa fa-user"></i>logout</a></li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <div class="fluid-container">
                <div class="content-wrapper">
                    <div class="page-section" id="about">
                    <div class="row">
                    
                        <div class="col-md-12">
                            <?php
                            if(isset($_SESSION['data'])){
                            	$cekantri=mysqli_num_rows(mysqli_query($koneksi, "SELECT $id FROM antrian WHERE id_user=$id"));
                            	if ($cekantri > 0) {
                            	$query = mysqli_query($koneksi, "SELECT * FROM antrian WHERE id_dokter = $id_dokter");
								$datas = mysqli_num_rows($query);
                            	} else {
                            	$datas = 0;
                            	}
								?>
                            <h4 class="widget-title">Notifikasi Antrian Anda</h4>
                            <?php if ($datas > 0){ ?>
                            	<form action="backend/hapus_antrian.php" method="POST" class="hapusantrian"><input type="hidden" name="id" value="<?= $id ?>"><button>Batalkan pemesanan antrian</button></form>
                            <?php } ?>
                            <strong class="kanan">No <?= $datas ?></strong><br><br>

                            <?php if($datas > 0){ 
                            	$selectdokter = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id ='$id_dokter'");
                				$datadokter = mysqli_fetch_array($selectdokter);
                				$x = substr($datadokter['jam_mulai'], 0, -3);
								$y = substr($datadokter['jam_selesai'], 0, -3);
                            ?>
                            	<p><b>- </b> Anda telah memesan antrian untuk jam <?= $x ?> - <?= $y ?> dengan dokter <?= $datadokter['nama_dokter'] ?> spesialis Umum, nomor antrian anda adalah <?= $datas ?> orang lagi, mohon datang 10 menit lebih awal.</p><br>
                            	<?php if($datas == 1) {?>
                            		<p><b>- </b>Rimender, mohon segera datang selanjutnya adalah antrian anda</p>
                            		<b>Terima kasih</b>
                            <?php }} else { ?>
                            	<p>Belum ada pesanan antrian</p>
                            <?php } ?>
                          	
                             






                            <?php }else{ ?>
                            <h4 class="widget-title">Silahkan login/pilih user terlebih dahulu untuk melihat notofikasi</h4><p>SIlahkan pilih user</p>
                            <?php } ?>
                        </div>
                    </div>
                    </div>

                    <div class="row" id="footer">
                        <div class="col-md-12 text-center">
                           <hr> 
                           <p class="copyright-text">Rekayasa Perangkat Lunak 2022</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script src="js/min/main.min.js"></script>

    </body>
</html>