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
    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fullcalendar/main.css">
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

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>








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
                                    <div class="col-sm-6">
                                        <i class="fa fa-user-circle" aria-hidden="true"></i> Student Profile
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">

                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/dashboard/index">Home</a></li>
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/sis/index">Student List</a></li>
                                            <li class="breadcrumb-item active">Student Profile</li>
                                        </ol>
                                    </div><!-- /.col -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
                <!-- /.content-header -->
                <section class="content text-sm">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">

                                <!-- Profile Image -->
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="<?php echo BASE_URL; ?>/dist/img/avatar5.png"
                                                alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center"></h3>

                                        <p class="text-muted text-center">Student</p>
                                        <p class="text-muted text-center">87812376</p>

                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>Name</b> <a class="float-right">Mir Kashem Ali </a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Department</b> <a class="float-right">Computer Science</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Course</b> <a class="float-right">MCA</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Roll No</b> <a class="float-right">2021/MCA/0002</a>
                                            </li>

                                            <li class="list-group-item">
                                                <b>Date of Admission </b> <a class="float-right">01/03/2021</a>
                                            </li>
                                        </ul>

                                        <a href="#" class="btn btn-primary btn-block"><b>Block</b></a>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <!-- About Me Box -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">About </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <strong><i class="fas fa-book mr-1"></i> HSLC</strong>

                                        <p class="text-muted">
                                            Demo Public School
                                        </p>


                                        <hr>
                                        <strong><i class="fas fa-book mr-1"></i> HS</strong>
                                        <p class="text-muted">
                                            <b>Stream </b> <a class="float-right">Science</a>

                                        </p>
                                        <p class="text-muted">
                                            University of Demo
                                        </p>

                                        <hr>

                                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                        <p class="text-muted">Guwahati, Assam</p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header p-2 text-sm">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#basic_info" data-bs-toggle="tab">Basic Info</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#attendance" data-bs-toggle="tab">Attendance</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#feedback" data-bs-toggle="tab">Subject Details</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#performance" data-bs-toggle="tab">Documents</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#payroll" data-bs-toggle="tab">Results</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#documents" data-bs-toggle="tab">Documents</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#notice" data-bs-toggle="tab">Fees</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body ">
                                        <div class="tab-content ">
                                            <div class="active tab-pane" id="basic_info">
                                                <div class="card">
                                                    <div class="card-body text-xs">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <i class="fas fa-user fa-sm"></i> <b>Father Name:</b><span> xyz</span><br>
                                                                <i class="fa fa-phone" style="transform: rotate(90deg);"></i> <span>9954809536</span>
                                                                <hr>
                                                                <b>Email:</b> <span>Demo@gmail.com</span><br>
                                                                <b>Nationality:</b> <span>Indian</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <i class="fas fa-user fa-sm"></i> <b>Mother Name:</b><span> xyz</span><br>
                                                                <i class="fa fa-phone" style="transform: rotate(90deg);"></i> <span>9954809536</span>
                                                                <hr>
                                                                <b>Phone:</b> <span>9954809536</span><br>
                                                                <b>State:</b> <span>Indian</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="attendance">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Select Financial Year</label>
                                                            <select class="form-control">
                                                                <option>Select Financial Year</option>
                                                                <option value="Present">2020-21</option>
                                                                <option value="Present">2021-22</option>
                                                                <option value="Present">2022-23</option>
                                                                <option value="Select">2024-25</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>&nbsp;</label>
                                                            <button type="button" class="btn btn-primary form-control">Get Details</button>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-6 col-sm-6 col-md-3 mb-8 mt-8">
                                                            <a href="">
                                                                <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                    <div>
                                                                        January
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <span class="text-green text-xs m-1">Class Attended: 12</span>
                                                                        <span class="text-red text-xs m-1">Total Class: 12</span>

                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>
                                                        <div class="col-6 col-sm-6 col-md-3 mb-8 mt-8">
                                                            <a href="">
                                                                <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                    <div>
                                                                        February
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <span class="text-green text-xs m-1">Class Attended: 2</span>
                                                                        <span class="text-red text-xs m-1">Total Class: 12</span>
                                                                    </div>
                                                                </div>
                                                            </a>


                                                        </div>
                                                        <div class="col-6 col-sm-6 col-md-3 mb-8 mt-8">
                                                            <a href="">
                                                                <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                    <div>
                                                                        March
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <span class="text-green text-xs m-1">Class Attended: 8</span>
                                                                        <span class="text-red text-xs m-1">Total Class: 12</span>

                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-6 col-sm-6 col-md-3 mb-8 mt-8">
                                                            <a href="">
                                                                <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                    <div>
                                                                        April
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <span class="text-green text-xs m-1">Class Attended: 9</span>
                                                                        <span class="text-red text-xs m-1">Total Class: 12</span>

                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-6 col-sm-6 col-md-3 mb-8 mt-8">
                                                            <a href="">
                                                                <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                    <div>
                                                                        May
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <span class="text-green text-xs m-1">Class Attended: 10</span>
                                                                        <span class="text-red text-xs m-1">Total Class: 12</span>

                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="feedback">
                                                <div class="card-body">
                                                    Student Feedback
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="performance">
                                                <div class="card-body">
                                                    Performance & Appraisal
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="payroll">
                                                <div class="card-body">
                                                    Payroll & Benefits
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="documents">
                                                <div class="card-body">
                                                    Documents
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="notice">
                                                <div class="card-body">
                                                    Notifications & Remarks
                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            </div><!-- /.container-fluid -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include BASE_PATH . '/layout/footer.php'; ?>
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
    <!-- fullCalendar 2.2.5 -->
    <script src="<?php echo BASE_URL; ?>/plugins/fullcalendar/main.js"></script>
    <script src="<?php echo BASE_URL; ?>/dist/js/pages/dashboard.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/loaders/init.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/custom/custom.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/toastr/toastr.min.js"></script>
</body>

</html>