<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pesanan Saya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.3.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
      </div>
      <div class="section-header">
        <h2>SIJA Express</h2>
        <p>Pesanan<span>saya</span></p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#semua-pesanan">
            <h4>Semua</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
            <h4>Proses</h4>
          </a><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
            <h4>Selesai</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul>


      <div class="tab-content why-us" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="semua-pesanan">

          <div class="tab-header text-center">
            <p>Pesanan Saya</p>
            <h3>Semua</h3>
          </div>

          <div class="row gy-5">

            <?php foreach ($pesanan as $pn) { ?>
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                  <h6><b>#Belanja #PQ9898989<?= $pn->kode_transaksi; ?></b></h6>
                  <p align="right"><?= $pn->tanggal_transaksi; ?></p>
                  <hr>
                  <table width="100%">
                    <thead>
                      <tr>
                        <td>Status Pesanan:</td>
                        <td align="right"><?= $pn->status_pemesanan; ?></td>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Status Pembayaran:</td>
                        <td align="right"><?= $pn->status_pembayaran; ?></td>
                      </tr>
                      <tr>
                        <td>Total Harga:</td>
                        <td align="right"><?= $pn->total_harga; ?></td>
                      </tr>
                      <tr>
                        <td>Jumlah Barang:</td>
                        <td align="right"><?= $pn->jumlah_menu; ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <td>Toko:</td>
                        <td align="right">Toko Cina (+3 Toko Lainnya)</td>
                    </thead>
                  </table>
                  <div class="text-center">
                    <a href="detail_belanja" class="more-btn">Lihat Detail<i class="bx bx-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            <?php } ?>
            <!-- End Why Box -->

            <!--div class="col-lg-8 d-flex align-items-center">
              <div class="row gy-4">

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-inboxes"></i>
                    <h4> <b>#Belanja #767676890<?= $pn->kode_transaksi; ?></b></h4>
                    <p><?= $pn->tanggal_transaksi; ?></p>
                    <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Lihat Detail</a>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>

          </div>
        </div><!-- End Starter Menu Content -->


        <div class="tab-pane fade" id="menu-breakfast">

          <div class="tab-header text-center">
            <p>Pesanan Saya</p>
            <h3>Belum Dibayar</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="why-box">
                <h6><b>#Belanja #PQ98989891</b></h6>
                <p align="right">(18 Januari 2023)</p>
                <hr>
                <table width="100%">
                  <thead>
                    <tr>
                      <td>Status Pesanan:</td>
                      <td align="right">Diproses</td>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Status Pembayaran:</td>
                      <td align="right">Belum Dibayar</td>
                    </tr>
                    <tr>
                      <td>Total Harga:</td>
                      <td align="right">18.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Barang:</td>
                      <td align="right">3</td>
                    </tr>
                  </tbody>
                  <thead>
                    <tr>
                      <td>Toko:</td>
                      <td align="right">Toko Cina (+3 Toko Lainnya)</td>
                  </thead>
                </table>
                <div class="text-center">
                  <a href="detail_belanja.html" class="more-btn">Lihat Detail<i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div><!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-center">
              <div class="row gy-4">

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4><b>#Belanja #39191929308</b></h4>
                    <p>19 Januari 2023</p>
                    <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Lihat Detail</a>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-gem"></i>
                    <h4><b>#Belanja #8787878654</b></h4>
                    <p>4 Januari 2023</p>
                    <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Lihat Detail</a>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-inboxes"></i>
                    <h4> <b>#Belanja #7676768909</b></h4>
                    <p>19 Desember 2022</p>
                    <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Lihat Detail</a>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>

          </div>
        </div>

        <div class="tab-pane fade" id="menu-dinner">

          <div class="tab-header text-center">
            <p>Pesanan Saya</p>
            <h3>Selesai</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="why-box">
                <h6><b>#Belanja #PQ98989891</b></h6>
                <p align="right">(18 Januari 2023)</p>
                <hr>
                <table width="100%">
                  <thead>
                    <tr>
                      <td>Status Pesanan:</td>
                      <td align="right">Selesai</td>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Status Pembayaran:</td>
                      <td align="right">Dibayar</td>
                    </tr>
                    <tr>
                      <td>Total Harga:</td>
                      <td align="right">18.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Barang:</td>
                      <td align="right">3</td>
                    </tr>
                  </tbody>
                  <thead>
                    <tr>
                      <td>Toko:</td>
                      <td align="right">Toko Cina (+3 Toko Lainnya)</td>
                  </thead>
                </table>
                <div class="text-center">
                  <a href="detail_belanja.html" class="more-btn">Lihat Detail<i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div><!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-center">
              <div class="row gy-4">

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4><b>#Belanja #39191929308</b></h4>
                    <p>19 Januari 2023</p>
                    <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Lihat Detail</a>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-gem"></i>
                    <h4><b>#Belanja #8787878654</b></h4>
                    <p>4 Januari 2023</p>
                    <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Lihat Detail</a>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-inboxes"></i>
                    <h4> <b>#Belanja #7676768909</b></h4>
                    <p>19 Desember 2022</p>
                    <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Lihat Detail</a>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section><!-- End Menu Section -->

  <!-- ======= Why Us Section ======= -->
  <!--section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">
        <br>
        <div class="section-header">
          <h2>SIJA Express</h2>
          <p>pesanan<span>saya</span></p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
            <h6><b>#Belanja #PQ98989891</b></h6>
            <p align="right">(18 Januari 2023)</p>
            <hr>
            <table width="100%">
              <thead>
                <tr>
                  <td>Status Pesanan:</td>
                  <td align="right">Siap Diambil</td>
              </thead>
              <tbody>
                <tr>
                  <td>Status Pembayaran:</td>
                  <td align="right">Dibayar</td>
                </tr>
                <tr>
                  <td>Total Harga:</td>
                  <td align="right">18.000</td>
                </tr>
                <tr>
                  <td>Jumlah Barang:</td>
                  <td align="right">3</td>
                </tr>
              </tbody>
              <thead>
                <tr>
                  <td>Toko:</td>
                  <td align="right">Toko Cina (+3 Toko Lainnya)</td>
                </thead>
              </table>
              <div class="text-center">
                <a href="detail_belanja.html" class="more-btn">Lihat Detail<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

  <!--div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4><b>#Belanja #39191929308</b></h4>
                  <p>19 Januari 2023</p>
                  <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Lihat Detail</a>
                </div>
              </div><!-- End Icon Box -->

  <!--div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4><b>#Belanja #8787878654</b></h4>
                  <p>4 Januari 2023</p>
                  <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Lihat Detail</a>
                </div>
              </!--div><!-- End Icon Box -->

  <!--div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4> <b>#Belanja #7676768909</b></h4>
                  <p>19 Desember 2022</p>
                  <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Lihat Detail</a>
                </div>
              </!--div><!-- End Icon Box -->

  </div>
  </!--div>

  </div>

  </div>
  </section><!-- End Why Us Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!--footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Lokasi</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
  <!-- You can delete the links only if you purchased the pro version. -->
  <!-- Licensing information: https://bootstrapmade.com/license/ -->
  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
  <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>