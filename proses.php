<?php 
include 'database_tubes_alpro3.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "hapus"){ 	
 	$db->hapus($_GET['No']);
	header("location:kehadiran.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['No'],$_POST['Nama'],$_POST['Jabatan'],$_POST['Kehadiran'],$_POST['Keterangan']);
 	header("location:kehadiran.php");
 }
?>