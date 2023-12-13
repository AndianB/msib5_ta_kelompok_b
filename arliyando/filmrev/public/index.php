<?php
$page = "Home"
?>

<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Filmrev</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/odometer.css" />
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/default.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
</head>

<!-- Connection -->
<?php include '../Admin/config/koneksi.php' ?>

<body>
  <!-- preloader -->
  <div id="preloader">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <img src="img/preloader.svg" alt="" />
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

    <!-- banner-area -->
    <section class="banner-area banner-bg" data-background="img/banner/banner1.jpg">
      <?php
      include '../Admin/config/koneksi.php';
      $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID ORDER BY rand() limit 1;");
      while ($banner = mysqli_fetch_array($query)) {
      ?>
        <div class="container custom-container">
          <div class="row">
            <div class="col-xl-8 col-lg-10">
              <div class="banner-content">
                <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">
                  Filmrev
                </h6>
                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">
                  Rating, Top <span>Movie</span>, Best, Hit Movie, & More.
                </h2>
                <h3 class="subtitle wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s"><?php echo $banner["Judul"] ?></h3>
                <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                  <ul>
                    <li class="quality">
                      <span><?php echo $banner["Nama_Kategori"] ?></span>
                    </li>
                    <li class="category">
                      <a href="#"><?php echo $banner["Nama_Genre"] ?></a>
                    </li>
                    <li class="release-time">
                      <span><i class="far fa-calendar-alt"></i><?php echo date("Y", strtotime($banner["Tanggal_Release"])); ?></span>
                      <span><i class="far fa-clock"></i><?php echo $banner["Durasi_Film"] ?> min</span>
                    </li>
                  </ul>
                </div>
                <a href="<?php echo $banner["Link_Trailer"] ?>" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </section>
    <!-- banner-area-end -->

    <!-- up-coming-movie-area -->
    <section class="ucm-area ucm-bg" data-background="img/banner/banner3.jpg">
      <div class="ucm-bg-shape" data-background="img/bg/ucm_bg_shape.png"></div>
      <div class="container">
        <div class="row align-items-end mb-55">
          <div class="col-lg-6">
            <div class="section-title text-center text-lg-left">
              <span class="sub-title">Filmrev</span>
              <h2 class="title">Latest Movies</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ucm-nav-wrap">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="action-tab" data-toggle="tab" href="#action" role="tab" aria-controls="action" aria-selected="true">Action</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="horror-tab" data-toggle="tab" href="#horror" role="tab" aria-controls="horror" aria-selected="false">Horror</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="comedy-tab" data-toggle="tab" href="#comedy" role="tab" aria-controls="comedy" aria-selected="false">Comedy</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="romance-tab" data-toggle="tab" href="#romance" role="tab" aria-controls="romance" aria-selected="false">Romance</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="action" role="tabpanel" aria-labelledby="action-tab">
            <div class="ucm-active owl-carousel">
              <?php
              include '../Admin/config/koneksi.php';
              $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID WHERE f.GenreID='5' order by f.Tanggal_Release desc;");
              while ($upmovie1 = mysqli_fetch_array($query)) {
              ?>
                <div class="movie-item mb-50">
                  <div class="movie-poster">
                    <a href="movie-details.php.?Judul=<?php echo $upmovie1["Judul"] ?>"><img src="img/posters/<?php echo $upmovie1['Gambar']; ?>" alt="Main Image" style="width: 303px; height: 430px;"></a>
                  </div>
                  <div class="movie-content">
                    <div class="top">
                      <h5 class="title">
                        <a href="movie-details.php.?Judul=<?php echo $upmovie1["Judul"] ?>"><?php echo $upmovie1['Judul']; ?></a>
                      </h5>
                      <span class="date"><?php echo date("Y", strtotime($upmovie1["Tanggal_Release"])); ?></span>
                    </div>
                    <div class="bottom">
                      <ul>
                        <li><span class="quality"><?php echo $upmovie1["Nama_Kategori"] ?></span></li>
                        <li>
                          <span class="duration"><i class="far fa-clock"></i> <?php echo $upmovie1['Durasi_Film']; ?> min</span>
                          <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $upmovie1['Rating']; ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="tab-pane fade" id="horror" role="tabpanel" aria-labelledby="horror-tab">
            <div class="ucm-active owl-carousel">
              <?php
              include '../Admin/config/koneksi.php';
              $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID WHERE f.GenreID='1'order by f.Tanggal_Release desc;");
              while ($upmovie2 = mysqli_fetch_array($query)) {
              ?>
                <div class="movie-item mb-50">
                  <div class="movie-poster">
                    <a href="movie-details.php.?Judul=<?php echo $upmovie2["Judul"] ?>"><img src="img/posters/<?php echo $upmovie2['Gambar']; ?>" alt="Main Image" style="width: 303px; height: 430px;"></a>
                  </div>
                  <div class="movie-content">
                    <div class="top">
                      <h5 class="title">
                        <a href="movie-details.php.?Judul=<?php echo $upmovie2["Judul"] ?>"><?php echo $upmovie2['Judul']; ?></a>
                      </h5>
                      <span class="date"><?php echo date("Y", strtotime($upmovie2["Tanggal_Release"])); ?></span>
                    </div>
                    <div class="bottom">
                      <ul>
                        <li><span class="quality"><?php echo $upmovie2["Nama_Kategori"] ?></span></li>
                        <li>
                          <span class="duration"><i class="far fa-clock"></i> <?php echo $upmovie2['Durasi_Film']; ?> min</span>
                          <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $upmovie2['Rating']; ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="tab-pane fade" id="comedy" role="tabpanel" aria-labelledby="comedy-tab">
            <div class="ucm-active owl-carousel">
              <?php
              include '../Admin/config/koneksi.php';
              $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID WHERE f.GenreID='4' order by f.Tanggal_Release desc ;");
              while ($upmovie3 = mysqli_fetch_array($query)) {
              ?>
                <div class="movie-item mb-50">
                  <div class="movie-poster">
                    <a href="movie-details.php.?Judul=<?php echo $upmovie3["Judul"] ?>"><img src="img/posters/<?php echo $upmovie3['Gambar']; ?>" alt="Main Image" style="width: 303px; height: 430px;"></a>
                  </div>
                  <div class="movie-content">
                    <div class="top">
                      <h5 class="title">
                        <a href="movie-details.php.?Judul=<?php echo $upmovie3["Judul"] ?>"><?php echo $upmovie3['Judul']; ?></a>
                      </h5>
                      <span class="date"><?php echo date("Y", strtotime($upmovie3["Tanggal_Release"])); ?></span>
                    </div>
                    <div class="bottom">
                      <ul>
                        <li><span class="quality"><?php echo $upmovie3["Nama_Kategori"] ?></span></li>
                        <li>
                          <span class="duration"><i class="far fa-clock"></i> <?php echo $upmovie3['Durasi_Film']; ?> min</span>
                          <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $upmovie3['Rating']; ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="tab-pane fade" id="romance" role="tabpanel" aria-labelledby="romance-tab">
            <div class="ucm-active owl-carousel">
              <?php
              include '../Admin/config/koneksi.php';
              $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID WHERE f.GenreID='2' order by f.Tanggal_Release desc ;");
              while ($upmovie4 = mysqli_fetch_array($query)) {
              ?>
                <div class="movie-item mb-50">
                  <div class="movie-poster">
                    <a href="movie-details.php.?Judul=<?php echo $upmovie4["Judul"] ?>"><img src="img/posters/<?php echo $upmovie4['Gambar']; ?>" alt="Main Image" style="width: 303px; height: 430px;"></a>
                  </div>
                  <div class="movie-content">
                    <div class="top">
                      <h5 class="title">
                        <a href="movie-details.php.?Judul=<?php echo $upmovie4["Judul"] ?>"><?php echo $upmovie4['Judul']; ?></a>
                      </h5>
                      <span class="date"><?php echo date("Y", strtotime($upmovie4["Tanggal_Release"])); ?></span>
                    </div>
                    <div class="bottom">
                      <ul>
                        <li><span class="quality"><?php echo $upmovie4["Nama_Kategori"] ?></span></li>
                        <li>
                          <span class="duration"><i class="far fa-clock"></i> <?php echo $upmovie4['Durasi_Film']; ?> min</span>
                          <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $upmovie4['Rating']; ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- up-coming-movie-area-end -->

    <!-- top-rated-movie -->
    <section class="top-rated-movie tr-movie-bg" data-background="img/bg/tr_movies_bg.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center mb-50">
              <span class="sub-title">Filmrev</span>
              <h2 class="title">Top Rated Movies</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="tr-movie-menu-active text-center">
              <button class="active" data-filter=".cat-one">Action</button>
              <button class="" data-filter=".cat-two">Comedy</button>
              <button class="" data-filter=".cat-three">Horror</button>
              <button class="" data-filter=".cat-four">Romance</button>
            </div>
          </div>
        </div>
        <div class="row tr-movie-active">
          <?php
          include '../Admin/config/koneksi.php';
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='5' ORDER BY f.Rating Desc limit 8;");
          while ($tm1 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one">
              <div class="movie-item mb-60">
                <div class="movie-poster">
                  <a href="movie-details.php.?Judul=<?php echo $tm1["Judul"] ?>"><img src="img/posters/<?php echo $tm1['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php.?Judul=<?php echo $tm1["Judul"] ?>"><?php echo $tm1['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($tm1["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $tm1["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $tm1["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $tm1['Rating']; ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="row tr-movie-active">
          <?php
          include '../Admin/config/koneksi.php';
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='4' ORDER BY f.Rating Desc limit 8;");
          while ($tm2 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
              <div class="movie-item mb-60">
                <div class="movie-poster">
                  <a href="movie-details.php.?Judul=<?php echo $tm2["Judul"] ?>"><img src="img/posters/<?php echo $tm2['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php.?Judul=<?php echo $tm2["Judul"] ?>"><?php echo $tm2['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($tm2["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $tm2["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $tm2["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $tm2['Rating']; ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="row tr-movie-active">
          <?php
          include '../Admin/config/koneksi.php';
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='1' ORDER BY f.Rating Desc limit 8;");
          while ($tm3 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-three">
              <div class="movie-item mb-60">
                <div class="movie-poster">
                  <a href="movie-details.php.?Judul=<?php echo $tm3["Judul"] ?>"><img src="img/posters/<?php echo $tm3['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php.?Judul=<?php echo $tm3["Judul"] ?>"><?php echo $tm3['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($tm3["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $tm3["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $tm3["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $tm3['Rating']; ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="row tr-movie-active">
          <?php
          include '../Admin/config/koneksi.php';
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='2' ORDER BY f.Rating Desc limit 8;");
          while ($tm4 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-four">
              <div class="movie-item mb-60">
                <div class="movie-poster">
                  <a href="movie-details.php.?Judul=<?php echo $tm4["Judul"] ?>"><img src="img/posters/<?php echo $tm4['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php.?Judul=<?php echo $tm4["Judul"] ?>"><?php echo $tm4['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($tm4["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $tm4["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $tm4["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $tm4['Rating']; ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="text-center">
          <a class="btn btn-warning fs-5 mt-5" href="movie.php">See More</a>
        </div>
      </div>
    </section>
    <!-- top-rated-movie-end -->

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