<?php

    include 'koneksi.php';
   
    $No = $_POST['No'];
    $Nama = $_POST['Nama'];
    $Jabatan = $_POST['Jabatan'];
    $Kehadiran = $_POST['Kehadiran'];
    $Keterangan = $_POST['Keterangan'];
    
    
    if ($add = mysqli_query($koneksi, "INSERT INTO psdm (No, Nama, Jabatan, Kehadiran, Keterangan) 
      VALUES ('$No','$Nama','$Jabatan','$Kehadiran','$Keterangan')")){
      header("Location: index.php?halaman=kehadiran,pesan=gagal");
      exit();
    }
    die("Terdapat Kesalahan : ". mysqli_error($koneksi));
    ?>