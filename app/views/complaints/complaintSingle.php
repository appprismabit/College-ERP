<?php
//NOTE DO NOT COPY PASTE ENTIRE COMPLAINT SINGLE BECAUSE SERVER AND LOCALHOST HAVE SOME CHANGES
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complaints</title>
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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/ekko-lightbox/ekko-lightbox.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/loaders/loader-progress.css">



    <style>
        .table-wrapper {
            max-height: 500px;
            overflow-y: auto;
        }

        .table {
            margin-bottom: 0;
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
            <section class="content text-sm">
                <div class="container-fluid">

                    <div class="card text-sm mt-3">
                        <h3 class="card-title pl-2 pt-2">
                            <a href="<?php echo $_SESSION['from']; ?>">
                                <button type="button" class="btn btn-success btn-sm">
                                    Back
                                </button>
                            </a>
                        </h3>
                        <div class="card-header">

                            <div class="row mt-3">
                                <div class="col-6">
                                    <h3 class="text-bold" id="comNumber"></h3>
                                    <h5 class="text-uppercase" id="address"></h5>
                                    <h5 class="text-uppercase" id="area"></h5>
                                    <h5 class="text-uppercase" id="contactInfo"></h5>

                                </div>
                                <div class="col-6">
                                    <h3 class="text-bold" id="comNumber"></h3>

                                    <h4 class="text-uppercase text-bold " id="status"></h4>
                                    <h5 class=" text-red" id="countdown"></h5>
                                    <h5 class=" text-red" id="timeTakenForCompletingTherTask" style="display:none;"></h5>

                                    <!-- MUR LOADER -->
                                    <div class="loader-overlay">
                                        <div class="loader"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-6">

                            <div class="card">
                                <td><button type="button" class="btn btn-dark text-uppercase text-bold"> Technician Assigned</button></td>
                                </button></td>
                                <div class="card-header">
                                    <td><button type="button" class="btn btn-danger float-right" data-toggle="modal" id="assgnTechnicianBtn" data-target="#exampleModal"><i class="fa fa-user"></i> &nbsp Assign Technician</button></td>
                                    </button></td>
                                </div>
                                <div class="card-body">
                                    <div class="table-wrapper">
                                        <table id="technicianTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Technician Name</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Table rows go here -->
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Tracking status starting from here -->
                        <div class="col-6">
                            <div class="card">



                                <div class="card-body">


                                    <section class="content">
                                        <div class="container-fluid">

                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="timeline">

                                                        <div class="time-label">
                                                            <span class="bg-red" id="created"></span>
                                                        </div>


                                                        <div>
                                                            <i class="fas fa-envelope bg-blue"></i>
                                                            <div class="timeline-item">
                                                                <span class="time" id="staticTime"><i class="fas fa-clock"></i></span>
                                                                <h3 class="timeline-header"><a href="#">Complaint Created</a></h3>
                                                                <div class="timeline-body">
                                                                    <p class="text-uppercase" id="msg"></p>

                                                                </div>
                                                                <div class="timeline-footer">


                                                                    <div class="timeline-body pt-2">


                                                                        <a id="comImageView" data-toggle="lightbox" data-gallery="gallery">
                                                                            <span class="image-fluid" id="comImage"></span>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>





                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </section>

                                </div>
                            </div>

                        </div>
                        <!-- tracking status ends here -->

                    </div>



                </div>

        </div>

        </section>
        <!-- Modal for resolution Starts-->


        <!-- Modal for resolution EndS -->

        <!-- Modal for Assign Technician START-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Technician</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <label>Select Technician</label>
                        <select class="form-control" id="technician">

                        </select>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="addTechnician()">Add</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Assign Technician Ends-->
    </div>

    <?php include BASE_PATH . '/layout/footer.php'; ?>
    </div>


    <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
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
    <script src="<?php echo BASE_URL; ?>/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo BASE_URL; ?>/dist/js/pages/dashboard.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/loaders/init.js"></script>
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
            // techncianAcceptMessage();
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#loader-overlay").show();
            setTimeout(function() {
                $("#loader-overlay").hide();
            }, 1000);

            fetchComplaintsSingle();






        });

        function convertTo12HourFormat(time) {
            let [hours, minutes, seconds] = time.split(':');
            let period = 'AM';

            // Convert hours from 24-hour format to 12-hour format
            hours = parseInt(hours);
            if (hours >= 12) {
                period = 'PM';
                if (hours > 12) {
                    hours -= 12;
                }
            } else if (hours === 0) {
                hours = 12;
            }

            return `${hours}:${minutes} ${period}`;
        }



        function fetchAssignTechnician() {
            $.ajax({
                url: "<?php echo BASE_URL; ?>/complaints/getAssignTechnician",
                type: "POST",
                success: function(response) {
                    response = JSON.parse(response);
                    if (response.success) {
                        let tableRows = '';
                        var sum = 0;
                        response.data.forEach((data, index) => {
                            sum += data.status;
                            var status = getStatusTechnician(parseInt(data.status));

                            tableRows += `<tr class="text-center">
   
                         <td>${data.technician_title}</td>
                         <td>${status}</td>
                            </tr>`;
                        });

                        if (sum == 1) {
                            $("#assgnTechnicianBtn").hide();
                        }
                        $('#technicianTable tbody').html(tableRows);

                    } else {
                        console.log(response.data);
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while adding the complaint. Please try again.');
                }

            });
        }




        function fetchComplaintsSingle() { // Fetch Single Complain Details
            $.ajax({
                url: "<?php echo BASE_URL; ?>/complaints/getAllComplaintsSingle",
                type: "POST",
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        fetchTechnician();
                        fetchResolution();
                        fetchAssignTechnician();
                        if (response.data.status == 2) {
                            $("#assgnTechnicianBtn").hide();

                        }
                        //     var formatted = response.data.created.split(' ');
                        // var formattedDate = formatted[0].split('-');
                        // finlDateForCreated = formattedDate[0] +"/"+ formattedDate[1] +"/"+formattedDate[2];

                        var formattedDate = new Date(response.data.created).toLocaleDateString('en-GB');
                        let parts = formattedDate.split('/');
                        var dateFormatted = parts[1] + "/" + parts[0] + "/" + parts[2];


                        var partsTime = response.data.created.split(" ");
                        console.log(partsTime[1]);


                        var staticFormattedtime = convertTo12HourFormat(partsTime[1]);
                        $('#staticTime').text(staticFormattedtime);

                        startCountdown(response.data.created);


                        var status = getStatusTask(parseInt(response.data.status));


                        let tableRow = `<tr class="text-center">
                    <td>${response.data.complaintnumber}</td>
                    <td>${response.data.description}</td>
                    <td>${response.data.area}</td>
                    <td>${response.data.phoneNumber}</td>
                    <td><img src="<?php echo BASE_URL; ?>/uploads/complaints/${response.data.image}" alt="Complaint Image" style="height: 10px; width: 10px;"></td>
                    
                    <td>${dateFormatted}</td>
                    
                         <td>${response.data.address}</td>
                    <td>${status}</td>                   
                </tr>`;
                        $('#example1 tbody').html(tableRow);
                        $('#comNumber').text('Complain Number : ' + response.data.complaintnumber);
                        $('#msg').text(response.data.description);
                        $('#area').text('Area : ' + response.data.area);
                        $('#contactInfo').html('<span><i class="fa fa-phone" style="transform: rotate(90deg); margin-right: 10px"></i></span> ' + response.data.phoneNumber);


                        $('#created').text(dateFormatted);
                        $('#address').text('Address : ' + response.data.address);
                        $('#status').html(status);
                        $('#comImage').html('<img src="<?php echo BASE_URL; ?>/uploads/complaints/' + response.data.image + '" alt="Complaint Image" style="object-fit: cover;width: 100px; height: 100px"/>');
                        $('#comImageView').attr("href", "<?php echo BASE_URL; ?>/uploads/complaints/" + response.data.image);


                    } else {
                        console.log('Error fetching complaint data inside success:', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error fetching complaint data:', error);
                }
            });
        }



        function fetchTechnician() { // For Drop Down Purpose
            $.ajax({
                url: "<?php echo BASE_URL; ?>/complaints/getAllTechnician",
                type: "POST",
                success: function(response) {

                    try {
                        response = JSON.parse(response);

                        var select = $('#technician');
                        select.append('<option value="">-- SELECT TECHNICIAN -- </option>');

                        $.each(response.data, function(index, data) {
                            select.append('<option value="' + data.subscriberId + ',' + data.user_id + '">' + data.user_title + '</option>');

                        });


                    } catch (error) {
                        console.error('Error parsing JSON:', error);
                    }
                }
            })
        }

        function addTechnician() {

            $('#exampleModal').modal('hide');

            var technician_name = $('#technician').val();
            if (!technician_name) {
                alert('Please enter technician name');
                return;
            }

            // Split the technician_name to get subscriberId and userId
            var parts = technician_name.split(',');
            if (parts.length !== 2) {
                alert('Invalid technician name format');
                return;
            }

            var subscriberId = parts[0];
            var userId = parts[1];



            $.ajax({
                url: "<?php echo BASE_URL ?>/complaints/technicialComplaints",
                type: "POST",
                data: {
                    subscriberId: subscriberId,
                    userId: userId
                },
                success: function(response) {
                    fetchAssignTechnician();
                    fetchResolution();

                },
                error: function(xhr, status, error) {
                    alert('An error occurred while adding the complaint. Please try again.');
                }
            });
        }


        // function addResolution() {
        //     const resolution = $('#resolution_msg').val();
        //     const image = $('#image')[0].files[0];
        //     const resolStatus = $('#resolStatus').val();

        //     const formData = new FormData();
        //     formData.append('resolution', resolution);
        //     formData.append('image', image);
        //     formData.append('resolStatus', resolStatus);


        //     if (!resolution || !image) {
        //         alert('All fields required');
        //         return;
        //     }
        //     $.ajax({
        //         url: "<?php echo BASE_URL; ?>/complaints/addResolution",
        //         type: "POST",
        //         data: formData,
        //         processData: false,
        //         contentType: false,
        //         success: function(response) {
        //             response = JSON.parse(response);
        //             if (response.success) {
        //                 $('#resolution_msg').val("");
        //                 $('#image').val("");
        //                 $('#resolStatus').val("");

        //                 $('#resolutionModal').modal('hide');
        //                 location.reload();
        //             } else {
        //                 alert("Failed to add complaint: " + response.message);
        //             }
        //         },
        //         error: function(xhr, status, error) {
        //             alert('An error occurred while adding the complaint. Please try again.');
        //         }
        //     });

        // }

        function fetchResolution() {
            $.ajax({
                url: "<?php echo BASE_URL; ?>/complaints/getResolution",
                type: "POST",
                success: function(response) {
                    response = JSON.parse(response);
                    var resolutions = response.data;

                    var tableRows = '';
                    var statusRes = 0;

                    resolutions.forEach(function(resolution) {
                        statusRes = resolution.status;
                        let [date, time] = resolution.resolution_date.split(' ');
                        let formattedTime = convertTo12HourFormat(time);

                        let iconClass = '';
                        let textColorClass = '';
                        switch (resolution.status) {
                            case 0:
                                iconClass = 'fas fa-times-circle bg-red';
                                textColorClass = 'text-red';
                                break;
                            case 1:
                                iconClass = 'fas fa-handshake bg-blue';
                                textColorClass = 'text-blue';
                                break;
                            case 2:
                                iconClass = 'fas fa-thumbs-up bg-green';
                                textColorClass = 'text-green';
                                $('#countdown').hide();
                                fetchDiffComAndCurrentDate();
                                break;
                            case 3:
                                iconClass = 'fas fa-hand-point-right bg-blue';
                                textColorClass = 'text-blue';
                                break;
                            default:
                                iconClass = 'fas fa-envelope bg-blue';
                                textColorClass = 'text-default';
                                break;
                        }

                        tableRows += `
                <div class="time-label">
                    <span class="bg-red">${new Date(date).toLocaleDateString('en-GB')}</span>
                </div>
                <div>
                    <i class="${iconClass}"></i>
                    <div class="timeline-item">
                        <span class="time ${textColorClass}"><i class="fas fa-clock pr-1"></i>${formattedTime}</span>
                        <h3 class="timeline-header ${textColorClass}">${resolution.resolution_msg}</h3>
                        <div class="timeline-body">
                            <!-- Additional content can go here -->
                        </div>
                        <div class="timeline-footer">
                            ${resolution.image ? `
                                <div class="timeline-body pt-2">
                                    <a href="<?php echo BASE_URL; ?>/uploads/resolutions/${resolution.image}" data-toggle="lightbox" data-gallery="gallery">
                                        <img src="<?php echo BASE_URL; ?>/uploads/resolutions/${resolution.image}" class="img-fluid" height="250px" width="150px" alt="Resolution Image">
                                    </a>
                                </div>
                            ` : ''}
                        </div>
                    </div>
                </div>
                `;
                    });

                    $('.timeline').append(tableRows);

                    if (statusRes == 2) {
                        $('.timeline').append(`
                <div class="time-label">
                    <i class="fas fa-check text-green bg-green"></i><span>Resolved</span>
                </div>
                `);
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while fetching the resolutions. Please try again.');
                }
            });
        }





        function addComplaint() {
            const title = $('#title').val();
            const message = $('#message').val();
            const image = $('#image')[0].files[0];
            const area = $('#area').val();

            const formData = new FormData();
            formData.append('title', title);
            formData.append('message', message);
            formData.append('image', image);
            formData.append('area', area);


            if (!title || !message) {
                alert('All fields are required');
                return;
            }


            $.ajax({
                url: "<?php echo BASE_URL; ?>/complaints/addComplaints",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    response = JSON.parse(response);

                    if (response.success) {
                        resetForm();
                        fetchComplaints();

                        setTimeout(function() {
                            $('#loadingstock').hide();
                            $('#addComplaints').show();
                        }, 2000);

                    } else {
                        alert("Failed to add complaint: " + response.message);
                    }

                    setTimeout(function() {
                        $('#loadingstock').hide();
                        $('#addComplaints').show();
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while adding the complaint. Please try again.');
                }
            });

        }


        function startCountdown(complaintDate) {
            // Parse the complaintDate
            let [datePart, timePart, period] = complaintDate.split(' ');
            let [day, month, year] = datePart.split('-').map(Number);
            let [hour, minute, second] = timePart.split(':').map(Number);

            // Convert hour based on AM/PM
            if (period === "PM" && hour !== 12) {
                hour += 12;
            } else if (period === "AM" && hour === 12) {
                hour = 0;
            }

            // Create a Date object for the given date and time
            let countDownDate = new Date(year, month - 1, day, hour, minute, second).getTime();

            // Check if the date object is valid
            if (isNaN(countDownDate)) {
                console.error("Invalid date:", complaintDate);
                return;
            }

            // Update the countdown every second
            let countdownFunction = setInterval(function() {
                let now = new Date().getTime();
                let distance = now - countDownDate; // Calculate elapsed time from the given date

                // Calculate days, hours, minutes, and seconds
                let countdowndays = Math.floor(distance / (1000 * 60 * 60 * 24));
                let countdownhours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let countdownminutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let countdownseconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Format the countdown text
                let countdownText = `${countdowndays} day ${countdownhours}h ${countdownminutes}m ${countdownseconds}s`;

                // Update the countdown display using jQuery
                $('#countdown').text("Created: " + countdownText + " ago");
            }, 1000);
        }


        function fetchDiffComAndCurrentDate() {
            fetch("<?php echo BASE_URL; ?>/complaints/dateDiff", {
                    method: "POST"
                })
                .then(response => response.json())
                .then(response => {
                    if (response.success) {
                        const createdDate = new Date(response.data.created);
                        const completedDate = new Date(response.data.completed);


                        const diffMs = completedDate - createdDate;

                        const diffDays = Math.floor(diffMs / (1000 * 60 * 60 * 24));
                        const diffHours = Math.floor((diffMs % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const diffMinutes = Math.floor((diffMs % (1000 * 60 * 60)) / (1000 * 60));


                        $("#timeTakenForCompletingTherTask").text(`Task completed in: ${diffDays} days ${diffHours} h ${diffMinutes} min `).show();


                    }
                })
                .catch(error => console.error('Error:', error));
        }



        $(document).on("mousedown", function() {

            $(".alert-danger").hide();
        });
    </script>
    <script src="./includes/js/add_stock.js"></script>
</body>

</html>

<!--Mir kashem Ali-->