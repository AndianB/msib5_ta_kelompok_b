<?php
$page = "Detail-Film"
?>

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
        $judul =  htmlspecialchars($_GET['Judul']);
        $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID Where Judul='$judul'");
        while ($dm = mysqli_fetch_array($query)) {
        ?>
          <div class="row align-items-center position-relative">
            <div class="col-xl-3 col-lg-4">
              <div class="movie-details-img">
                <img src="img/poster/movie_details_img.jpg" alt="">
                <a class="popup-video"><img src="img/posters/<?php echo $dm['Gambar']; ?>" alt="" style="width: 303px; height: 430px;"></a>
              </div>
            </div>
            <div class="col-xl-9 col-lg-8">
              <div class="movie-details-content">
                <h5>Filmrev</h5>
                <h3 class="mb-4"><?php echo $dm['Judul']; ?></h3>
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
                <p>
                  <?php echo substr($dm["Synopsis"], 0, 400) ?>
                  <a>....</a>
                </p>
                <div class="movie-details-prime">
                  <ul>
                    <li class="share"><a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&u=https%3A%2F%2Fed7f-203-190-50-140.ngrok-free.app%2Fplaceholder%2Fmsib5_ta_kelompok_b%2Farliyando%2Ffilmrev%2Fpublic%2Fabout.php%2F&display=popup&ref=plugin&src=share_button"><i class="fab fa-facebook-f"></i> Share</a></li>
                    <li class="streaming">
                      <h6>Prime Video</h6>
                      <span>Watch Trailer -></span>
                    </li>
                    <li class="watch"><a href="<?php echo $dm["Link_Trailer"] ?>" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
    <!-- movie-details-area-end -->

    <!-- Synopsis -->
    <section class="episode-area episode-bg" data-background="img/bg/episode_bg.jpg" style="padding: 5px;">
      <div class="container mb-5">
        <div class="col-12">
          <?php
          include '../Admin/config/koneksi.php';
          $judul =  htmlspecialchars($_GET['Judul']);
          $query = mysqli_query($conn, "SELECT Synopsis from film Where Judul='$judul'");
          while ($sm = mysqli_fetch_array($query)) {
          ?>
            <div class="movie-history-wrap">
              <h3 class="title">About <span>History</span></h3>
              <p><?php echo $sm["Synopsis"] ?></p>
            </div>
          <?php } ?>
          <div class="row m-4">
            <p class="mt-3"><span style="color: #e4d804;">Actors :  </span></p>
            <?php
            include '../Admin/config/koneksi.php';
            $judul =  htmlspecialchars($_GET['Judul']);
            $query = mysqli_query($conn, "SELECT f.Judul, f.Synopsis, fc.*, lc.Nama_Cast FROM film_cast as fc JOIN film as f on f.FilmID=fc.FilmID JOIN list_cast as lc on lc.CastID=fc.CastID Where f.Judul='$judul'");
            while ($actors = mysqli_fetch_array($query)) {
            ?>
              <p class="mt-3" style="margin-left: 5px;"><?php echo ($actors["Nama_Cast"]) . "," ?></p>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Synopsis end -->

    <!-- Recommendation-area -->
    <section class="tv-series-area tv-series-bg" data-background="img/bg/tv_series_bg02.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center mb-50">
              <span class="sub-title">Filmrev</span>
              <h2 class="title">Recommendation Movies</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <?php
          include '../Admin/config/koneksi.php';
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID ORDER BY rand() limit 4;");
          while ($rm = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php.?Judul=<?php echo $rm["Judul"] ?>"><img src="img/posters/<?php echo $rm['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php.?Judul=<?php echo $rm["Judul"] ?>"><?php echo $rm['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($rm["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $rm["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $rm["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $rm['Rating']; ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- Recommendation-area-end -->


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