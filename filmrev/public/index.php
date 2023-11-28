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
    <!-- banner-area -->
    <section class="banner-area banner-bg" data-background="img/banner/banner_bg01.jpg">
      <div class="container custom-container">
        <div class="row">
          <div class="col-xl-8 col-lg-10">
            <div class="banner-content">
              <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">
                Filmrev
              </h6>
              <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">
                Enjoy Unlimited <span>Movie</span>, Hit Series, & More.
              </h2>
              <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                <ul>
                  <li class="quality">
                    <span>Pg 18</span>
                    <span>hd</span>
                  </li>
                  <li class="category">
                    <a href="#">Romance,</a>
                    <a href="#">Drama</a>
                  </li>
                  <li class="release-time">
                    <span><i class="far fa-calendar-alt"></i> 2021</span>
                    <span><i class="far fa-clock"></i> 128 min</span>
                  </li>
                </ul>
              </div>
              <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner-area-end -->

    <!-- up-coming-movie-area -->
    <section class="ucm-area ucm-bg" data-background="img/bg/ucm_bg.jpg">
      <div class="ucm-bg-shape" data-background="img/bg/ucm_bg_shape.png"></div>
      <div class="container">
        <div class="row align-items-end mb-55">
          <div class="col-lg-6">
            <div class="section-title text-center text-lg-left">
              <span class="sub-title">ONLINE STREAMING</span>
              <h2 class="title">Upcoming Movies</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ucm-nav-wrap">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">Action</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Horror</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="anime" aria-selected="false">Anime</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
            <div class="ucm-active owl-carousel">
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster01.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">Women's Day</a>
                    </h5>
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
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster02.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Perfect Match</a>
                    </h5>
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
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster03.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Dog Woof</a>
                    </h5>
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
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster04.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Easy Reach</a>
                    </h5>
                    <span class="date">2021</span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality">8k</span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster05.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Cooking</a>
                    </h5>
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
          <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
            <div class="ucm-active owl-carousel">
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster05.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Cooking</a>
                    </h5>
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
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster06.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Hikers</a>
                    </h5>
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
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster07.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">Life Quotes</a>
                    </h5>
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
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster08.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Beachball</a>
                    </h5>
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
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster03.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Dog Woof</a>
                    </h5>
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
          <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="anime-tab">
            <div class="ucm-active owl-carousel">
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster01.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">Women's Day</a>
                    </h5>
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
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster02.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Perfect Match</a>
                    </h5>
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
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster03.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Dog Woof</a>
                    </h5>
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
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster04.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Easy Reach</a>
                    </h5>
                    <span class="date">2021</span>
                  </div>
                  <div class="bottom">
                    <ul>
                      <li><span class="quality">8k</span></li>
                      <li>
                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="movie-item mb-50">
                <div class="movie-poster">
                  <a href="movie-details.php"><img src="img/poster/ucm_poster05.jpg" alt="" /></a>
                </div>
                <div class="movie-content">
                  <div class="top">
                    <h5 class="title">
                      <a href="movie-details.php">The Cooking</a>
                    </h5>
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
      </div>
    </section>
    <!-- up-coming-movie-area-end -->

    <!-- services-area -->
    <!-- P.S. : Dah dihapus tidak guna -->
    <!-- services-area-end -->

    <!-- top-rated-movie -->
    <section class="top-rated-movie tr-movie-bg" data-background="img/bg/tr_movies_bg.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center mb-50">
              <span class="sub-title">ONLINE STREAMING</span>
              <h2 class="title">Top Rated Movies</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="tr-movie-menu-active text-center">
              <button class="active" data-filter="*">Action</button>
              <button class="" data-filter=".cat-one">Comedy</button>
              <button class="" data-filter=".cat-two">Horror</button>
              <button class="" data-filter=".cat-three">Adventure</button>
            </div>
          </div>
        </div>
        <div class="row tr-movie-active">
          <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
            <div class="movie-item mb-60">
              <div class="movie-poster">
                <a href="movie-details.php"><img src="img/poster/ucm_poster01.jpg" alt="" /></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title">
                    <a href="movie-details.php">Women's Day</a>
                  </h5>
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
          <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
            <div class="movie-item mb-60">
              <div class="movie-poster">
                <a href="movie-details.php"><img src="img/poster/ucm_poster02.jpg" alt="" /></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title">
                    <a href="movie-details.php">The Perfect Match</a>
                  </h5>
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
          <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
            <div class="movie-item mb-60">
              <div class="movie-poster">
                <a href="movie-details.php"><img src="img/poster/ucm_poster03.jpg" alt="" /></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title">
                    <a href="movie-details.php">The Dog Woof</a>
                  </h5>
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
          <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
            <div class="movie-item mb-60">
              <div class="movie-poster">
                <a href="movie-details.php"><img src="img/poster/ucm_poster04.jpg" alt="" /></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title">
                    <a href="movie-details.php">The Easy Reach</a>
                  </h5>
                  <span class="date">2021</span>
                </div>
                <div class="bottom">
                  <ul>
                    <li><span class="quality">8K</span></li>
                    <li>
                      <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                      <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
            <div class="movie-item mb-60">
              <div class="movie-poster">
                <a href="movie-details.php"><img src="img/poster/ucm_poster05.jpg" alt="" /></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title">
                    <a href="movie-details.php">The Cooking</a>
                  </h5>
                  <span class="date">2021</span>
                </div>
                <div class="bottom">
                  <ul>
                    <li><span class="quality">3D</span></li>
                    <li>
                      <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                      <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
            <div class="movie-item mb-60">
              <div class="movie-poster">
                <a href="movie-details.php"><img src="img/poster/ucm_poster06.jpg" alt="" /></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title">
                    <a href="movie-details.php">The Hikaru</a>
                  </h5>
                  <span class="date">2021</span>
                </div>
                <div class="bottom">
                  <ul>
                    <li><span class="quality">hd</span></li>
                    <li>
                      <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                      <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
            <div class="movie-item mb-60">
              <div class="movie-poster">
                <a href="movie-details.php"><img src="img/poster/ucm_poster07.jpg" alt="" /></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title">
                    <a href="movie-details.php">Life Quotes</a>
                  </h5>
                  <span class="date">2021</span>
                </div>
                <div class="bottom">
                  <ul>
                    <li><span class="quality">4K</span></li>
                    <li>
                      <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                      <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
            <div class="movie-item mb-60">
              <div class="movie-poster">
                <a href="movie-details.php"><img src="img/poster/ucm_poster08.jpg" alt="" /></a>
              </div>
              <div class="movie-content">
                <div class="top">
                  <h5 class="title">
                    <a href="movie-details.php">The Beachball</a>
                  </h5>
                  <span class="date">2021</span>
                </div>
                <div class="bottom">
                  <ul>
                    <li><span class="quality">4K</span></li>
                    <li>
                      <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                      <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <a class="btn btn-warning fs-5 mt-5" href="movie.phpmovie-details.php">See More</a>
        </div>
      </div>
    </section>
    <!-- top-rated-movie-end -->

    <!-- live-area -->
    <!-- P.S. Galang : Ga Nyambung, dah dihapus atau mau diganti -->
    <!-- live-area-end -->
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