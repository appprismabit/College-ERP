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



    <style>
        .card {
            text-decoration: none;
            color: black;
        }
    </style>




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
                                        <i class="fa fa-user-circle" aria-hidden="true"></i> Faculty Profile
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">

                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/dashboard/index">Home</a></li>
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/faculty/index">Faculty List</a></li>
                                            <li class="breadcrumb-item active">Faculty Profile</li>
                                        </ol>
                                    </div><!-- /.col -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
                <!-- /.content-header -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">

                                <!-- Profile Image -->
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="<?php echo BASE_URL; ?>/dist/img/user4-128x128.jpg"
                                                alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center">Faculty</h3>

                                        <p class="text-muted text-center"></p>

                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>Department</b> <a class="float-right">BCA</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Employee ID</b> <a class="float-right">TID001</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Designation </b> <a class="float-right">Asst. Professor</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Date of Joining </b> <a class="float-right">01/03/2021</a>
                                            </li>
                                        </ul>

                                       
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
                                        <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                        <p class="text-muted">
                                            B.S. in Computer Science from the University of
                                        </p>

                                        <hr>

                                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                        <p class="text-muted">Guwahati, Assam</p>

                                        <hr>

                                        <strong><i class="fas fa-pencil-alt mr-1"></i> Subjects Specialization</strong>

                                        <p class="text-muted">
                                            <span class="tag tag-danger">UI Design</span>
                                            <span class="tag tag-success">Coding</span>
                                            <span class="tag tag-info">Javascript</span>
                                            <span class="tag tag-warning">PHP</span>
                                            <span class="tag tag-primary">Node.js</span>
                                        </p>

                                        <hr>

                                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
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
                                            <li class="nav-item"><a class="nav-link active" href="#workload" data-bs-toggle="tab">Workload & Schedule</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#attendance" data-bs-toggle="tab">Attendance & Leave</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#feedback" data-bs-toggle="tab">Student Feedback</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#performance" data-bs-toggle="tab">Performance & Appraisal</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#payroll" data-bs-toggle="tab">Payroll & Benefits</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#documents" data-bs-toggle="tab">Documents</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#notice" data-bs-toggle="tab">Notifications & Remarks</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content ">
                                            <div class="active tab-pane" id="workload">
                                                <div class="card-body">
                                                    <section class="content">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="sticky-top mb-3">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h4 class="card-title">Tasks</h4>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <!-- the events -->
                                                                                <div id="external-events">
                                                                                    <div class="external-event bg-success">Lunch</div>
                                                                                    <div class="external-event bg-warning">Go home</div>
                                                                                    <div class="external-event bg-info">Do homework</div>
                                                                                    <div class="external-event bg-primary">Work on UI design</div>
                                                                                    <div class="external-event bg-danger">Sleep tight</div>
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
                                            <div class=" tab-pane" id="attendance">
                                                <div class="card-header">
                                                    <div class="form-group">
                                                        <label for="">Select Financial Year</label>
                                                        <select class="form-control" name="" id="">
                                                            <option>2023-24</option>
                                                            <option selected>2024-25</option>
                                                            <option>2025-26</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">

                                                        <div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2 mb-8 mt-8">

                                                            <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                <div>
                                                                    Casual Leave (CL)
                                                                </div>
                                                                <div class="d-flex">
                                                                    <span class="text-green text-xs m-1">Applicable: 12</span>
                                                                    <span class="text-red text-xs m-1">Remaining: 10 </span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2 mb-8 mt-8">

                                                            <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                <div>
                                                                    Earned Leave (EL)
                                                                </div>
                                                                <div class="d-flex">
                                                                    <span class="text-green text-xs m-1">Applicable: 12</span>
                                                                    <span class="text-red text-xs m-1">Remaining: 10 </span>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2 mb-8 mt-8">

                                                            <div class="card shadow-lg text-center p-2 card-outline card-primary">
                                                                <div>
                                                                    Medical Leave (ML)
                                                                </div>
                                                                <div class="d-flex">
                                                                    <span class="text-green text-xs m-1">Applicable: 12</span>
                                                                    <span class="text-red text-xs m-1">Remaining: 10 </span>
                                                                </div>
                                                            </div>

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
            <?php include BASE_PATH . '/layout/footer.php'; ?>
        </div>
        <!-- /.content-wrapper -->
       

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