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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/css/style.css">








</head>

<body>

    <div class="hold-transition sidebar-mini sidebar-collapse">
        <div class="loader-overlay">
            <div class="loader"></div>
        </div>
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
                                    <div class="col-sm-6" style="color : black">
                                        <i class="fas fa-user-circle fa-md"></i> Student List
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">

                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/dashboard/index">Home</a></li>
                                            <li class="breadcrumb-item "><a href="<?php echo BASE_URL; ?>/sis/index">SIS</a></li>
                                            <li class="breadcrumb-item "><a href="<?php echo BASE_URL; ?>/sis/student_list">Student List</a></li>
                                        </ol>
                                    </div><!-- /.col -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content text-sm">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-outline card-primary">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <label>Select Department</label>
                                                <select class="form-control" id="department" name="department">
                                                    <option>Department 1</option>
                                                    <option>Department 2</option>
                                                    <option>Department 3</option>
                                                    <option>Department 4</option>
                                                    <option>Department 5</option>
                                                    <option>Department 6</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label>Select Course</label>
                                                <select class="form-control" id="department" name="department">
                                                    <option>All</option>
                                                    <option>MCA</option>
                                                    <option>BCA</option>

                                                </select>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label>Batch</label>
                                                <select class="form-control" id="department" name="department">
                                                    <option>2024</option>
                                                    <option>2025</option>
                                                    <option>2026</option>

                                                </select>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label>&nbsp;</label>
                                                <button type="button" class="btn btn-primary form-control">Submit </button>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-hovered">
                                            <thead class="bg-dark">
                                                <tr>
                                                    <th>Enrollment Number</th>
                                                    <th>Roll No</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>Course</th>
                                                    <th>Semester</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9868637</td>
                                                    <td>2025/mca/009</td>
                                                    <td>Mir Kashem Ali </td>
                                                    <td>Male</td>
                                                    <td>MCA</td>
                                                    <td>Semester 1</td>
                                                    <td><a href="<?php echo BASE_URL; ?>/sis/student_single" class="btn btn-info btn-sm">Profile</a></td>
                                                </tr>
                                                <tr>
                                                    <td>9862337</td>
                                                    <td>2025/mca/019</td>
                                                    <td>Alakesh Gogoi </td>
                                                    <td>Female</td>
                                                    <td>MCA</td>
                                                    <td>Semester 1</td>
                                                    <td><a href="<?php echo BASE_URL; ?>/sis/student_single" class="btn btn-info btn-sm">Profile</a></td>
                                                </tr>
                                                <tr>
                                                    <td>9868637</td>
                                                    <td>2025/mca/009</td>
                                                    <td>Kabyashree Buragohain </td>
                                                    <td>Female</td>
                                                    <td>MCA</td>
                                                    <td>Semester 1</td>
                                                    <td><a href="<?php echo BASE_URL; ?>/sis/student_single" class="btn btn-info btn-sm">Profile</a></td>
                                                </tr>
                                                <tr>
                                                    <td>9868637</td>
                                                    <td>2025/mca/009</td>
                                                    <td>Himasree Das</td>
                                                    <td>Male</td>
                                                    <td>MCA</td>
                                                    <td>Semester 1</td>
                                                    <td><a href="<?php echo BASE_URL; ?>/sis/student_single" class="btn btn-info btn-sm">Profile</a></td>
                                                </tr>
                                            </tbody>


                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php include BASE_PATH . '/layout/footer.php'; ?>

        </div>
    </div>
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