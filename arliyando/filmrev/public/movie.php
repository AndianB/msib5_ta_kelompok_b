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
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="img/banner/banner2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="title">Our <span>Movie</span></h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Movie
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- movie-area -->
    <section class="movie-area movie-bg" data-background="img/bg/movie_bg.jpg">
      <div class="container">
        <div class="row align-items-end mb-60">
          <div class="col-lg-4">
            <div class="section-title text-center text-lg-left">
              <span class="sub-title">Filmrev</span>
              <h2 class="title">New Release Movies</h2>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="movie-page-meta">
              <div class="tr-movie-menu-active text-center">
                <button class="active" data-filter=".cat-1">All</button>
                <button class="" data-filter=".cat-2">Action</button>
                <button class="" data-filter=".cat-3">Adventure</button>
                <button class="" data-filter=".cat-4">Comedy</button>
                <button class="" data-filter=".cat-5">Crime</button>
                <button class="" data-filter=".cat-6">Drama</button>
                <button class="" data-filter=".cat-7">Fanasy</button>
                <button class="" data-filter=".cat-8">Historical</button>
                <button class="" data-filter=".cat-9">Horror</button>
                <button class="" data-filter=".cat-10">Romance</button>
                <button class="" data-filter=".cat-11">Science Fiction</button>
                <button class="" data-filter=".cat-12">Thriller</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row tr-movie-active">
          <?php
          include '../Admin/config/koneksi.php';
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID ORDER BY f.FilmID asc");
          while ($film1 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-1">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film1['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film1["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film1['FilmID']; ?>"><?php echo $film1['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film1["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film1["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film1["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film1['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='5' ORDER BY f.FilmID asc");
          while ($film2 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-2">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film2['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film2["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film2['FilmID']; ?>"><?php echo $film2['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film2["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film2["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film2["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film2['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='6' ORDER BY f.FilmID asc");
          while ($film3 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-3">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film3['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film3["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film3['FilmID']; ?>"><?php echo $film3['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film3["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film3["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film3["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film3['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='4' ORDER BY f.FilmID asc");
          while ($film4 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-4">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film4['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film4["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film4['FilmID']; ?>"><?php echo $film4['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film4["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film4["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film4["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film4['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='11' ORDER BY f.FilmID asc");
          while ($film5 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-5">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film5['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film5["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film5['FilmID']; ?>"><?php echo $film5['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film5["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film5["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film5["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film5['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='7' ORDER BY f.FilmID asc");
          while ($film6 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-6">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film6['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film6["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film6['FilmID']; ?>"><?php echo $film6['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film6["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film6["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film6["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film6['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='9' ORDER BY f.FilmID asc");
          while ($film7 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-7">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film7['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film7["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film7['FilmID']; ?>"><?php echo $film7['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film7["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film7["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film7["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film7['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='10' ORDER BY f.FilmID asc");
          while ($film8 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-8">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film8['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film8["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film8['FilmID']; ?>"><?php echo $film8['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film8["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film8["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film8["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film8['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='1' ORDER BY f.FilmID asc");
          while ($film9 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-9">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film9['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film9["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film9['FilmID']; ?>"><?php echo $film9['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film9["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film9["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film9["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film9['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='2' ORDER BY f.FilmID asc");
          while ($film10 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-10">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film10['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film10["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film10['FilmID']; ?>"><?php echo $film10['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film10["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film10["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film10["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film10['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='8' ORDER BY f.FilmID asc");
          while ($film11 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-11">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film11['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film11["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film11['FilmID']; ?>"><?php echo $film11['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film11["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film11["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film11["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film11['Rating']; ?></span>
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
          $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID where f.GenreID='3' ORDER BY f.FilmID asc");
          while ($film12 = mysqli_fetch_array($query)) {
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-12">
              <div class="movie-item movie-item-three mb-50">
                <div class="movie-poster">
                  <img src="img/posters/<?php echo $film12['Gambar']; ?>" alt="" style="width: 303px; height: 430px;" />
                  <ul class="overlay-btn">
                    <li>
                      <a href="<?php echo $film12["Link_Trailer"] ?>" class="popup-video btn">Watch Now</a>
                    </li>
                    <li>
                      <a href="movie-details.php" class="btn">Details</a>
                    </li>
                  </ul>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title" style="height: 60px;">
                      <a href="movie-details.php?film_id=<?php echo $film12['FilmID']; ?>"><?php echo $film12['Judul']; ?></a>
                    </h5>
                    <span class="date"><?php echo date("Y", strtotime($film12["Tanggal_Release"])); ?></span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality"><?php echo $film12["Nama_Kategori"] ?></span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> <?php echo $film12["Durasi_Film"] ?> min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $film12['Rating']; ?></span>
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
    <!-- movie-area-end -->

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