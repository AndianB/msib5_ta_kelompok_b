<header>
      <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
          <div class="row">
            <div class="col-12">
              <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
              <div class="menu-wrap">
                <nav class="menu-nav show">
                  <div class="logo">
                    <a href="index.php">
                      <img src="img/logo/logo1.png" alt="Logo" width="140px" />
                    </a>
                  </div>
                  <div class="active navbar-wrap main-menu d-none d-lg-flex">
                    <ul class="active navigation">
                      <li <?php if($page=="Home") echo "class='active'"; ?>>
                        <a href="index.php">Home</a>
                      </li>
                      <li <?php if($page=="Film") echo "class='active'"; ?>>
                        <a href="movie.php">Film</a>
                      </li>
                      <li <?php if($page=="About") echo "class='active'"; ?>>
                        <a href="about.php">About</a>
                      </li>
                      <li <?php if($page=="Contact") echo "class='active'"; ?>>
                        <a href="contact.php">Contact</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>

              <!-- Mobile Menu  -->
              <div class="mobile-menu">
                <div class="close-btn"><i class="fas fa-times"></i></div>

                <nav class="menu-box">
                  <div class="nav-logo">
                    <a href="index.php"
                      ><img src="img/logo/logo.png" alt="" title=""
                    /></a>
                  </div>
                  <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                  </div>
                  <div class="social-links">
                    <ul class="clearfix">
                      <li>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                      </li>
                      <li>
                        <a href="#"
                          ><span class="fab fa-facebook-square"></span
                        ></a>
                      </li>
                      <li>
                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="menu-backdrop"></div>
              <!-- End Mobile Menu -->

              <!-- Modal Search -->
              <!-- <div
                class="modal fade"
                id="search-modal"
                tabindex="-1"
                role="dialog"
                aria-hidden="true"
              >
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form>
                      <input type="text" placeholder="Search here..." />
                      <button><i class="fas fa-search"></i></button>
                    </form>
                  </div>
                </div>
              </div> -->
              <!-- Modal Search-end -->
            </div>
          </div>
        </div>
      </div>
    </header>