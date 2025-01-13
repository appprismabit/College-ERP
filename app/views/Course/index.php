<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Couse Details</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
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
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/toastr/toastr.css">


    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/custom/css/ol.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/loaders/loader-progress.css">





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
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="m-0"> <i class="fas fa-book me-2"></i> Course Details</h4>
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">

                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/dashboard/index">Home</a></li>
                                            <li class="breadcrumb-item active"><a href="<?php echo BASE_URL; ?>/dashboard/index">Course</a></li>
                                        </ol>
                                    </div><!-- /.col -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                                  
                    </div>

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-8">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2 mb-8 mt-8">
                                                <a href="<?php echo BASE_URL; ?>/sis/index" style="text-decoration: none; color: black;">
                                                    <div class="card shadow-lg text-center p-2">
                                                        <!-- Image first -->
                                                        <div>
                                                            <img class="img img-fluid feature-icon mx-auto d-block" src="<?php echo BASE_URL; ?>/img/icons/computer-icon.svg" loading="lazy" style="height: 100px; width: 100px;" alt="SIS" title="SIS">

                                                        </div>
                                                        <!-- Text below the image -->

                                                        <h5 class="mt-3">MCA</h5>

                                                    </div>
                                                </a>


                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2 mb-8 mt-8">
                                                <a href="<?php echo BASE_URL; ?>/sis/index" style="text-decoration: none; color: black;">
                                                    <div class="card shadow-lg text-center p-2">
                                                        <!-- Image first -->
                                                        <div>
                                                            <img class="img img-fluid feature-icon mx-auto d-block" src="<?php echo BASE_URL; ?>/img/icons/computer-icon.svg" loading="lazy" style="height: 100px; width: 100px;" alt="SIS" title="SIS">

                                                        </div>
                                                        <!-- Text below the image -->

                                                        <h5 class="mt-3">BCA</h5>

                                                    </div>
                                                </a>


                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2 mb-8 mt-8">
                                                <a href="<?php echo BASE_URL; ?>/sis/index" style="text-decoration: none; color: black;">
                                                    <div class="card shadow-lg text-center p-2">
                                                        <!-- Image first -->
                                                        <div>
                                                            <img class="img img-fluid feature-icon mx-auto d-block" src="<?php echo BASE_URL; ?>/img/icons/MBA.svg" loading="lazy" style="height: 100px; width: 100px;" alt="SIS" title="SIS">

                                                        </div>
                                                        <!-- Text below the image -->

                                                        <h5 class="mt-3">MBA</h5>

                                                    </div>
                                                </a>


                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa fa-plus-circle me-2"></i>
                                            Add Course
                                        </a>
                                    </div>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card-body">
                                            <div class="row form-group">
                                                <div class="col-md-12 p-1">
                                                    <input type="text" id="title_faculty" class="form-control" placeholder="Title of Course">
                                                </div>



                                                <div class="col-md-12 p-1">
                                                    <button type="button" name="" id="" class="btn btn-success btn-md btn-block"> Submit</button>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php include BASE_PATH . '/layout/footer.php'; ?>

        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo BASE_URL; ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo BASE_URL; ?>/plugins/sparklines/sparkline.js"></script>
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
    <script src="<?php echo BASE_URL; ?>/plugins/loaders/init.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/custom/custom.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/toastr/toastr.min.js"></script>


</body>

</html>