<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Information System</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.css">
    <script src="<?php echo BASE_URL; ?>/plugins/custom/custom.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="<?php echo BASE_URL; ?>/plugins/toastr/toastr.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/toastr/toastr.css">


    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/custom/css/ol.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/loaders/loader-progress.css">

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>



    <style>
        .card {
            text-decoration: none;
            color: black;
        }
    </style>




</head>

<body>

    <div class="hold-transition sidebar-mini sidebar-collapse">
        <div class="wrapper">
            <!-- Navbar -->
            <?php include BASE_PATH . '/layout/header.php'; ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php include BASE_PATH . '/layout/aside.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <a href="<?php echo BASE_URL;?>/dashboard/index"><button type="button" class="btn btn-primary btn-sm">Back</button></a>
                        
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="loader-overlay">
                                <div class="loader"></div>
                            </div>
                            <div class="col-6  col-sm-6 col-md-4 col-lg-3">
                                <a href="<?php echo BASE_URL; ?>/SIS/add_admission">
                                    <div class="card shadow-lg text-center p-2">
                                        <!-- Image first -->
                                        <div>
                                            <img class="img img-fluid feature-icon mx-auto d-block" src="<?php echo BASE_URL; ?>/img/icons/add-admisson.svg" loading="lazy" style="height: 100px; width: 100px;" alt="SIS" title="SIS">

                                        </div>
                                        <!-- Text below the image -->

                                        <h5 class="mt-3">Admission Form</h5>

                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                                <a href="<?php echo BASE_URL; ?>/SIS/student_list">
                                    <div class="card shadow-lg text-center p-2">
                                        <!-- Image first -->
                                        <div>
                                            <img class="img img-fluid feature-icon mx-auto d-block" src="<?php echo BASE_URL; ?>/img/icons/list.svg" loading="lazy" style="height: 100px; width: 100px;" alt="SIS" title="SIS">

                                        </div>
                                        <!-- Text below the image -->

                                        <h5 class="mt-3">Student List</h5>

                                    </div>
                                </a>
                            </div>


                        </div>


                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php include BASE_PATH . '/layout/footer.php'; ?>

        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->

        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="<?php echo BASE_URL; ?>/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo BASE_URL; ?>/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="<?php echo BASE_URL; ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo BASE_URL; ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?php echo BASE_URL; ?>/plugins/moment/moment.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo BASE_URL; ?>/dist/js/adminlte.js"></script>
        <script src="<?php echo BASE_URL; ?>/dist/js/pages/dashboard.js"></script>

        <script src="<?php echo BASE_URL; ?>/plugins/select2/js/select2.full.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/chart.js/Chart.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/sparklines/sparkline.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/dist/js/adminlte.js"></script>

        <script src="<?php echo BASE_URL; ?>/dist/js/pages/dashboard.js"></script>
        <script src="<?php echo BASE_URL; ?>/plugins/loaders/init.js"></script>


</body>

</html>