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



    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/custom/css/ol.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/loaders/loader-progress.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/css/style.css">






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
                                        <i class="fas fa-book me-2"></i> Master Of Computer Applications
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">

                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/dashboard/index">Home</a></li>
                                            <li class="breadcrumb-item "><a href="<?php echo BASE_URL; ?>/course/index">Courses</a></li>
                                            <li class="breadcrumb-item active"><a href="<?php echo BASE_URL; ?>/course/course_single">MCA</a></li>
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
                            <div class="col-12 col-md-8">

                                <div class="card text-sm">
                                    <div class="card-body">
                                        <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                                        <div id="accordion">
                                            <div class="card card-outline card-primary">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        <a class="d-block w-100" data-bs-toggle="collapse" href="#collapseOne">
                                                            Semester 1
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="collapse" data-bs-parentt="#accordion">
                                                    <div class="card-body">
                                                        <table class="table table-bordered table-hovered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sl No</th>
                                                                    <th>Subject Name</th>
                                                                    <th>Subject Code</th>
                                                                    <th>Syallabus</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Subject1</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Subject2</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Subject3</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Subject4</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>
                                                                </tr>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card card-outline card-primary">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        <a class="d-block w-100" data-bs-toggle="collapse" href="#collapseTwo">
                                                            Semester 2
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <table class="table table-bordered table-hovered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sl No</th>
                                                                    <th>Subject Name</th>
                                                                    <th>Subject Code</th>
                                                                    <th>Syallabus</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Subject1</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Subject2</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Subject3</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Subject4</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-outline card-primary">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        <a class="d-block w-100" data-bs-toggle="collapse" href="#collapseThree">
                                                            Semester 3
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <table class="table table-bordered table-hovered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sl No</th>
                                                                    <th>Subject Name</th>
                                                                    <th>Subject Code</th>
                                                                    <th>Syallabus</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Subject1</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Subject2</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Subject3</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Subject4</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-outline card-primary">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        <a class="d-block w-100" data-bs-toggle="collapse" href="#collapseFour">
                                                            Semester 4
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <table class="table table-bordered table-hovered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sl No</th>
                                                                    <th>Subject Name</th>
                                                                    <th>Subject Code</th>
                                                                    <th>Syallabus</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Subject1</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Subject2</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Subject3</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Subject4</td>
                                                                    <td>MCA-101</td>
                                                                    <td><a class="btn btn-outline-info btn-sm" href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download>Download Syallbus</a></td>

                                                                </tr>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card card-outline card-success text-sm">
                                    <div class="card-header">
                                        <i class="fas fa-plus-circle"></i> Add Subjects
                                    </div>

                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col-md-12 p-1">
                                                <label>Select Semester</label>
                                                <select class="form-control">
                                                    <option>Sem 1</option>
                                                    <option>Sem 2</option>
                                                    <option>Sem 3</option>
                                                    <option>Sem 4</option>
                                                    <option>Sem 5</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 p-1">
                                                <label>Name of the Subject</label>
                                                <input type="text" id="title_faculty" class="form-control" placeholder="Name of the subject">
                                            </div>
                                            <div class="col-md-12 p-1">
                                                <label>Enter Subject Code</label>
                                                <input type="text" id="title_faculty" class="form-control" placeholder="Name of the subject">
                                            </div>
                                            <div class="col-md-12 p-1">
                                                <label>Upload Syallbus</label>
                                                <input type="file" id="title_faculty" class="form-control" placeholder="Icon">
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