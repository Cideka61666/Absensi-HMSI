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
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexx.php">Absensi HMSI</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="indexx.php" class="btn btn-primary square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>	
                    <li><a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-dashboard fa-3x"></i> Departemen</a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="bph.php">BPH</a><br>
                        <a class="dropdown-item" href="bsomb.php">BSOMB</a><br>
                        <a class="dropdown-item" href="dagri.php">DAGRI</a><br>
                        <a class="dropdown-item" href="hublu.php">HUBLU</a><br>
                        <a class="dropdown-item" href="kwu.php">KWU</a><br>
                        <a class="dropdown-item" href="medfo.php">MEDFO</a><br>
                        <a class="dropdown-item" href="psdm.php">PSDM</a><br>
                        <a class="dropdown-item" href="ristek.php">RISTEK</a><br>
                        <a class="dropdown-item" href="sosmas.php">SOSMAS</a>
                        </div>
                        </li>
                    <li><a href="index.php?halaman=kehadiran"><i class="fa fa-dashboard fa-3x"></i> Kehadiran</a></li>
                    <li><a href="indexx.php"><i class="fa fa-dashboard fa-3x"></i> Logout</a></li>
                     	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="departemen")
                    {
                        include 'departemen.php';
                    }
                    elseif ($_GET['halaman']=="kehadiran")
                    {
                        include 'kehadiran.php';
                    }
                    elseif ($_GET['halaman']=="tambahkehadiran")
                    {
                        include 'tambahkehadiran.php';
                    }
                    elseif ($_GET['halaman']=="tambahkehadirand")
                    {
                        include 'tambahkehadirand.php';
                    }
                    elseif ($_GET['halaman']=="tambahkehadiranh")
                    {
                        include 'tambahkehadiranh.php';
                    }
                    elseif ($_GET['halaman']=="tambahkehadirank")
                    {
                        include 'tambahkehadirank.php';
                    }
                    elseif ($_GET['halaman']=="tambahkehadiranm")
                    {
                        include 'tambahkehadiranm.php';
                    }
                    elseif ($_GET['halaman']=="tambahkehadiranmb")
                    {
                        include 'tambahkehadiranmb.php';
                    }
                    elseif ($_GET['halaman']=="tambahkehadiranp")
                    {
                        include 'tambahkehadiranp.php';
                    }
                    elseif ($_GET['halaman']=="tambahkehadiranr")
                    {
                        include 'tambahkehadiranr.php';
                    }
                    elseif ($_GET['halaman']=="tambahkehadirans")
                    {
                        include 'tambahkehadirans.php';
                    }
                    elseif ($_GET['halaman']=="hapuskehadiran")
                    {
                        include 'hapuskehadiran.php';
                    }
                    elseif ($_GET['halaman']=="tambah_data")
                    {
                        include 'tambah_data.php';
                    }
                    elseif ($_GET['halaman']=="tambah_datad")
                    {
                        include 'tambah_datad.php';
                    }
                    elseif ($_GET['halaman']=="tambah_datah")
                    {
                        include 'tambah_datah.php';
                    }
                    elseif ($_GET['halaman']=="tambah_datak")
                    {
                        include 'tambah_datak.php';
                    }
                    elseif ($_GET['halaman']=="tambah_datam")
                    {
                        include 'tambah_datam.php';
                    }
                    elseif ($_GET['halaman']=="tambah_datamb")
                    {
                        include 'tambah_datamb.php';
                    }
                    elseif ($_GET['halaman']=="tambah_datap")
                    {
                        include 'tambah_datap.php';
                    }
                    elseif ($_GET['halaman']=="tambah_datar")
                    {
                        include 'tambah_datar.php';
                    }
                    elseif ($_GET['halaman']=="tambah_datas")
                    {
                        include 'tambah_datas.php';
                    }
                    elseif ($_GET['halaman']=="tambah_datas")
                    {
                        include 'tambah_datas.php';
                    }
                    elseif ($_GET['halaman']=="edit")
                    {
                        include 'edit.php';
                    }
                    elseif ($_GET['halaman']=="hapuskehadirand")
                    {
                        include 'hapuskehadirand.php';
                    }
                    elseif ($_GET['halaman']=="hapuskehadiranhl")
                    {
                        include 'hapuskehadiranhl.php';
                    }
                    elseif ($_GET['halaman']=="hapuskehadirank")
                    {
                        include 'hapuskehadiranhl.php';
                    }elseif ($_GET['halaman']=="hapuskehadiranm")
                    {
                        include 'hapuskehadiranm.php';
                    }
                    elseif ($_GET['halaman']=="hapuskehadiranmb")
                    {
                        include 'hapuskehadiranmb.php';
                    }
                    elseif ($_GET['halaman']=="hapuskehadiranp")
                    {
                        include 'hapuskehadiranp.php';
                    }
                    elseif ($_GET['halaman']=="hapuskehadiranr")
                    {
                        include 'hapuskehadiranr.php';
                    }
                    elseif ($_GET['halaman']=="hapuskehadirans")
                    {
                        include 'hapuskehadirans.php';
                    }
                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>       
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
