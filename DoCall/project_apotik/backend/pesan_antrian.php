<?php 
include "koneksi.php";

$id_user = $_POST['id_user'];
$id_admin = $_POST['id_admin'];

$cekantri=mysqli_num_rows(mysqli_query($koneksi, "SELECT $id_user FROM antrian WHERE id_user=$id_user"));

if($cekantri <= 0){
	mysqli_query($koneksi, "INSERT INTO antrian (id, id_user, id_dokter) VALUES ('', '$id_user', '$id_admin')");
	  	echo "<script> 
	            alert('Berhasil memesan antrian!');
	            document.location.href = '../notifikasi.php';
	        </script>
	    ";
} else {
	header("location:../user.php?pesan=Tidak bisa memesan, anda sudah melakukan pesanan! Cek bagian Notifikasi");
}



 ?>

