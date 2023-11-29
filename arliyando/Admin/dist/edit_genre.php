<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Edit Genre - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="tables-datatable.html" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/favicon.png" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/favicon.png" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="tables-datatable.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/favicon.png" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/favicon.png" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="ri-menu-line"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <!-- Topbar Search Form
                            <div class="app-search d-none d-lg-block">
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search...">
                                        <span class="ri-search-line search-icon text-muted"></span>
                                    </div>
                                </form>
                            </div> -->
                </div>

            </div>
        </div>
        <!-- ========== Topbar End ========== -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="tables-datatable.html" class="logo logo-light">
                <span class="logo-lg">
                    <img src="assets/images/favicon.png" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/favicon.png" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="tables-datatable.html" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/favicon.png" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/favicon.png" alt="small logo">
                </span>
            </a>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title">Main</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                            <i class="ri-table-line"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="tables-datatable.php">Data Tables</a>
                                </li>
                                <li>
                                    <a href="data_film.php">Film</a>
                                </li>
                                <li>
                                    <a href="data_cast.php">Cast</a>
                                </li>
                                <li>
                                    <a href="data_genre.php">Genre</a>
                                </li>
                                <li>
                                    <a href="data_kategoriumur.php">Kategori Umur</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Filmrev</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Genre</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Data Tables</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <h4 class="header-title">Edit Genre</h4>

                    <?php
                    include '../config/koneksi.php';
                    $genre = mysqli_query($conn, "SELECT * from genre where GenreID='$_GET[GenreID]'");

                    while ($g = mysqli_fetch_array($genre)) {
                        $GenreID = $g["GenreID"];
                        $Nama_Genre = $g["Nama_Genre"];
                    }
                    ?>

                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <form action="proses_update_data_genre.php?GenreID=<?php echo $_GET['GenreID']?>" method="post" enctype="multipart/form-data">
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Genre ID</label>
                                            <input type="text" name="GenreID" class="form-control" id="exampleFormControlInput1" placeholder="GenreID" value="<?php echo $GenreID ?>" disabled>
                                        </div>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Genre</label>
                                            <input type="text" name="Nama_Genre" class="form-control" id="exampleFormControlInput1" placeholder="Nama Genre" value="<?php echo $Nama_Genre ?>">
                                        </div>
                                        <button name="Submit" value="Submit" type="submit" class="btn btn-success">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> © Filmrev - by <b>Group B</b>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

</body>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- Datatables js -->
<script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

<!-- Datatable Demo Aapp js -->
<script src="assets/js/pages/datatable.init.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

<script>
    function save() {
        swal('Good job!', 'data berhasil di update!', 'success');
    }
</script>

</html>