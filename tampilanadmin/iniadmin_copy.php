<?php include('conf/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Admin Page | GoCHAR</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon" />
    <link href="assets/img/icon.png" rel="apple-touch-icon" />

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
          <br></br>
          <h1 class="text-light"><a href="../- Fajar/login.html">Gochar</a></h1>
          <p class="text-light text-center">Admin</p>
          

        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li>
              <a href="#user" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>User</span></a>
            </li>
            <li>
              <a href="#data" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Chart</span></a>
            </li>
            <li>
              <a href="#gd" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Galang Donasi</span></a>
            </li> 
            <li>
              <a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Misi</span></a>
            </li>
            <li>
              <a href="../- Fajar/login.html" class="nav-link scrollto"><i class="bi bi-box-arrow-right"></i> <span>Logout</span></a>
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
      <!-- ======= Data User ======= -->
      <section id="user" class="user">
        <div class="container">
          <div class="section-title">
            <h2>Data User</h2>
          </div>
          <div class=" align-items-md-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-body">
              <?php include('conf/koneksi.php'); ?>
                <?php
                $query=mysqli_query($koneksi,"SELECT * FROM user")?>
  
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <th scope="col">Username</th>
                  <th scope="col">NIK</th>
                  <th scope="col">no HP</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <?php
              $no=1;
              while($r=mysqli_fetch_array($query)) {
                $email= $r['email'];
                echo"<tr><td>$no</td>
                        <td>$email</td>";

                echo"   <td>$r[password]</td>
                        <td>$r[username]</td>
                        <td>$r[NIK]</td>
                        <td>$r[noHp]</td>
                        <td>$r[pekerjaan]</td>
                        <td>$r[foto]</td>
                        <td>
                        ";
                        $no++;
                        ?><a href="hapususer.php?email=<?php echo $email; ?>" onClick="return confirm('Anda yakin akan mengapus data ini?');">Hapus</a></td></tr>
                      <?php
                      }?>
              </table>
  
              </div>
            </div>
            </div>
          </div>
      </section>
      <!-- End Data User -->

      <main id="main">
    <!-- ======= About Section ======= -->
    <section id="data" class="data">
      <div class="container">
      <div class="section-title">
            <h2>Chart</h2>
          </div>
        <div class="section-title">
          <div class="card">
            <div class="card-body">
              <?php
              include('conf/koneksi.php');
      //Ambil data kategori dari tabel galang_donasi
              $query = mysqli_query($koneksi, "SELECT kategori FROM galang_donasi");

              // Buat array untuk menyimpan jumlah kategori
              $kategoriCount = array();

              // Menghitung jumlah kategori
              while ($row = mysqli_fetch_assoc($query)) {
                $kategori = $row['kategori'];
                if (array_key_exists($kategori, $kategoriCount)) {
                  $kategoriCount[$kategori]++;
                } else {
                  $kategoriCount[$kategori] = 1;
                }
              }

              // Menghasilkan data dalam format yang sesuai untuk visualisasi
              $labels = array_keys($kategoriCount);
              $data = array_values($kategoriCount);
              ?>

              <!-- Tampilkan grafik menggunakan Chart.js -->
              <canvas id="myChart"></canvas>
            </div>
          </div>
        </div>
      </div>

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

    <!-- Script untuk membuat grafik menggunakan Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      var labels = <?php echo json_encode($labels); ?>;
      var data = <?php echo json_encode($data); ?>;

      // Membuat grafik batang menggunakan Chart.js
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: labels,
          datasets: [{
            label: 'Jumlah',
            data: data,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true,
              stepSize: 1
            }
          }
        }
      });
    </script>

      <!-- Nampilin Chart -->

        <div class="container">


          <div class="row no-gutters">
            <div class=" align-items-md-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-body">
            <canvas id="barChart"></canvas>
            <?php
            // Mengambil data dari tabel pembayaran
            $sql = "SELECT bank, gopay, ovo, dana, qris FROM pembayaran";
            $result = $koneksi->query($sql);

            // Memeriksa hasil query
            if ($result->num_rows > 0) {
                // Mendapatkan baris data
                $row = $result->fetch_assoc();

                // Menyimpan data dalam variabel
                $data_bank = $row['bank'];
                $data_gopay = $row['gopay'];
                $data_ovo = $row['ovo'];
                $data_dana = $row['dana'];
                $data_qris = $row['qris'];
            } else {
                echo "Tidak ada data yang ditemukan.";
            }

            // Menutup koneksi ke database
            $koneksi->close();
            ?>
          <script>
            // Ambil data dari SQL dan simpan dalam variabel
            var bank = <?php echo $data_bank; ?>;
            var gopay = <?php echo $data_gopay; ?>;
            var ovo = <?php echo $data_ovo; ?>;
            var dana = <?php echo $data_dana; ?>;
            var qris = <?php echo $data_qris; ?>;

            // Inisialisasi data yang akan digunakan di grafik
            var data = {
              labels: ['Bank', 'Gopay', 'OVO', 'Dana', 'QRIS'],
              datasets: [{
                label: 'Jumlah Pembayaran',
                data: [bank, gopay, ovo, dana, qris],
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna latar belakang batang
                borderColor: 'rgba(75, 192, 192, 1)', // Warna batas batang
                borderWidth: 1 // Lebar batas batang
              }]
            };

            // Konfigurasi grafik
            var options = {
              plugins: {
                title: {
                  display: true,
                  text: 'Data metode pembayaran yang paling sering digunakan'
                }
              },
              scales: {
                y: {
                  beginAtZero: true // Mulai sumbu y dari 0
                }
              }
            };

            // Membuat grafik batang menggunakan Chart.js
            var ctx = document.getElementById('barChart').getContext('2d');
            var barChart = new Chart(ctx, {
              type: 'bar',
              data: data,
              options: options
            });
          </script>
          </div>
         </div>
          </div>
            <!-- </div> -->

      <!-- End nampilin Chart -->
      <!-- ======= Galang Donasi ======= -->
      <section id="gd" class="gd">
        <div class="container">
          <div class="section-title">
            <h2>Data Galang Donasi</h2>
          </div>

          <div class="row no-gutters">
            <div class=" align-items-md-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-body">
              <?php include('conf/koneksi.php'); ?>
                <?php
                $query=mysqli_query($koneksi,"SELECT * FROM galang_donasi")?>
  
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID</th>
                  <th scope="col">Email</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Cerita</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Target Donasi</th>
                  <th scope="col">Durasi Donasi</th>
                  <th scope="col">Rincian</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <?php
              $no=1;
              while($r=mysqli_fetch_array($query)) {
                $id_gd= $r['id_gd'];
                echo"<tr><td>$no</td>
                        <td>$id_gd</td>";

                echo"<td>$r[email]</td>
                        <td>$r[kategori]</td>
                        <td>$r[judul]</td>
                        <td>$r[cerita]</td>
                        <td>$r[foto]</td>
                        <td>$r[target_donasi]</td>
                        <td>$r[durasi]</td>
                        <td>$r[rincian]</td>
                        <td>
                        ";       
              $no++;
              ?><a href="hapusgd.php?id_gd=<?php echo $id_gd; ?>" onClick="return confirm('Anda yakin akan mengapus data ini?');">Hapus</a></td></tr>
            <?php
            }?>
          </table>
          </div>
         </div>
          </div>
            <!-- </div> -->
      </section>
      <!-- End GalangDonasi -->


      <!-- ======= MISI ======= -->
      <section id="resume" class="resume">
        <div class="container">
          <div class="section-title">
            <h2>Misi</h2>
          </div>
          <div class=" align-items-md-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-body">
              <?php include('conf/koneksi.php'); ?>
                <?php
                $query=mysqli_query($koneksi,"SELECT * FROM misi")?>
  
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Id_Misi</th>
                  <th scope="col">judul</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Point</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <?php
              $no=1;
              while($r=mysqli_fetch_array($query)) {
                $id_misi= $r['id_misi'];
                echo"<tr><td>$no</td>
                        <td>$id_misi</td>";

                echo"   <td>$r[judul]</td>
                        <td>$r[deskripsi]</td>
                        <td>$r[poin]</td>
                        <td>
                        <td><a href='ubahmisi.php?id_misi=$id_misi'>Edit</a> | 
                        ";
                        $no++;
                        ?><a href="hapusmisi.php?id_misi=<?php echo $id_misi; ?>" onClick="return confirm('Anda yakin akan mengapus data ini?');">Hapus</a></td></tr>
                      <?php
                      }?>
              </table>
  
              </div>
            </div>
            </div>
          </div>
      </section>
      <!-- End Misi-->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
         <strong><span>Make Your Good!</span></strong>
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