<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>makanan</title>
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
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style type="text/css">
    #btn-back-to-top {
      position: fixed;
      bottom: 20px;
      left: 45.4%;
      border-radius: 15px;
    }
  </style>

 
</head>

<body>

  
    <!-- ======= Menu Section ======= -->
    <section id="makanan" class="makanan">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
        </div>
        <div class="section-header">
          <h2>Makanan</h2>
          <p>  SIJA  <span>  EXPREES  </span></p>
        </div>

       

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

           
            <div class="row gy-5">

            <?php foreach ($makanan as $mak) { ?>

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/mie bakso.jpg" class="glightbox"><img src="assets/img/menu/<?= $mak->gambar_menu; ?>" class="menu-img img-fluid" alt=""></a>
                <h4><?= $mak->nama_menu; ?></h4>
                <p class="ingredients">
                <?= $mak->deskripsi_menu; ?>
                </p>
                <p class="price">
                  Rp. <?= number_format($mak->harga_menu, 0); ?> 
                <br>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $mak->kode_menu; ?>">
  Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?= $mak->kode_menu; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Halaman pembelian</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <a href="assets/img/menu/mie bakso.jpg" class="glightbox"><img src="assets/img/menu/<?= $mak->gambar_menu; ?>" class="menu-img img-fluid" alt=""></a>
                <h4><?= $mak->nama_menu; ?></h4>
                <p class="ingredients">
                <?= $mak->deskripsi_menu; ?>
                </p>
                <p class="price">
                Rp. <?= number_format($mak->harga_menu, 0); ?> 
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Pesan:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                  <input type="number" value="1" min="0" max="10" step="1"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batalkan pesanan</button>
        <button type="button" class="btn btn-primary">pesan</button>
      </div>
    </div>
  </div>
</div>
                
             
              

            </div>
            <?php } ?>

          </div><!-- End Starter Menu Content -->
  <!-- End Footer -->

  <a class="btn btn-danger" id="btn-back-to-top" href="keranjang_saya.html">
  <i class="fa fa-list"></i> Lihat Keranjang
  </a>
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