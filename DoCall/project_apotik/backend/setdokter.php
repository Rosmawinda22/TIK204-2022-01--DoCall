<?php 
session_start();
$id = $_GET['id'];
$_SESSION['data'] = 'berhasil';
$_SESSION['id'] = $id;
header("location:../dokter.php");

?>