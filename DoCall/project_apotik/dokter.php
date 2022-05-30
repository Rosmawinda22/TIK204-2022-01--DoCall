<?php 
include "backend/koneksi.php";
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
}
 ?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Set Jadwal Kosong Dokter</title>
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
                $querydokter = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id =$id");
                $datadokter = mysqli_fetch_array($querydokter);
                 ?>
                 <?php 
                 $ceknama_dokter = isset($datadokter['nama_dokter']) ? $datadokter['nama_dokter'] : '';
                 $cekasal_apotik = isset($datadokter['asal_apotik']) ? $datadokter['asal_apotik'] : '';

                  ?>
                <h3 class="profile-title"><?= $ceknama_dokter; ?></h3>
                <p class="profile-description"><?= $cekasal_apotik; ?></p>
                <p class="profile-description">Dokter Umum</p>
                <?php } else { ?>
                    <h3 class="profile-title">Anonimouse</h3>
                    <p class="profile-description">pilih apotek</p>
                    <p class="profile-description">Spesialis</p>
                <?php } ?>
            </div> 
            <div class="main-navigation">
                <ul class="navigation">
                    <li><a href="#"><i class="fa fa-pencil"></i>Atur Jadwal</a></li>
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
                        <?php if(isset($_SESSION['data'])){ ?>
                            <h4 class="widget-title">Atur jadwal anda dibawah</h4>
                            <p>Anda dapat mengatur jadwal kosong anda disini agar pasien dapat melakukan pesan antrian </p>
                            <strong>Jadwal Kosong anda : 
                            <?php
                                $cekjam_mulai = isset($datadokter['jam_mulai']) ? $datadokter['jam_mulai'] : '';
                                $cekjam_selesai = isset($datadokter['jam_selesai']) ? $datadokter['jam_selesai'] : '';
                                $cekhari_kosong = isset($datadokter['hari_kosong']) ? $datadokter['hari_kosong'] : '';
                                if($cekhari_kosong == '-'){
                                print('Anda belum mengatur jadwal kosong'); 
                                }else{
                                $x = substr($cekjam_mulai, 0, -3);
                                $y = substr($cekjam_selesai, 0, -3);
                                print("Hari ".$cekhari_kosong." Jam ".$x." sampai ".$y);
                                }?></strong><br><br>
                                <strong>Pilih jadwal kosong anda </strong><br>
                                <form class='jadwalkosong' action="backend/setjadwalkosong.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $datadokter['id']; ?>">
                                    <select class="setjadwal" name="jadwalkosong">
                                      <option selected>Pilih hari kosong anda</option>
                                      <option>Senin</option>
                                      <option>Selasa</option>
                                      <option>Rabu</option>
                                      <option>Kamis</option>
                                      <option>Jumat</option>
                                      <option>Sabtu</option>
                                      <option>Minggu</option>
                                    </select><br><br>
                                    Dari Jam <input type="time" name="timeawal"> Sampai Jam <input type="time" name="timeakhir"> kirim 
                                    <input type="submit" class="button big default" value="Set jadwal kosong" name="setjadwal">
                                </form>
                        <?php } else { ?>
                            <h4 class="widget-title">Atur jadwal anda dibawah</h4>
                            <p>Silahkan pilih dokter terlebih dahulu</p>
                        </div>
                        <?php } ?>
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