<?php 
$koneksi = mysqli_connect("localhost","root","","tubes_alpro3");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>