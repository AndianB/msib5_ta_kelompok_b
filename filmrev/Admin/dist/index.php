<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Film - Admin | Filmrev</title>
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
<!-- <script>
    function konfirmasiHapus(GenreID) {

        swal({
                title: "Apakah Kamu yakin?",
                text: "Data akan terhapus!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Redirect ke halaman Proses-hapus-data.php jika konfirmasi disetujui
                    swal({
                        title: "Good job!",
                        text: "Data terhapus!",
                        icon: "success",
                    });
                    setTimeout(function() {
                        window.location.href = "proses_hapus_film.php?FilmID=" + FilmID;
                    }, 2000);
                } else {
                    swal("Data Batal Di hapus!", {
                        icon: "info",
                    });
                }
            });
    }
</script> -->

<body>
    <div class="wrapper">
        <?php include "template/top-bar.php" ?> <!-- ========== Topbar ========== -->

        <?php include "template/left-sidebar.php" ?> <!-- ========== Left Sidebar ========== -->

        <!-- Start Page Content here -->
        <div class="content-page">

            <!-- Content Header -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Filmrev</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Film</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Data Film</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-primary text-light" href="tambah_film.php"> Tambah Data </a>
                                </div>

                                <div class="card-body">
                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>ID Film</th>
                                                <th>Judul</th>
                                                <th>Link</th>
                                                <!-- <th>Sinopsis</th> -->
                                                <th>Rating</th>
                                                <th>Tanggal rilis</th>
                                                <th>Durasi</th>
                                                <th>Sutradara</th>
                                                <th>Genre</th>
                                                <th>Kategori</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include '../config/koneksi.php';
                                            $query = mysqli_query($conn, "SELECT f.*, g.Nama_Genre, k.Nama_Kategori FROM film AS f JOIN genre AS g ON g.GenreID=f.GenreID JOIN kategori_umur AS k ON k.KategoriID=f.KategoriID ORDER BY f.FilmID ASC;");
                                            while ($film = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $film["FilmID"] ?></td>
                                                    <td><?php echo $film["Judul"] ?></td>
                                                    <td><a href="<?php echo $film["Link_Trailer"] ?>">Link</a></td>
                                                    <!-- <td><?php echo $film["Synopsis"] ?></td> -->
                                                    <td><?php echo $film["Rating"] ?></td>
                                                    <td><?php echo $film["Tanggal_Release"] ?></td>
                                                    <td><?php echo $film["Durasi_Film"] ?> min</td>
                                                    <td><?php echo $film["Sutradara"] ?></td>
                                                    <td><?php echo $film["Nama_Genre"] ?></td>
                                                    <td><?php echo $film["Nama_Kategori"] ?></td>
                                                    <td><img src="../../public/img/posters/<?php echo $film["Gambar"] ?>" alt="Film Poster" style="max-width: 100px; max-height: 150px;"></td>
                                                    <td>
                                                        <a href="edit_film.php?FilmID=<?php echo $film["FilmID"] ?>" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="proses_hapus_film.php?FilmID=<?php echo $film["FilmID"] ?>" onclick="return confirm('Yakin mau hapus data?')" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div> <!-- end row-->
                </div>
            </section>
        </div> <!-- content -->

        <!-- Footer Start -->
        <?php include "template/footer.php" ?>
        <!-- end Footer -->
    </div>
    </div>
    </div>
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




</html>