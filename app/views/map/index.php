<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Map</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/custom/css/ol.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/loaders/loader-progress.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/plugins/css/style.css">

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        #map {
            height: 100vh;
            width: 100vw;
            position: absolute;
            top: 8;
            left: 0;
            /* z-index: 1000; */
            transition: margin-right 0.3s ease;
        }

        #details {
            position: absolute;
            top: 0;
            right: -325px;
            /* Initially hidden off-screen */
            width: 300px;
            height: 100vh;
            background-color: #e6f7ff;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            overflow-y: auto;
            z-index: 1001;
            border-radius: 15px;
            transition: right 0.3s ease;
            /* Smooth slide effect */
        }

        .open-sidebar #details {
            right: 0;
            /* Slide into view */
        }

        #details h4 {
            margin-top: 0;
        }

        #details p {
            margin: 10px 0;
        }

        .hidden {
            display: none;
        }



        .open-sidebar #details {
            display: block;
        }

        /* #close-sidebar {
            float: right;
            background-color: #f0f0f0;
            padding: 8px 15px;
          
            font-weight: bold;
            cursor: pointer;
            border-radius: 15px;
            transition: background-color 0.3s ease;
        }

        #close-sidebar:hover {
            background-color: #e7e7e7;
        } */

        #reset-button {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1001;
            display: none;
        }

        .box {
            width: 60px;
            height: 30px;
            border-radius: 8px;
            margin-bottom: 5px;
        }



        .green {
            background-color: #28a745;
        }

        .yellow {
            background-color: #ffc107;
        }

        .red {
            background-color: #dc3545;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <?php include BASE_PATH . '/layout/header.php'; ?>
        <?php include BASE_PATH . '/layout/aside.php'; ?>

        <div class="wrapper">
            <div class="content-wrapper">
                <div class="loader-overlay">
                    <div class="loader">

                    </div>
                </div>

                <section class="content mt-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="card-header">
                                    <div class="text-center  gradient-blue  text-uppercase text-bold" style="font-size:27px">
                                        Complaints Intensity for guwahati
                                    </div>
                                    <div id="summary" class="summary text-xs hidden d-flex" style="gap: 10px;">
                                        <div>
                                            <span id="green" class=" text-center text-green text-bold">
                                            </span>
                                            <div id="greenBox" class="box green text-center"></div>


                                        </div>
                                        <div>
                                            <span id="yellow" class="text-center text-yellow text-bold"></span>

                                            <div id="yellowBox" class="box yellow"></div>

                                        </div>

                                        <div>
                                            <span id="red" class="text-center text-red text-bold">
                                            </span>
                                            <div id="redBox" class="box red"></div>
                                        </div>

                                    </div>

                                </div>



                                <div class="card-body">


                                    <div id="map">

                                    </div>


                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <div id="details">

                                        <i id="close-sidebar" class="fa fa-times float-right" style="cursor: pointer; "></i>

                                        <div id="details-content" class="text-sm">
                                            <p></p>
                                        </div>
                                        <hr>
                                        <canvas id="resolvedPendingChart" width="400" height="200"></canvas>
                                        <hr>
                                        <canvas id="complaintChart" width="300" height="200"></canvas>
                                        <hr>
                                        <canvas id="areaChart" width="100px" height="100px"></canvas>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

        </div>


        <?php include BASE_PATH . '/layout/footer.php'; ?>
    </div>


    <script src="<?php echo BASE_URL; ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
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

    <script src="<?php echo BASE_URL; ?>/plugins/custom/js/ol.js"></script>
    <script src="<?php echo BASE_URL; ?>/plugins/loaders/init.js"></script>
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>





    <script>
        var complaintData = {};
        $(document).ready(function() {
            getComplaintsDetailsForMap();
            $("#loader-overlay").show();
            setTimeout(function() {
                $("#loader-overlay").hide();
            }, 2000);
        });


        function getComplaintsDetailsForMap() {
            $.ajax({
                url: "<?php echo BASE_URL; ?>/map/fetchComplaintsDetailsForMap",
                type: "POST",
                success: function(response) {
                    response = JSON.parse(response);

                    if (response.success) {
                        allByMonthData = response.data.byMonth;

                        addComplaintsToMap(response.data.bySourceWard);
                        renderComplaintChart(response.data.byMonth);

                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                }
            });
        }

        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.XYZ({

                        url: 'https://{a-c}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                    })
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([91.786417, 26.128966]), // Center of the map
                zoom: 12.2,
                minZoom: 12.2,
                maxZoom: 12.2
            }),
            interactions: ol.interaction.defaults({
                doubleClickZoom: false,
                dragPan: false,
                mouseWheelZoom: false,
                pinchZoom: false
            }),
            controls: ol.control.defaults({
                zoom: false
            })


        });

        var complaintData = {};

        function addComplaintsToMap(data) {
            // Store the complaint counts in a dictionary
            data.forEach(function(complaint) {
                complaintData[complaint.sourcewardcode] = parseInt(complaint.complaint_count);
            });






            // Update the ward layer style based on complaint counts
            assamBorderLayer.setStyle(function(feature) {
                var wardCode = feature.get('sourcewardcode'); // Ensure this matches your GeoJSON property
                var count = complaintData[wardCode] || 0;
                if (count != "") {
                    $('#summary').show();
                }


                var maxComplaintCount = Math.max(...Object.values(complaintData));


                var halfMax = Math.round(maxComplaintCount * 0.5);


                var eightyPercentHalf = Math.round(maxComplaintCount * 0.8);
                document.getElementById('green').innerHTML = `
                   < ${halfMax}
                `;
                document.getElementById('red').innerHTML = `
                   > ${eightyPercentHalf} 
                `;
                document.getElementById('yellow').innerHTML = `
                   ${halfMax} < - <${eightyPercentHalf}
                `;

                let color = getColor(count, halfMax, eightyPercentHalf);

                return new ol.style.Style({
                    stroke: new ol.style.Stroke({
                        color: '#0000FF',
                        width: 2
                    }),
                    fill: new ol.style.Fill({
                        color: color
                    }),
                    text: new ol.style.Text({
                        text: feature.get('ward_lgd_name'),
                        font: '18px Arial, sans-serif',
                        fill: new ol.style.Fill({
                            color: 'red'
                        }),
                        stroke: new ol.style.Stroke({
                            color: '#fff',
                            width: 2
                        }),
                        offsetX: 0,
                        offsetY: -10,
                        textAlign: 'center',
                        textBaseline: 'middle'
                    })
                });
            });
        }

        function getColor(count, halfMax, eightyPercentHalf) {
            if (!count) {
                return 'rgba(0, 255, 0, 0.6)'; // White for invalid or empty count
            } else if (count > eightyPercentHalf) {
                return 'rgba(255, 0, 0, 0.6)'; // Red for more than 80% of max count
            } else if (count >= halfMax && count <= eightyPercentHalf) {
                return 'yellow'; // Yellow for values between 50% and 80% of maxComplaintCount
            } else if (count < halfMax) {
                return 'rgba(0, 255, 0, 0.6)'; // Green for everything else
            }
        }

        var assamBorderLayer = new ol.layer.Vector({
            source: new ol.source.Vector({
                url: "<?php echo BASE_URL; ?>/plugins/custom/guwahati_ward_boundaries.geojson",
                format: new ol.format.GeoJSON()
            }),
            style: function(feature) {

                var wardno = feature.get('sourcewardcode'); // Ensure this matches your GeoJSON property
                var count = complaintData[wardno] || 0;

                var color = getColor(count);

                return new ol.style.Style({
                    stroke: new ol.style.Stroke({
                        color: '#0000FF',
                        width: 2
                    }),
                    fill: new ol.style.Fill({
                        color: color
                    }),
                    text: new ol.style.Text({
                        text: feature.get('ward_lgd_name'),
                        font: '18px Arial, sans-serif',
                        fill: new ol.style.Fill({
                            color: 'red'
                        }),
                        stroke: new ol.style.Stroke({
                            color: '#fff',
                            width: 2
                        }),
                        offsetX: 0,
                        offsetY: -10,
                        textAlign: 'center',
                        textBaseline: 'middle'
                    })
                });
            }
        });
        map.addLayer(assamBorderLayer);

        // Overlay for showing the count and district name on hover
        var overlay = new ol.Overlay({
            element: document.createElement('div'),
            positioning: 'bottom-center',
            stopEvent: false
        });

        overlay.getElement().style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
        overlay.getElement().style.padding = '4px';
        overlay.getElement().style.borderRadius = '4px';
        overlay.getElement().style.border = '1px solid #ccc';

        map.addOverlay(overlay);

        map.on('pointermove', function(event) {
            var pixel = map.getEventPixel(event.originalEvent);
            var hit = map.hasFeatureAtPixel(pixel);

            if (hit) {
                var feature = map.getFeaturesAtPixel(pixel)[0];
                var wardName = feature.get('ward_lgd_name');

                var wardno = feature.get('sourcewardcode'); // Ensure this matches your GeoJSON property
                var heatValue = complaintData[wardno] || 0;

                var countText = `<b>Ward_Name: ${wardName}</b><br><b>No of Complaints: ${heatValue}</b>`;

                overlay.getElement().innerHTML = countText;
                overlay.setPosition(event.coordinate);
                overlay.getElement().style.display = 'block';
            } else {
                overlay.getElement().style.display = 'none';
            }
        });

        map.on('singleclick', function(event) {
            var pixel = map.getEventPixel(event.originalEvent);
            var feature = map.getFeaturesAtPixel(pixel)[0];

            if (feature) {
                var wardName = feature.get('ward_lgd_name');
                var wardCode = feature.get('sourcewardcode'); // Fetch ward code
                var count = complaintData[wardCode] || 0;

                // Show sidebar details
                document.getElementById('details-content').innerHTML = `
            <p><strong>Ward Name:</strong> ${wardName}</p>
           
        `;
                document.body.classList.add('open-sidebar');

                // Prepare data for the chart
                if (wardCode && allByMonthData[wardCode] && allByMonthData[wardCode].length > 0) {
                    const filteredData = {
                        [wardCode]: allByMonthData[wardCode]
                    };

                    renderComplaintChart(filteredData);
                } else {
                    // No data available, render an empty chart
                    renderComplaintChart({});
                }
            }
        });

        function renderComplaintChart(filteredData) {
            const ctx = document.getElementById('complaintChart').getContext('2d');

            // Extract sourceWardCode and complaintsData
            const sourceWardCode = Object.keys(filteredData)[0];
            const complaintsData = filteredData[sourceWardCode] || [];

            // Prepare data for the chart
            const labels = complaintsData.map(item => item.month); // Months as labels
            const complaintCounts = complaintsData.map(item => parseInt(item.complaint_count || 0)); // Raised counts
            const resolvedCounts = complaintsData.map(item => parseInt(item.resolve_count || 0)); // Resolved counts

            // Destroy existing chart instance to avoid overlay
            if (window.complaintChartInstance) {
                window.complaintChartInstance.destroy();
            }

            // Label for the chart
            const label = sourceWardCode ? `Complaints in Ward ${sourceWardCode}` : 'No data available';

            // Create a new chart instance
            window.complaintChartInstance = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels,
                    datasets: [{
                            label: 'Raised ',
                            data: complaintCounts,
                            backgroundColor: 'red',
                            borderColor: 'black',
                            borderWidth: 1,
                            borderRadius: 5
                        },
                        {
                            label: 'Resolved ',
                            data: resolvedCounts,
                            backgroundColor: 'green',
                            borderColor: 'black',
                            borderWidth: 1,
                            borderRadius: 5
                        }

                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return `${tooltipItem.dataset.label}: ${tooltipItem.raw}`;
                                }
                            }
                        }
                    },

                }
            });

            // Call additional functions to render related charts
            renderResolvedPendingChart(sourceWardCode);
            getPieChartForComplaintsDescriptionSpecificWardNo(sourceWardCode);
        }


        function renderResolvedPendingChart(wardCode) {
            const resolvedPendingCtx = document.getElementById('resolvedPendingChart').getContext('2d');

            $.ajax({
                url: "<?php echo BASE_URL; ?>/map/getResolvedPendingDetails",
                type: "POST",
                data: {
                    ward_code: wardCode || 0
                },
                success(response) {
                    try {
                        const data = response.data || {};

                        const pendingArray = data.createdComplaints || [];
                        const resolvedArray = data.resolvedComplaints || [];

                        // Correctly find pending complaints for the selected ward
                        const pendingComplaintsObj = pendingArray.find(item => item.sourcewardcode === wardCode);
                        const pendingComplaints = pendingComplaintsObj ? pendingComplaintsObj.complaintPending : 0;

                        // Correctly find resolved complaints for the selected ward
                        const resolvedComplaintsObj = resolvedArray.find(item => item.sourcewardcode === wardCode);
                        const resolvedComplaints = resolvedComplaintsObj ? resolvedComplaintsObj.complaintResolved : 0;

                        if (window.resolvedPendingChartInstance) {
                            window.resolvedPendingChartInstance.destroy();
                        }

                        const label = wardCode ? `Ward ${wardCode} Complaints Graph` : 'No data available';

                        window.resolvedPendingChartInstance = new Chart(resolvedPendingCtx, {
                            type: 'bar',
                            data: {
                                labels: ['Complaints'],
                                datasets: [{
                                        label: 'Raised Complaints',
                                        data: [pendingComplaints],
                                        backgroundColor: 'rgba(255, 0, 0, 0.6)', // Red background for raised complaints
                                        borderColor: 'black',
                                        borderWidth: 1,
                                        borderRadius: 5
                                    },
                                    {
                                        label: 'Resolved Complaints',
                                        data: [resolvedComplaints],
                                        backgroundColor: 'rgba(0, 128, 0, 0.6)', // Green background for resolved complaints
                                        borderColor: 'black',
                                        borderWidth: 1,
                                        borderRadius: 5
                                    }
                                ]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'top'
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                return `${tooltipItem.dataset.label}: ${tooltipItem.raw}`;
                                            }
                                        }
                                    }
                                },

                            }
                        });

                    } catch (error) {
                        console.log('Error rendering chart:', error);
                    }
                },
                error(xhr, status, errorMsg) {
                    console.log(`AJAX Error: ${status}`, errorMsg);
                }
            });
        }

        let donutChartInstance; // Declare a variable to store the chart instance

        function getPieChartForComplaintsDescriptionSpecificWardNo(ward_no) {
            var donutChartCanvas = $('#areaChart').get(0).getContext('2d');

            $.ajax({
                url: "<?php echo BASE_URL; ?>/map/getComplaintDescriptionChart",
                type: "POST",
                data: {
                    ward_no: ward_no || 0
                },
                success: function(response) {
                    var response = JSON.parse(response);


                    if (response.success) {
                        var labels = [];
                        var counts = [];
                        var colors = [];

                        response.data.forEach(function(item) {
                            labels.push(item.description);
                            counts.push(item.complaint_count);
                            colors.push(item.color);
                        });

                        var donutData = {
                            labels: labels,
                            datasets: [{
                                data: counts,
                                backgroundColor: colors,
                            }]
                        };

                        var donutOptions = {
                            maintainAspectRatio: true,
                            responsive: true,
                            plugins: {
                                legend: { // it means the above details that what color is for whom
                                    position: 'top',


                                },
                            },
                            layout: {
                                padding: 10, // Adds padding around the chart
                            },

                        };

                        // Destroy the previous chart instance if it exists
                        if (donutChartInstance) {
                            donutChartInstance.destroy();
                        }

                        // Create a new chart instance
                        donutChartInstance = new Chart(donutChartCanvas, {
                            type: 'doughnut',
                            data: donutData,
                            options: donutOptions
                        });
                    } else {
                        console.log('Error rendering chart:', response.error);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX request failed:', status, error);
                }
            });
        }











        document.getElementById('close-sidebar').addEventListener('click', () => {
            document.body.classList.remove('open-sidebar');
        });

        function resetMap() {
            clickedFeature = null;
            assamBorderLayer.getSource().clear();
            assamBorderLayer.getSource().addFeatures(originalFeatures); // Restore all features
            assamBorderLayer.changed();
            document.getElementById('reset-button').style.display = 'none';
        }
    </script>




</body>

</html>