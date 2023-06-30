<?php include('conf/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: iPortfolio - v3.9.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="d-flex flex-column">
        <div class="profile">
          <h1 class="text-light"><a href="index.html">Gochar</a></h1>
          

        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li>
              <a href="#user" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>User</span></a>
            </li>
            <li>
              <a href="#gd" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Galang Donasi</span></a>
            </li> 
            <li>
              <a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Misi</span></a>
            </li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
   
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="user" class="user">
        <div class="container">
          <div class="section-title">
           
            <div class="card">
              <div class="card-body">
              <?php include('conf/koneksi.php'); ?>
                <?php
                $query=mysqli_query($koneksi,"SELECT * FROM user")?>
  
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <th scope="col">Username</th>
                  <th scope="col">NIM</th>
                  <th scope="col">no HP</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Foto</th>
                </tr>
              </thead>
              <?php
              $no=1;
              while($r=mysqli_fetch_array($query)) {
                echo"<tr><td>$no</td>
                        <td>$r[email]</td>
                        <td>$r[password]</td>
                        <td>$r[username]</td>
                        <td>$r[NIM]</td>
                        <td>$r[noHp]</td>
                        <td>$r[pekerjaan]</td>
                        <td>$r[foto]</td>";
              $no++;
              }?>
            </table>
  
              </div>
            </div>


            </div>
          </div>
      </section>
      <!-- End About Section -->

      <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>