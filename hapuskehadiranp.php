<?php
include "koneksi.php";
$ambil = $koneksi->query("SELECT * FROM bph WHERE No='$_GET[No]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM psdm WHERE No='$_GET[No]'");

echo "<script>alert('data terhapus');</script>";
echo "<script>location='index.php?halaman=kehadiran';</script>";
?>