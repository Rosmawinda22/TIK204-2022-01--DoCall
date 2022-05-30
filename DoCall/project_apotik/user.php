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
                <?php $cekdatauser= isset($datauser['nama']) ? $datauser['nama'] : ''; ?>
                <h3 class="profile-title"><?=  $cekdatauser; ?></h3>
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
                    <?php if(!isset($_SESSION['data'])) {?>
                        <form action="backend/setuser.php" method="POST" class="form-dokter">
                            <select name="id">
                              <option selected>Pilih Pengguna</option>
                            <?php 
                            $query = mysqli_query($koneksi, "SELECT * FROM user");
                            while($data = mysqli_fetch_array($query)){;
                            ?>
                              <option value="<?= $data['id']; ?>"><?= $data['nama']; ?></option>
                            <?php } ?>
                            </select>
                            <input type="submit" class="button big default" value="Pilih User" name="submit">
                        </form>
                    <?php } ?>
                        <div class="col-md-12">
                            <?php
                            if(isset($_SESSION['data'])){?>
                            <h4 class="widget-title">Selamat datang <?= $datauser['nama']; ?>, silahkan pesan nomor antrian anda</h4>
                            <strong>Pilih dokter terlebih dahulu untuk melihat hari dan jam kosong dokter 
                            tersebut</strong><br><br>
                                <form action="" method="POST">
                                <select  name="nmdokter">
                                  <option selected>Pilih Dokter</option>
                                <?php 
                                $querys = mysqli_query($koneksi, "SELECT * FROM dokter");
                                while($datadokter = mysqli_fetch_array($querys)){;
                                ?>
                                  <option value="<?= $datadokter['nama_dokter']; ?>"><?= $datadokter['nama_dokter']; ?></option>
                                <?php } ?>
                                </select>
                                <button name="lihat_dokter">Lihat Data dokter</button></form>
                                <div class="merah"><?php if(isset($_GET['pesan'])){
                                    print("<br>".$_GET['pesan']);
                                }?></div>
                                <?php if(isset($_POST['lihat_dokter'])){ ?>
                                    <?php 
                                    $nm = $_POST['nmdokter'];
                                    $querytampil = mysqli_query($koneksi, "SELECT * FROM dokter where nama_dokter = '$nm'");
                                    $show = mysqli_fetch_array($querytampil); 
                                        ?><strong>
                                    <br><table>
                                        <tr>
                                            <td width="80px">Nama </td>
                                            <td width="10px">: </td>
                                            <td><?= $show['nama_dokter']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Apotek </td>
                                            <td>: </td>
                                            <td><?= $show['asal_apotik']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Aalamat </td>
                                            <td>: </td>
                                            <td><?= $show['alamat']; ?></td>
                                        </tr>
                                    </table>
                                    <?php 
                                        $x = substr($show['jam_mulai'], 0, -3);
                                        $y = substr($show['jam_selesai'], 0, -3);
                                        if ($show['hari_kosong'] == '-') {
                                            print("Dokter ini belum menentukan jadwal kosong, mohon maaf </strong>");
                                        } else {
                                     ?>
                                    <p>Jam kosong tersedia Hari <?= $show['hari_kosong'] ?> Jam <?= $x ?> sampai <?= $y ?></p></strong>
                                    <form action="backend/pesan_antrian.php" method="POST" class="pesan_antrian">
                                        <input type="hidden" name="id_user" value="<?= $id ?>">
                                        <input type="hidden" name="id_admin" value="<?= $show['id'] ?>">
                                        <input type="submit" name="pesan" value="Ambil antrian dengan dokter <?= $show['nama_dokter']; ?> hari <?= $show['hari_kosong']; ?> jam <?= $x ?> sampai <?= $y ?> ">
                                    </form>
                                <?php } ?>
                                <?php } ?>
                            <?php }else{ ?>
                            <h4 class="widget-title">Selamat datang, silahkan pesan nomor antrian anda</h4>
                            <p>SIlahkan pilih user terlebih dahulu</p>
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