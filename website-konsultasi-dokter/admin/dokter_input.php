<?php include("inc_header.php") ?>
<?php
$nama   = "";

$foto   = "";
$foto_name = "";

$nama_apotik  = "";
$alamat       = "";
$error      = "";
$sukses     = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from profil_dokter where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $nama  = $r1['nama'];
    $foto = $r1['foto'];
    $nama_apotik   = $r1['nama_apotik'];
    $alamat        = $r1['alamat'];

    if($alamat == ''){
        $error  = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) {
    $nama     = $_POST['nama'];
    $alamat        = $_POST['alamat'];
    $nama_apotik    = $_POST['nama_apotik'];

    if ($nama == '' or $alamat == '') {
        $error     = "Silakan masukkan semua data yakni adalah data";
    }

    //print_r($_FILES);
    if($_FILES['foto']['name']){
        $foto_name = $_FILES['foto']['name'];
        $foto_files = $_FILES['foto']['tmp_name'];
        
        $detail_file = pathinfo($foto_name);
        $foto_ekstensi = $detail_file['extension'];
        

        #Array ( [dirname] => . [basename] => dokter hadriansyah.jpg [extension] => jpg [filename] => dokter hadriansyah )
        $ekstensi_dibolehkan = array("jpg", "jpeg", "png", "gif");
        if(!in_array($foto_ekstensi, $ekstensi_dibolehkan)){
            $error = "Ekstensi yang diperbolehkan adalah jpg, jpeg, png, dan gif";
        }
    }

    if (empty($error)) {
        if($foto_name){
            $direktori = "../gambar";

            @unlink($direktori."/$foto"); //delete data profil dokter
            $foto_name = "profil_dokter_".time()."_".$foto_name;
            move_uploaded_file($foto_files, $direktori."/".$foto_name);
        
            $foto = $foto_name;
        }
        else{
            $foto_name=$foto;
        }


        if($id != ""){
            $sql1   = "update profil_dokter set nama = '$nama', foto='$foto_name' nama_apotik='$nama_apotik',alamat='$alamat',tgl_isi=now() where id = '$id'";
        }else{
            $sql1       = "insert into profil_dokter(nama,foto,nama_apotik,alamat) values ('$nama','$foto_name','$nama_apotik','$alamat')";
        }
        
        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Sukses memasukkan data";
        } else {
            $error      = "Gagal masukkan data";
        }
    }
}


?>
<h1>Halaman Input Data Profil Dokter</h1>
<div class="mb-3 row">
    <a href="dokter.php">
        << Kembali ke halaman admin dokter</a>
</div>
<?php
if ($error) {
?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php
}
?>
<?php
if ($sukses) {
?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" name="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
            <?php 
            if($foto){
                echo "<img src='../gambar/$foto' style='max-height:100px; max-width:100px'/>";
            }
                
            ?>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_apotik" class="col-sm-2 col-form-label">Apotik</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_apotik" value="<?php echo $nama_apotik ?>" name="nama_apotik">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea name="alamat" class="form-control" id="summernote"><?php echo $alamat ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
        </div>
</form>
<?php include("inc_footer.php") ?>