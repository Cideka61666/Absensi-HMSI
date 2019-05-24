<!doctype html>
<html lang="en">
<head>
<?php
$koneksi = new mysqli("localhost","root","","tubes_alpro3")
?>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABSENSI HMSI</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<h1>UBAH DATA</h1>
<?php 
include "koneksi.php";

$ambil = $koneksi->query("SELECT * FROM bph WHERE No='$_GET[No]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>


<form method="post">
<div class="form-group">
<label>No</label>
<input type="text" name="No" class="form-control" value="<?php echo $pecah['No'];?>">
</div>
<div class="form-group">
<label>Nama</label>
<input type="text" name="Nama" class="form-control" value="<?php echo $pecah['Nama'];?>">
</div>
<div class="form-group">
<label>Jabatan</label>
<input type="text" name="Jabatan" class="form-control" value="<?php echo $pecah['Jabatan'];?>">
</div>
<div class="form-group">
<label>Kehadiran</label>
<input type="text" name="Kehadiran" class="form-control" value="<?php echo $pecah['Kehadiran'];?>">
</div>
<div class="form-group">
<label>Keterangan</label>
<input type="text" name="Keterangan" class="form-control" value="<?php echo $pecah['Keterangan'];?>">
</div>
<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php
if (isset($_POST['edit']))
{
	$koneksi->query("UPDATE bph SET No='$_POST[No]',
	Nama='$_POST[Nama]', Jabatan='$_POST[Jabatan]',
	Kehadiran='$_POST[Kehadiran]', Keterangan='$_POST[Keterangan]'
	WHERE No='$_GET[No]'");

	echo "<script>alert('data telah diubah');</script>";
	echo "<script>location='index.php?halaman=kehadiran';</script>";
}
?>
</html>