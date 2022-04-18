<?php include("inc_header.php")?>
<?php 
$nama      = "";
$hari    = "";
$jam       = "";
$error      = "";
$sukses     = "";

if(isset($_POST['simpan'])){
    $judul      = $_POST['nama'];
    $hari       = $_POST['hari'];
    $jam   = $_POST['jam'];
    
    if($nama == '' or $jam == ''){
        $error  = "Silahkan masukkan data jadwal kosong dokter";

    }
    if(empty($error)){
        $sql1   =" insert into halaman(nama, hari, jam) values('$nama','$hari','$jam')";
        $q1     = mysqli_query($koneksi, $sql1);
        if($q1){
            $sukses     = "Sukses Masukkan Data";
        }
        else{
            $error      = "Gagal";
        }
    }
}


?>
<h1>iNPUT JADWAL KOSONG DOKTER</h1>
<div class="mb-3 row"></div>
    <a href="halaman.php"><< Kembali ke halaman admin</a>
</div>
<?php 
if($error){
?>
    <div class="alert alert-danger" role="alert">
       <?php echo $error ?>
    </div>
<?php    
}
if($sukses){
    ?>
        <div class="alert alert-primary" role="alert">
           <?php echo $sukses ?>
        </div>
    <?php    
    }

?>
<form action="" method="post">
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id="nama" value="<?php echo $nama ?>" name="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="hari" class="col-sm-2 col-form-label">HARI</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id ="hari=" value="<?php echo $hari ?>" name="hari">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jam" class="col-sm-2 col-form-label">JAM</label>
        <div class="col-sm-10">
            <textarea name="jam" class="form-control"><?php echo $jam ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
        </div>
    </div>
</form>
<?php include("inc_footer.php")?>