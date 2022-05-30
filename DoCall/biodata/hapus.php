<?php
include 'koneksi.php';
if (isset($_get['id'])) {
	$dbh->exec("delete from biodata where id = '$_get[id]'");
}
header("location:index.php")
?>