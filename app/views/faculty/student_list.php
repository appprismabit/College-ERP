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
                        <h1 style="font-family: 'Open Sans', sans-serif;">Student List</h1>
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
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-6">
                                                <label>Select Course</label>
                                                <select class="form-control">
                                                    <option value="">BCA</option>
                                                    <option value="">MCA</option>
                                                    <option value="">MBA</option>
                                                    <option value="">LLB</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label>&nbsp;</label>
                                                <button type="button" class="btn btn-success form-control">Proceed</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="example1" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Course</th>
                                                    <th>Sex</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Parent</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Male</td>
                                                    <td>tiger.nixon@example.com</td>
                                                    <td>(123) 456-7890</td>
                                                    <td>John Nixon</td>
                                                    <td><button type="button" class="btn btn-primary">Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <td>Jane Doe</td>
                                                    <td>Software Engineer</td>
                                                    <td>Female</td>
                                                    <td>jane.doe@example.com</td>
                                                    <td>(234) 567-8901</td>
                                                    <td>Richard Doe</td>
                                                    <td><button type="button" class="btn btn-primary">Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <td>Mary Johnson</td>
                                                    <td>Product Manager</td>
                                                    <td>Female</td>
                                                    <td>mary.johnson@example.com</td>
                                                    <td>(345) 678-9012</td>
                                                    <td>David Johnson</td>
                                                    <td><button type="button" class="btn btn-primary">Profile</button></td>
                                                </tr>
                                                <tr>
                                                    <td>James Smith</td>
                                                    <td>Data Scientist</td>
                                                    <td>Male</td>
                                                    <td>james.smith@example.com</td>
                                                    <td>(456) 789-0123</td>
                                                    <td>Laura Smith</td>
                                                    <td><button type="button" class="btn btn-primary">Profile</button></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="7" class="text-center">End of the table</td>
                                                </tr>
                                            </tfoot>
                                        </table>
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
        <script>
            $(document).ready(function() {
                $('#example1').DataTable({
                    paging: true, // Enable pagination
                    searching: true, // Enable search box
                    ordering: true, // Enable sorting
                    pageLength: 5, // Set default rows per page
                    lengthChange: true, // Allow user to change rows per page
                    info: true, // Show information text
                    responsive: true // Make table responsive
                });
            });
        </script>
</body>

</html>