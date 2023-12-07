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
    <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
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
          <div class="col-lg-6">
            <div class="section-title text-center text-lg-left">
              <span class="sub-title">ONLINE STREAMING</span>
              <h2 class="title">New Release Movies</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="movie-page-meta">
              <div class="tr-movie-menu-active text-center">
                <button class="active" data-filter="*">Animation</button>
                <button class="" data-filter=".cat-two">Romantic</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row tr-movie-active">
          <?php
          // Assuming you have a database connection established
          $host = "localhost";  // Change to your database host
          $database = "db_film";  // Change to your database name
          $username = "root";  // Change to your database username
          $password = "";  // Empty password for this example

          // Create a database connection
          $connection = mysqli_connect($host, $username, $password, $database);

          // Check the connection
          if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // Fetch movie data from the database
          $query = "SELECT FilmID, Judul, Gambar, Link_Trailer, Tanggal_Release, Durasi_Film, Rating FROM film";
          $result = mysqli_query($connection, $query);

          // Check if the query was successful
          if ($result) {
            while ($movieData = mysqli_fetch_assoc($result)) {
          ?>

              <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                <div class="movie-item movie-item-three mb-50">
                  <div class="movie-poster">
                    <img src="img/posters/<?php echo $movieData['Gambar']; ?>" alt="Main Image" onerror="this.onerror=null; this.src='../public/img/posters/ucm_poster01.jpg';" />
                    <!-- Note Dari Galang : ukuran 303x430-->
                    <ul class="overlay-btn">
                      <li>
                        <a href="<?php echo $movieData['Link_Trailer']; ?>" class="popup-video btn">Watch Now</a>
                      </li>
                      <li>
                        <a href="movie-details.php?film_id=<?php echo $movieData['FilmID']; ?>" class="btn">Details</a>
                      </li>
                    </ul>
                  </div>
                  <div class="movie-content">
                    <div class="top">
                      <h5 class="title">
                        <a href="movie-details.php?film_id=<?php echo $movieData['FilmID']; ?>"><?php echo $movieData['Judul']; ?></a>
                      </h5>
                      <span class="date"><?php echo $movieData['Tanggal_Release']; ?></span>
                    </div>
                    <div class="bottom">
                      <ul>
                        <li><span class="quality">hd</span></li>
                        <li>
                          <span class="duration"><i class="far fa-clock"></i> <?php echo $movieData['Durasi_Film']; ?> min</span>
                          <span class="rating"><i class="fas fa-thumbs-up"></i> <?php echo $movieData['Rating']; ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

          <?php
            }

            // Release the result set
            mysqli_free_result($result);
          } else {
            // Handle the case where the query failed
            echo "Error: " . mysqli_error($connection);
          }

          // Close the database connection
          mysqli_close($connection);
          ?>

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