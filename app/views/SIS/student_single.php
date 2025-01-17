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
                                    <div class="card-header p-2 text-xs">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#basic_info" data-bs-toggle="tab">Basic Info</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#attendance" data-bs-toggle="tab">Attendance</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#subject_details" data-bs-toggle="tab">Subject Details</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#document" data-bs-toggle="tab">Documents</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#payroll" data-bs-toggle="tab">Results</a></li>

                                            <li class="nav-item"><a class="nav-link" href="#notice" data-bs-toggle="tab">Fees</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body ">
                                        <!-- BASIC INFO -->
                                        <div class="tab-content text-xs">
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
                                            <!-- BASIC INFO ENDS -->


                                            <!-- ATTENDANCE -->
                                            <div class="tab-pane" id="attendance">
                                                <div class="card-header">
                                                    <div class="row text-xs">
                                                        <div class="col-12 col-md-12 ">
                                                            <!-- <label>Attandance Month: <span>June</span></label> -->

                                                            <div class="float-right">
                                                                <label>Select Financial Year </label>
                                                                <select class="p-2 mr-2" style="border-radius: 50px;">
                                                                    <option>2023-24</option>
                                                                    <option>2024-25</option>
                                                                    <option>2025-26</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body " id="attendaceDetails">
                                                    <section class="content">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-12  col-md-3  mb-8 mt-8">

                                                                    <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                        <div>
                                                                            January
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <span class="text-green text-xs m-1">Class Attended: 12</span>
                                                                            <span class="text-red text-xs m-1">Total Classes: 10 </span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-12 col-md-3  mb-8 mt-8">

                                                                    <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                        <div>
                                                                            February
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <span class="text-green text-xs m-1">Class Attended: 12</span>
                                                                            <span class="text-red text-xs m-1">Total Classes: 10 </span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-12  col-md-3  mb-8 mt-8">

                                                                    <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                        <div>
                                                                            March
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <span class="text-green text-xs m-1">Class Attended: 12</span>
                                                                            <span class="text-red text-xs m-1">Total Classes: 10 </span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-12 col-md-3 smb-8 mt-8">

                                                                    <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                        <div>
                                                                            April
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <span class="text-green text-xs m-1">Class Attended: 12</span>
                                                                            <span class="text-red text-xs m-1">Total Classes: 10 </span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row">


                                                                <div class="col-md-3">
                                                                    <div class="sticky-top mb-3">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h4 class="card-title">Subject</h4>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <!-- the events -->
                                                                                <div id="external-events">
                                                                                    <div class="external-event bg-success">COA</div>
                                                                                    <div class="external-event bg-warning">DSA</div>
                                                                                    <div class="external-event bg-info">C++</div>
                                                                                    <div class="external-event bg-primary">C</div>
                                                                                    <div class="external-event bg-danger">OS</div>
                                                                                    <div class="checkbox">
                                                                                        <label for="drop-remove">
                                                                                            <input type="checkbox" id="drop-remove">
                                                                                            remove after drop
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                        </div>
                                                                        <!-- /.card -->
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Create Event</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                                                                    <ul class="fc-color-picker" id="color-chooser">
                                                                                        <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                                                                        <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                                                                        <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                                                                        <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                                                                        <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <!-- /btn-group -->
                                                                                <div class="input-group">
                                                                                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                                                                                    <div class="input-group-append">
                                                                                        <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                                                                                    </div>
                                                                                    <!-- /btn-group -->
                                                                                </div>
                                                                                <!-- /input-group -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-md-9">
                                                                    <div class="card card-primary">
                                                                        <div class="card-body p-0">
                                                                            <!-- THE CALENDAR -->
                                                                            <div id="calendar"></div>
                                                                        </div>
                                                                        <!-- /.card-body -->
                                                                    </div>
                                                                    <!-- /.card -->
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div><!-- /.container-fluid -->
                                                    </section>
                                                </div>
                                            </div>
                                            <!-- ATTENDANCE SECTION ENDS -->

                                            <!-- SUBJECT DETAIL SECTION -->
                                            <div class="tab-pane" id="subject_details">
                                                <div class="card-body">
                                                    <div id="accordion">
                                                        <div class="card card-outline card-primary">

                                                            <div class="card-header">
                                                                <h4 class="card-title w-100">
                                                                    <a class="d-block w-100" data-bs-toggle="collapse" href="#collapseOne">
                                                                        Semester 1
                                                                        <div class="float-right">
                                                                            <i class="fas fa-plus-circle"></i>
                                                                        </div>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="collapse show" data-bs-parentt="#accordion">
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

                                                                        <div class="float-right">
                                                                            <i class="fas fa-plus-circle"></i>
                                                                        </div>
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
                                                                        <div class="float-right">
                                                                            <i class="fas fa-plus-circle"></i>
                                                                        </div>
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
                                                                        <div class="float-right">
                                                                            <i class="fas fa-plus-circle"></i>
                                                                        </div>
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
                                            <!-- SUBJECT DETAILS SECTION END -->

                                            <!-- DOCUMENT SECTION -->
                                            <div class="tab-pane" id="document">
                                                <div class="card-body">
                                                    <div class="col-md-12">
                                                        <div class="card card-outline card-primary">
                                                            <div class="card-header text-uppercase">
                                                                Certificates & Marksheet
                                                            </div>
                                                            <div class="card-body ">
                                                                <table class="table table-bordered table-hovered">
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Name</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Birth Certificate</td>
                                                                            <td><a href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download class="btn btn-outline-info"><i class="fa fa-file-pdf"></i></a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>HSLC Marksheet</td>
                                                                            <td><a href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download class="btn btn-outline-info"><i class="fa fa-file-pdf"></i></a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>HS Marksheet</td>
                                                                            <td><a href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download class="btn btn-outline-info"><i class="fa fa-file-pdf"></i></a></td>
                                                                        </tr>
                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <!-- DOCUMENT SECTION ENDS -->

                                            <div class="tab-pane" id="payroll">
                                                <div class="card-body">
                                                    <div class="col-md-12">
                                                        <div class="card card-outline card-primary">
                                                            <div class="card-header text-uppercase">
                                                                Results
                                                            </div>
                                                            <div class="card-body ">
                                                                <table class="table table-bordered table-hovered">
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Semester</th>
                                                                        <th>Marksheet</th>
                                                                    </tr>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>1st</td>
                                                                            <td><a href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download class="btn btn-outline-info"><i class="fa fa-file-pdf"></i></a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>2nd</td>
                                                                            <td><a href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download class="btn btn-outline-info"><i class="fa fa-file-pdf"></i></a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>3rd</td>
                                                                            <td><a href="<?php echo BASE_URL; ?>/img/pdf/UPSC_CSE_Mains_Syllabus.pdf" download class="btn btn-outline-info"><i class="fa fa-file-pdf"></i></a></td>
                                                                        </tr>
                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane" id="notice">
                                                <div class="card-body">
                                                    <div class="card card-outline card-success">
                                                        <div class="card-header">
                                                            <h4 class="card-title w-100 ">
                                                                <a class="d-block w-100 text-success" data-bs-toggle="collapse" href="#fee1">
                                                                    Semester 1 Fee Details
                                                                    <div class="float-right">
                                                                        <i class="fas fa-plus-circle"></i>
                                                                    </div>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="fee1" class="collapse show" data-bs-parentt="#accordion">

                                                            <div class="card-body">
                                                                <table class="table table-bordered text-xs p-0 m-0">

                                                                    <tr>

                                                                        <th>#</th>
                                                                        <th>Info</th>
                                                                        <th>Total Price</th>
                                                                        <th>Amount Paid</th>
                                                                        <th>Discount(%)</th>
                                                                        <th>Amount Due</th>


                                                                    </tr>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Admission Fee</td>
                                                                            <td>45000</td>
                                                                            <td>10000</td>
                                                                            <td>N/A</td>
                                                                            <td>35000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>Semester 1</td>
                                                                            <td>10000</td>
                                                                            <td>5000</td>
                                                                            <td>50%</td>
                                                                            <td>0</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>Semester 2</td>
                                                                            <td>10000</td>
                                                                            <td>4000</td>
                                                                            <td>50%</td>
                                                                            <td>1000</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>Semester 3</td>
                                                                            <td>10000</td>
                                                                            <td>Not yet attended</td>
                                                                            <td>50%</td>
                                                                            <td>N/A</td>

                                                                        </tr>
                                                                    </tbody>
                                                                    <tfoot class="text-uppercase text-dark form-group">
                                                                        <tr>
                                                                            <th colspan="5" class="text-right">Total Amount</th>
                                                                            <th>36000</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="5" class="text-right">Already Paid

                                                                            </th>
                                                                            <th>3600</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="5" class="text-right">Due Amount</th>
                                                                            <th>0/-</th>
                                                                        </tr>

                                                                    </tfoot>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card card-outline card-danger">
                                                        <div class="card-header">
                                                            <h4 class="card-title w-100 ">
                                                                <a class="d-block w-100 text-danger" data-bs-toggle="collapse" href="#fee2">
                                                                    Semester 2 Fee Details
                                                                    <div class="float-right">
                                                                        <i class="fas fa-plus-circle"></i>
                                                                    </div>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="fee2" class="collapse" data-bs-parentt="#accordion">

                                                            <div class="card-body">
                                                                <table class="table table-bordered text-xs p-0 m-0">

                                                                    <tr>

                                                                        <th>#</th>
                                                                        <th>Info</th>
                                                                        <th>Total Price</th>
                                                                        <th>Amount Paid</th>
                                                                        <th>Discount(%)</th>
                                                                        <th>Amount Due</th>


                                                                    </tr>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Admission Fee</td>
                                                                            <td>45000</td>
                                                                            <td>10000</td>
                                                                            <td>N/A</td>
                                                                            <td>35000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>Semester 1</td>
                                                                            <td>10000</td>
                                                                            <td>5000</td>
                                                                            <td>50%</td>
                                                                            <td>0</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>Semester 2</td>
                                                                            <td>10000</td>
                                                                            <td>4000</td>
                                                                            <td>50%</td>
                                                                            <td>1000</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>Semester 3</td>
                                                                            <td>10000</td>
                                                                            <td>Not yet attended</td>
                                                                            <td>50%</td>
                                                                            <td>N/A</td>

                                                                        </tr>
                                                                    </tbody>
                                                                    <tfoot class="text-uppercase text-dark form-group">
                                                                        <tr>
                                                                            <th colspan="5" class="text-right">Total Amount</th>
                                                                            <th>36000</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="5" class="text-right">Already Paid

                                                                            </th>
                                                                            <th>1600</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="5" class="text-right">Due Amount</th>
                                                                            <th>26000/-</th>
                                                                        </tr>

                                                                    </tfoot>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

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


    <script>
        function getAttendanceDetailsByFinYear() {
            $('#attendaceDetails').show();
        }

        function resetAttendanceDetailsByFinYear() {
            $('#attendaceDetails').hide();
        }
        $(function() {

            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
                ele.each(function() {

                    // create an Event Object (https://fullcalendar.io/docs/event-object)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0 //  original position after the drag
                    })

                })
            }

            ini_events($('#external-events div.external-event'))

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;

            var containerEl = document.getElementById('external-events');
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');

            // initialize the external events
            // -----------------------------------------------------------------

            new Draggable(containerEl, {
                itemSelector: '.external-event',
                eventData: function(eventEl) {
                    return {
                        title: eventEl.innerText,
                        backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                        borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                        textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                    };
                }
            });

            var calendar = new Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                themeSystem: 'bootstrap',
                //Random default events
                events: [{
                        title: 'All Day Event',
                        start: new Date(y, m, 1),
                        backgroundColor: '#f56954', //red
                        borderColor: '#f56954', //red
                        allDay: true
                    },
                    {
                        title: 'Long Event',
                        start: new Date(y, m, d - 5),
                        end: new Date(y, m, d - 2),
                        backgroundColor: '#f39c12', //yellow
                        borderColor: '#f39c12' //yellow
                    },
                    {
                        title: 'Meeting',
                        start: new Date(y, m, d, 10, 30),
                        allDay: false,
                        backgroundColor: '#0073b7', //Blue
                        borderColor: '#0073b7' //Blue
                    },
                    {
                        title: 'Lunch',
                        start: new Date(y, m, d, 12, 0),
                        end: new Date(y, m, d, 14, 0),
                        allDay: false,
                        backgroundColor: '#00c0ef', //Info (aqua)
                        borderColor: '#00c0ef' //Info (aqua)
                    },
                    {
                        title: 'Birthday Party',
                        start: new Date(y, m, d + 1, 19, 0),
                        end: new Date(y, m, d + 1, 22, 30),
                        allDay: false,
                        backgroundColor: '#00a65a', //Success (green)
                        borderColor: '#00a65a' //Success (green)
                    },
                    {
                        title: 'Click for Google',
                        start: new Date(y, m, 28),
                        end: new Date(y, m, 29),
                        url: 'https://www.google.com/',
                        backgroundColor: '#3c8dbc', //Primary (light-blue)
                        borderColor: '#3c8dbc' //Primary (light-blue)
                    }
                ],
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function(info) {
                    // is the "remove after drop" checkbox checked?
                    if (checkbox.checked) {
                        // if so, remove the element from the "Draggable Events" list
                        info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }
                }
            });

            calendar.render();
            // $('#calendar').fullCalendar()

            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
            // Color chooser button
            $('#color-chooser > li > a').click(function(e) {
                e.preventDefault()
                // Save color
                currColor = $(this).css('color')
                // Add color effect to button
                $('#add-new-event').css({
                    'background-color': currColor,
                    'border-color': currColor
                })
            })
            $('#add-new-event').click(function(e) {
                e.preventDefault()
                // Get value and make sure it is not null
                var val = $('#new-event').val()
                if (val.length == 0) {
                    return
                }

                // Create events
                var event = $('<div />')
                event.css({
                    'background-color': currColor,
                    'border-color': currColor,
                    'color': '#fff'
                }).addClass('external-event')
                event.text(val)
                $('#external-events').prepend(event)

                // Add draggable funtionality
                ini_events(event)

                // Remove event from text input
                $('#new-event').val('')
            })
        })
    </script>

</body>

</html>