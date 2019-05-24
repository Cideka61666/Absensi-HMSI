<!DOCTYPE html>
<html lang="en">
<?php
$koneksi = new mysqli("localhost","root","","tubes_alpro3")
?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Absensi HMSI</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="assets/css/freelancer.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Absensi HMSI</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#home">Home</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#departemen">Departemen</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logiin.php">Login</a>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center" id="home">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
      <h1 class="text-uppercase">Himpunan Mahasiswa Sistem Informasi</h1>
      <hr class="star-light">
      <h1 class="font-weight-light mb-0">KONEKSI</h1>
      <h2 class="font-weight-light mb-0">KORDINASI | EKSPLORASI | KOLABORASI</h2>
    </div>
  </header>

  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="departemen">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Departemen</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/bph.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/dagri.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/hublu.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/kwu.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/bso.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/psdm.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-7">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/ristek.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-8">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/sosmas.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-9">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/medfo.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">About</h2>
      <hr class="star-light mb-5">
      <div class="row text-justify">
        <div class="col-lg-4 ml-auto">
          <p class="lead">HMSI singkatan dari Himpunan Mahasiswa Sistem Informasi. HMSI merupakan organisasi di salah satu perguruan tinggi yang ada di Kota Balikpapan, yaitu Institut Teknologi Kalimantan atau yang biasa di sebut ITK. HMSI mewadahi mahasiswa program studi Sistem Informasi yang ada di ITK.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Absensi HMSI digunakan fungsionaris HMSI ITK untuk memudahkan memonitoring keaktifan setiap fungsionarisnya dalam menghadiri rapat rutin guna berjalannya HMSI yang lebih baik.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-06">Institut Teknologi Kalimantan
            <br>Balikpapan, Kalimantan Timur, 76127</p>
        </div>
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.youtube.com/channel/UCMsPJUusJn39I8R7Eny_b5g">
                <i class="fab fa-fw fa-youtube"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.instagram.com/hmsi_itk/?hl=en">
                <i class="fab fa-fw fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4 class="text-uppercase mb-4">About US</h4>
          <p class="lead mb-0">Absensi HMSI merupakan tugas besar mata kuliah Algoritma dan Pemrograman III.</a></p>
        </div>
      </div>
    </div>
  </footer>

  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; CIDEKA 2019</small>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Badan Pengurus Harian</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/bph.png" alt="">
            <p class="mb-5">Pengurus harian dari organisasi HMSI yang berfungsi untuk menjalankan program kerja yang telah ditetapkan. Badan Pengurus Harian (BPH) HMSI terdiri dari Ketua Himpunan, Wakil Ketua Himpunan, Sekertaris Himpunan dan Bendahara Himpunan.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal" href="bph.php">DATA KEHADIRAN RAPAT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Dalam Negeri</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/dagri.png" alt="">
            <p class="mb-5">Departemen yang bergerak pada peningkatan kualitas hubungan internal warga Sistem Informasi serta sebagai wadah untuk pengembangan minat bakat guna mewujudkan HMSI yang koordinatif dan selaras..</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal" href="dagri.php">DATA KEHADIRAN RAPAT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Hubungan Luar</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/hublu.png" alt="">
            <p class="mb-5"> Departemen yang berperan sebagai penjalin koordinasi yang optimal dengan berbagai pihak eksternal HMSI, serta inisiator penumbuhan atmosfer internasionalisasi guna mempersiapkan mahasiswa Sistem Informasi di kancah internasional serta meningkatkan citra positif HMSI.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal" href="hublu.php">DATA KEHADIRAN RAPAT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Kewirausahaan</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/kwu.png" alt="">
            <p class="mb-5">Departemen yang berfokus pada bidang pelatihan manajemen bisnis serta fundrising dalam rangka menumbuhkan jiwa kewirausahaan mahasiswa Sistem Informasi yang implementatif.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal" href="kwu.php">DATA KEHADIRAN RAPAT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Minat Bakat</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/bso.png" alt="">
            <p class="mb-5">Departemen yang mewadahi mahasiswa Sistem Informasi dalam mengembangkan minta dan bakat.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal" href="bsomb.php">DATA KEHADIRAN RAPAT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Portfolio Modal 6 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Pengembangan Sumber Daya Mahasiswa</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/psdm.png" alt="">
            <p class="mb-5">Departemen yang bergerak dalam pengembangan mahasiswa di Sistem Informasi, baik mahasiswa tahun pertama hingga mahasiswa tahun terakhir. Dan juga mengarahkan mahasiswa Sistem Informasi sesuai dengan pembidangannya menurut HDPSDM terciptanya kader - kader penerus HMSI yang dapat membawa HMSI ke arah yang lebih baik.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal" href="psdm.php">DATA KEHADIRAN RAPAT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 7 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-7">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Riset dan Teknologi</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/ristek.png" alt="">
            <p class="mb-5">departemen yang berperan sebagai fasilitator dan mediator di bidang keilmiahan, keprofesian, serta akademik demi mewujudkan HMSI yang berprestasi. Serta penciptaan dan peningkatan atmosfer kompetitif dan semangat berkarya mahasiswa Sistem Informasi.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal" href="ristek.php">DATA KEHADIRAN RAPAT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Portfolio Modal 8 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-8">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Sosial Masyarakat</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/sosmas.png" alt="">
            <p class="mb-5">Departemen yang bergerak dalam bidang sosial masyarakat. Dengan tujuan; meningkatkan kepekaan sosial dari Mahasiswa Sistem Informasi dalam rangka mewujudkan pengabdian masyarakat yang sesuai dengan ranah keprofesian Sistem Informasi.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal" href="sosmas.php">DATA KEHADIRAN RAPAT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 9 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-9">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Media Informasi</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="img/portfolio/medfo.png" alt="">
            <p class="mb-5">Departemen yang berperan sebagai fasiliator dan mediator di bidang informasi. Departemen ini yang mengurus segala keperluan penyebaran informasi dari HMSI dan mengaur sosial medai HMSI</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal" href="medfo.php">DATA KEHADIRAN RAPAT</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
