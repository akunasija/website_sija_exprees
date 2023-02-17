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



  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <br <h2>Toko</h2>
        <p> Sija <span> Express </span></p>
      </div>


      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <?php
        $no = 1;
        foreach ($toko as $tk) {
        ?>
          <li class="nav-item">
            <a class="nav-link <?php if ($no == 1) {
                                  echo "active show";
                                } ?>" data-bs-toggle="tab" data-bs-target="#menu-<?= $tk->id_toko ?>">
              <h4><?= $tk->nama_toko; ?></h4>
            </a>
          </li><!-- End tab nav item -->
        <?php
          $no++;
        } ?>

        <!--li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#toko2">
            <h4>Toko 2</h4>
          </a><!-- End tab nav item -->

      </ul>
      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <?php
        $no = 1;
        foreach ($toko as $tk) {
          $menu = $this->Menu_model->tampilmenutoko($tk->id_toko);

        ?>


          <div class="tab-pane fade <?php if ($no == 1) {
                                      echo "active show";
                                    } ?>" id="menu-<?= $tk->id_toko ?>">

            <div class="tab-header text-center">
              <p>Toko</p>
              <h3><?= $tk->nama_toko; ?></h3>
            </div>

            <div class="row gy-5">
              <?php
              foreach ($menu as $mn) {
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/mie bakso.jpg" class="glightbox"><img src="assets/img/menu/<?= $mn->gambar_menu; ?>" class="menu-img img-fluid" alt=""></a>
                  <h4><?= $mn->nama_menu; ?></h4>
                  <p class="ingredients">
                  <?= $mn->deskripsi_menu; ?>
                  </p>
                  <p class="price">
                  Rp. <?= number_format($mn->harga_menu, 0); ?>
                    <br>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $mn->kode_menu; ?>">
                      Tambah
                    </button>

                    <!-- Modal -->
                  <div class="modal fade" id="exampleModal<?= $mn->kode_menu; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Halaman pembelian</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <a href="assets/img/menu/mie bakso.jpg" class="glightbox"><img src="assets/img/menu/<?= $mn->gambar_menu; ?>" class="menu-img img-fluid" alt=""></a>
                          <h4><?= $mn->nama_menu; ?></h4>
                          <p class="ingredients">
                          <?= $mn->deskripsi_menu; ?>
                          </p>
                          <p class="price">
                          Rp. <?= number_format($mn->harga_menu, 0); ?>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Pesan:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                          <input type="number" value="1" min="0" max="10" step="1" />
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batalkan pesanan</button>
                          <button type="button" class="btn btn-primary">pesan</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div><!-- Menu Item -->
              <?php } ?>
            </div>
          </div><!-- End Dinner Menu Content -->

        <?php
          $no++;
        }
        ?>
      </div>


    </div>
  </section><!-- End Menu Section -->
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