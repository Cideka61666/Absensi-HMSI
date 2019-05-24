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
<h2>Tambah Kehadiran</h2>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
              
  
    <form action="tambah_datar.php" method="post">
    <div class="cd-content-wrapper">
      <?php 
	  if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Form Pendaftaran Berhasil Dikirim</div>";
		}
	}
	?>
        <div class="form-group"
        <label for="no">No</label>
        <input type="KTP" class="form-control" name="No" placeholder="Masukkan Nomor">
      </div>
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="nama" class="form-control" name="Nama" placeholder="">
      </div>
  
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="tempatlahir" class="form-control" name="Jabatan" placeholder="">
      </div>
        <div class="form-group">
        <label for="kehadiran">Kehadiran</label>
        <input type="tanggallahir" class="form-control" name="Kehadiran" placeholder="Y/N">
      </div>

      <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <input type="nomortelepon" class="form-control" name="Keterangan" placeholder="">
      </div>
        <button type="submit" class="btn btn-secondary" name="submit">Simpan</button>
      </form>
      </div>
    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

