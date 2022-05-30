<?php 
include "koneksi.php";

$id = $_POST['id'];
$jadwal = $_POST['jadwalkosong'];
$timeawal = $_POST['timeawal'];
$timeakhir = $_POST['timeakhir'];

$sql = "UPDATE dokter SET hari_kosong='$jadwal', jam_mulai='$timeawal', jam_selesai='$timeakhir' WHERE id='$id'";

if (mysqli_query($koneksi, $sql)) {
  	echo "<script> 
	            alert('Berhasil mengatur jadwal!');
	            document.location.href = '../dokter.php';
	        </script>
	    ";
} else {
  echo "Error updating record: " . $koneksi->error;
}

 ?>