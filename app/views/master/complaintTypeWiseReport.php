<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&nbsp;</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2/css/select2.min.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <style>
        #loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);

            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Loader styling */
        .loader1 {
            border: 8px solid #f3f3f3;
            /* Light gray */
            border-top: 8px solid green;
            /* Blue */
            border-radius: 50%;
            width: 100px;
            height: 100px;
            animation: spin 1s linear infinite;
        }

        /* Spin animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <?php include BASE_PATH . '/layout/header.php'; ?>
        <?php include BASE_PATH . '/layout/aside.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <section class="content text-sm mt-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card text-sm">
                                <div class="card-header">




                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="card-title">
                                                <a href="<?php echo BASE_URL; ?>/master/index">
                                                    <button <?php if ($_SESSION['role'] != 1) {
                                                                echo $hide;
                                                            } ?> type="button" class="btn btn-success btn-sm">
                                                        Back
                                                    </button>
                                                </a>
                                            </h3>
                                            <div class="w-100 text-center " style="font-size: 30px;">
                                                <span class="text-uppercase" id="fromDateAndTodateText"></span>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-3">
                                            <label>From Date</label>
                                            <input class="form-control mr-2" type="date" id="fromDate">
                                        </div>
                                        <div class="col-3">
                                            <label>To Date</label>
                                            <input class="form-control mr-2" type="date" id="toDate">
                                        </div>
                                        <div class="col-3">
                                            <label>Select Complaint Type</label>
                                            <select class="form-control" id="complaintType">

                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label>&nbsp;</label>
                                            <button type="button" class="btn btn-success form-control" onclick="showComplaintTypeReportByDate()">
                                                Show Details
                                            </button>
                                        </div>

                                    </div>

                                </div>


                                <div id="loader-overlay" style="display: none;">
                                    <div class="loader1"></div>
                                </div>


                                <div class="card-body">
                                    <table id="example1" class="table table-bordered">
                                        <thead class="bg-dark border-bottom ">
                                            <tr class="text-center">
                                                <th>Complaint Number</th>
                                                <th>Created</th>
                                                <th>Description</th>
                                                <th>Area</th>
                                                <th>Completed</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-light">
                                            <!-- Table rows will be dynamically populated here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <?php include BASE_PATH . '/layout/footer.php'; ?>
    </div>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="<?php echo BASE_URL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/dashboard/indexplugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="<?php echo BASE_URL; ?>/dist/js/adminlte.js"></script>

    <script src="<?php echo BASE_URL; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/select2/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/select2/js/select2.full.min.js"></script>

    <script src="<?php echo BASE_URL; ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/custom/custom.js"></script>
    <script src="<?php echo BASE_URL; ?>/dist/js/pages/dashboard.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/sweetalert/sweetalert.js"></script>

    <script>
        $(document).ready(function() {
            // Set default date range on page load
            const today = new Date();
            const sevenDaysAgo = new Date();
            sevenDaysAgo.setDate(today.getDate() - 7);

            const formatDate = (date) => {
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, '0');
                const day = String(date.getDate()).padStart(2, '0');
                return `${year}-${month}-${day}`;
            };

            $('#fromDate').val(formatDate(sevenDaysAgo));
            $('#toDate').val(formatDate(today));

            // Fetch technicians, set default value, then show report
            fetchComplaintDescription(() => {
                $('#complaintType').val('1'); // Ensure "all" is selected
                showComplaintTypeReportByDate();
            });

            // Initialize DataTable
            var table = $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                buttons: [

                    'excel',

                    {
                        extend: 'print',
                        text: 'Print',
                        customize: function(win) {
                            // Remove the title element to prevent it from being printed
                            $(win.document.head).find('title').remove();

                            // Ensure the title section (fromDateAndTodateText) is also printed
                            var reportHeader = $('#fromDateAndTodateText').html();
                            $(win.document.body).prepend(`
                    <div class="w-100 text-center" style="font-size: 30px;">
                        <span class="text-uppercase">${reportHeader}</span>
                    </div>
                `);

                            // Apply styles to print view
                            $(win.document.body).css('font-size', '10pt');
                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');

                            $(win).on('afterprint', function() {
                                const originalTitle = $('<title>').text('Technician Report');
                                $(win.document.head).append(originalTitle);
                            });
                        }
                    },
                    'colvis'
                ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        // Fetch technicians and execute callback after completion
        function fetchComplaintDescription(callback) {
            $.ajax({
                url: "<?php echo BASE_URL; ?>/master/getAllComplaintDescription",
                type: "POST",
                success: function(response) {
                    try {
                        response = JSON.parse(response);
                        var select = $('#complaintType');
                        select.empty();
                        select.append('<option value="">-- SELECT TECHNICIAN --</option>');


                        $.each(response.data, function(index, data) {
                            select.append('<option value="' + data.id + '">' + data.title + '</option>');
                        });

                        // Execute callback after dropdown is populated
                        if (typeof callback === "function") callback();
                    } catch (error) {
                        console.error('Error parsing JSON:', error);
                    }
                },
                error: function() {
                    console.error('Error fetching technicians');
                }
            });
        }

        // Show technician report based on selected date range and technician
        function showComplaintTypeReportByDate() {
            const from_Date = $('#fromDate').val();
            const to_Date = $('#toDate').val();
            const complaintDescriptionId = $('#complaintType').val();
            const complaintDescripitonName = $('#complaintType option:selected').text();

            if (!from_Date || !to_Date || !complaintDescriptionId) {
                swal({
                    title: "Empty Fields",
                    text: "Please enter all fields",
                    icon: "error",
                    dangerMode: true
                });
                return;
            }

            const formatToDMY = (dateStr) => {
                const date = new Date(dateStr);
                const day = String(date.getDate()).padStart(2, '0');
                const month = String(date.getMonth() + 1).padStart(2, '0');
                const year = date.getFullYear();
                return `${day}-${month}-${year}`;
            };



            $('#fromDateAndTodateText').text(complaintDescripitonName + " Report From " + formatToDMY(from_Date) + " to " + formatToDMY(to_Date));



            const fromDate = from_Date + ' 00:00:00';
            const toDate = to_Date + ' 23:59:59';

            $.ajax({
                url: "<?php echo BASE_URL ?>/master/showDetailsCompaintDescriptionWise",
                type: "POST",
                data: {
                    fromDate: fromDate,
                    toDate: toDate,
                    complaintDescriptionId: complaintDescriptionId
                },
                success: function(response) {
                    response = JSON.parse(response);

                    if (response.success) {
                        var table = $("#example1").DataTable();
                        table.clear().draw();
                        response.data.forEach((complaints) => {
                            var complaint_status = getStatusTask(parseInt(complaints.status));
                            table.row.add([
                                complaints.complaintnumber,
                                new Date(complaints.created).toLocaleDateString('en-GB'),
                                complaints.description,
                                complaints.area || 'N/A',
                                complaints.completed || 'N/A',
                                complaint_status,
                                '<i class="fas fa-arrow-right action-icon" onclick="all_complaints_single(' + complaints.complaint_id + ')"></i>'
                            ]).draw(false);
                        });


                    }
                },
                error: function() {
                    alert('An error occurred while fetching the report. Please try again.');
                }
            });
        }

        function all_complaints_single(complaint_id) {
            var form = $('<form>', {
                'action': '<?php echo BASE_URL; ?>/router/complaintTypeWise',
                'method': 'POST',
            }).append($('<input>', {
                'type': 'hidden',
                'name': 'route_complaints',
                'value': complaint_id
            }));
            $('body').append(form);
            form.submit();
        }
    </script>

    <script src="./includes/js/add_stock.js"></script>
</body>

</html>