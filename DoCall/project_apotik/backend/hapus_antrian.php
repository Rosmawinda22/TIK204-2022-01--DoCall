<?php 
include "koneksi.php";
$id = $_POST['id'];

$sql = "DELETE FROM antrian WHERE id_user=$id";

if(mysqli_query($koneksi, $sql)){
	  	echo "<script> 
	            alert('Berhasil menghapus antrian!');
	            document.location.href = '../user.php';
	        </script>
	    ";
} else {
	  	// echo "<script> 
	   //          alert('Gagal menghapus antrian!');
	   //          document.location.href = '../user.php';
	   //      </script>
	   //  ";
}


 ?>