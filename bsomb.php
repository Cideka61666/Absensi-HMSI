<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
<h4>-Badan Semi Otonom Minat Bakat-</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Kehadiran</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $ambil=$koneksi->query("SELECT * FROM minat_bakat");?>
        <?php while($pecah=$ambil->fetch_assoc()){?>
        <tr>
            <td><?php echo $pecah['No'];?></td>
            <td><?php echo $pecah['Nama'];?></td>
            <td><?php echo $pecah['Jabatan'];?></td>
            <td><?php echo $pecah['Kehadiran'];?></td>
            <td><?php echo $pecah['Keterangan'];?></td>
            <td>
            <a href="hapuskehadiran.php?hapuskehadiran&No=<?php echo $pecah['No']?>"
            class="btn btn-danger">Hapus</a>
            <a href="edit.php?halaman=ubahkehadiran&No=<?php echo $pecah['No']?>"
            class="btn btn-warning">Ubah</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>