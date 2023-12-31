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

      <!-- ======= Facts Section ======= -->
      <section id="gd" class="gd">
        <div class="container">
          <div class="section-title">
            <h2>Facts</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
              consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
              sit in iste officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="row no-gutters">
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="232"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p><strong>Happy Clients</strong> consequuntur quae</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="count-box">
                <i class="bi bi-journal-richtext"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="521"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p><strong>Projects</strong> adipisci atque cum quia aut</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="count-box">
                <i class="bi bi-headset"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="1453"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="32"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Facts Section -->


      <!-- ======= Resume Section ======= -->
      <section id="resume" class="resume">
        <div class="container">
          <div class="section-title">
            <h2>Resume</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
              consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
              sit in iste officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">Sumary</h3>
              <div class="resume-item pb-0">
                <h4>Alex Smith</h4>
                <p>
                  <em
                    >Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and
                    developing user-centered digital/print marketing material from initial concept to final, polished
                    deliverable.</em
                  >
                </p>
                <ul>
                  <li>Portland par 127,Orlando, FL</li>
                  <li>(123) 456-7891</li>
                  <li>alice.barkley@example.com</li>
                </ul>
              </div>

              <h3 class="resume-title">Education</h3>
              <div class="resume-item">
                <h4>Master of Fine Arts &amp; Graphic Design</h4>
                <h5>2015 - 2016</h5>
                <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                <p>
                  Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum
                  qui ut dignissimos deleniti nerada porti sand markend
                </p>
              </div>
              <div class="resume-item">
                <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                <h5>2010 - 2014</h5>
                <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                <p>
                  Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius
                  unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart
                  dila
                </p>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Professional Experience</h3>
              <div class="resume-item">
                <h4>Senior graphic design specialist</h4>
                <h5>2019 - Present</h5>
                <p><em>Experion, New York, NY </em></p>
                <ul>
                  <li>
                    Lead in the design, development, and implementation of the graphic, layout, and production
                    communication materials
                  </li>
                  <li>
                    Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the
                    project.
                  </li>
                  <li>
                    Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the
                    design
                  </li>
                  <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                </ul>
              </div>
              <div class="resume-item">
                <h4>Graphic design specialist</h4>
                <h5>2017 - 2018</h5>
                <p><em>Stepping Stone Advertising, New York, NY</em></p>
                <ul>
                  <li>
                    Developed numerous marketing programs (logos, brochures,infographics, presentations, and
                    advertisements).
                  </li>
                  <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                  <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                  <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Resume Section -->


      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Services</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
              consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
              sit in iste officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">
                Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                non provident
              </p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">
                Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad
                limino ata
              </p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum
              </p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque
              </p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">
                Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                eligendi
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>iPortfolio</span></strong>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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
