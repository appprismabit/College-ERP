<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admission</title>
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
        /* Label styles */
        label {
            font-weight: 300;
            /* Light font weight */
            color: #999;
            /* Light gray color for thin text */
        }


        /* Adjust spacing below inputs */
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
                        <h1 style="font-family: 'Open Sans', sans-serif;">Admission Form</h1>
                    </div><!-- /.container-fluid -->
                    <hr>
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="loader-overlay">
                                <div class="loader"></div>
                            </div>
                            <div class="col-12">
                                <div class="card card-primary card-outline p-4">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="card bg-primary p-2" style="font-size: 20px;">
                                                    <span class="ml-2">Admission Form - PART A</span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="card bg-primary p-2" style="font-size: 20px;">
                                                    <span class="ml-2"> Admission Form - PART B</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div>
                                                    <label>Your Image</label>
                                                    <input type="file" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Course</label>
                                                    <select class="form-control mb-4">
                                                        <option value="BSc. Computer Science">BSc. Computer Science</option>
                                                        <option value="BSc. Information Technology">BSc. Information Technology</option>
                                                        <option value="BSc. Cyber Security">BSc. Cyber Security</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label>Birthday</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Age</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Gender</label>
                                                    <select class="form-control mb-4">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label>Mother Tongue</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Religion</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Blood Group</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Address</label>
                                                    <textarea row="2" cols="4" class="form-control mb-4"></textarea>
                                                </div>
                                                <div>
                                                    <label>City</label>
                                                    <input type="text" class="form-control" />
                                                </div>



                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div>
                                                    <label>State</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Nationality</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Phone</label>
                                                    <input type="number" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Email</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Password</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Previous School Name</label>
                                                    <input type="text" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Admission Date</label>
                                                    <input type="date" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Upload Birth Certificate</label>
                                                    <input type="file" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Upload Marksheet</label>
                                                    <input type="file" class="form-control mb-4" />
                                                </div>
                                                <div>
                                                    <label>Cast</label>
                                                    <select class="form-control mb-4">
                                                        <option>GENERAL</option>
                                                        <option>OBC</option>
                                                        <option>ST</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label>Hostel </label>
                                                    <input type="file" class="form-control mb-4" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-success">Save Students <i class="fas fa-plus fa-sm"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php include BASE_PATH . '/layout/footer.php'; ?>

        </div>
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