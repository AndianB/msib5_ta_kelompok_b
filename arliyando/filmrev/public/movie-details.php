<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Filmrev</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/odometer.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

  <!-- preloader -->
  <div id="preloader">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <img src="img/preloader.svg" alt="">
      </div>
    </div>
  </div>
  <!-- preloader-end -->

  <!-- Scroll-top -->
  <button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
  </button>
  <!-- Scroll-top-end-->

  <!-- header-area -->
  <?php include "template/header.php" ?>
  <!-- header-area-end -->

  <!-- main-area -->
  <main>
    <!-- movie-details-area -->
    <section class="movie-details-area" data-background="img/bg/movie_details_bg.jpg">
      <div class="container mt-5">
        <?php
        include '../Admin/config/koneksi.php';
        $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID ORDER BY f.Rating Desc limit 1;");
        while ($dm = mysqli_fetch_array($query)) {
        ?>
          <div class="row align-items-center position-relative">
            <div class="col-xl-3 col-lg-4">
              <div class="movie-details-img">
                <img src="img/poster/movie_details_img.jpg" alt="">
                <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><img src="img/posters/<?php echo $dm['Gambar']; ?>" alt=""></a>
              </div>
            </div>
            <div class="col-xl-6 col-lg-8">
              <div class="movie-details-content">
                <h5>Filmrev</h5>
                <h2><?php echo $dm['Judul']; ?></h2>
                <div class="banner-meta">
                  <ul>
                    <li class="quality">
                      <span><?php echo $dm["Nama_Kategori"] ?></span>
                    </li>
                    <li class="category">
                      <a href="#"><?php echo $dm["Nama_Genre"] ?></a>
                    </li>
                    <li class="release-time">
                      <span><i class="far fa-calendar-alt"></i> <?php echo date("Y", strtotime($dm["Tanggal_Release"])); ?></span>
                      <span class="duration"><i class="far fa-clock"></i> <?php echo $dm["Durasi_Film"] ?> min</span>
                    </li>
                  </ul>
                </div>
                <p><?php echo $dm["Synopsis"]?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
    <!-- movie-details-area-end -->

    <!-- episode-area -->
    <!-- episode-area-end -->

    <!-- tv-series-area -->
    <section class="tv-series-area tv-series-bg" data-background="img/bg/tv_series_bg02.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center mb-50">
              <span class="sub-title">Best TV Series</span>
              <h2 class="title">World Best TV Series</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="movie-item mb-50">
              <div class="movie-poster">
                <a href="movie-details.html"><img src="img/poster/ucm_poster09.jpg" alt=""></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title"><a href="movie-details.html">Women's Day</a></h5>
                  <span class="date">2021</span>
                </div>
                <div class="bottom">
                  <ul>
                    <li><span class="quality">hd</span></li>
                    <li>
                      <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                      <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="movie-item mb-50">
              <div class="movie-poster">
                <a href="movie-details.html"><img src="img/poster/ucm_poster10.jpg" alt=""></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title"><a href="movie-details.html">The Perfect Match</a></h5>
                  <span class="date">2021</span>
                </div>
                <div class="bottom">
                  <ul>
                    <li><span class="quality">4k</span></li>
                    <li>
                      <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                      <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="movie-item mb-50">
              <div class="movie-poster">
                <a href="movie-details.html"><img src="img/poster/ucm_poster03.jpg" alt=""></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                  <span class="date">2021</span>
                </div>
                <div class="bottom">
                  <ul>
                    <li><span class="quality">hd</span></li>
                    <li>
                      <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                      <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="movie-item mb-50">
              <div class="movie-poster">
                <a href="movie-details.html"><img src="img/poster/ucm_poster04.jpg" alt=""></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title"><a href="movie-details.html">The Easy Reach</a></h5>
                  <span class="date">2021</span>
                </div>
                <div class="bottom">
                  <ul>
                    <li><span class="quality">hd</span></li>
                    <li>
                      <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                      <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- tv-series-area-end -->

    <!-- newsletter-area -->
    <!-- newsletter-area-end -->

  </main>
  <!-- main-area-end -->

  <!-- footer-area -->
  <?php include "template/footer.php" ?>
  <!-- footer-area-end -->


  <!-- JS here -->
  <script src="js/vendor/jquery-3.6.0.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.odometer.min.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>

</html>