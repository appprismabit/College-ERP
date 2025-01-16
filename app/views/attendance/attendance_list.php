<style>
    .circle {
        width: 40px;
        /* Small size of the circle */
        height: 40px;
        /* Same as width to maintain a perfect circle */
        border-radius: 50%;
        /* Makes it a circle */
        display: flex;
        /* Flexbox to center the text */
        justify-content: center;
        /* Centers text horizontally */
        align-items: center;
        /* Centers text vertically */
        border: solid 2px;

    }

    .circle:hover {
        background-color: #F0F8FF;

    }
</style>
<div class="col-md-12 collapse" id="attendance_list" data-parent="#accordion">
    <div class="card text-left">
        <div class="card-header">
            <div class="row text-xs">
                <div class="col-12 col-md-12">
                    <label>Attandance Month: <span>June</span></label>

                    <div class="float-right">
                        <label>Date</label>
                        <input type="date" class="p-1 mr-2" style="border-radius: 50px;">
                        <label>Month</label>
                        <select class="p-2 mr-2" style="border-radius: 50px;">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                        </select>
                        <label>Semester</label>
                        <select class="p-2 mr-2" style="border-radius: 50px;">
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                            <option>4th</option>
                        </select>
                        <label>Subject</label>
                        <select class="p-2" style="border-radius: 50px;" onchange="showAttendanceDetails();">
                            <option>COA</option>
                            <option>C++</option>
                            <option>DSA</option>
                            <option>OS</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="attendance Details section text-xs" id="attendanceDetails" style="display: none;">
        <div class="row">
            <div class="col-2">
                <div class="card card-outline card-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo BASE_URL; ?>/dist/img/avatar.png"
                                alt="User profile picture" style="height: 80px; width: 80px;">

                        </div>
                        <div class="text-center mt-2">
                            <span class="text-muted ">Mir Kashem Ali</span><br>
                            <span class="text-muted mt-2">1st Sem</span>
                        </div>

                        <div class="circle   mx-auto text-xs ">
                            <span>50%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card card-outline card-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo BASE_URL; ?>/dist/img/avatar2.png"
                                alt="User profile picture" style="height: 80px; width: 80px;">

                        </div>
                        <div class="text-center mt-2">
                            <span class="text-muted ">Kabyashree</span><br>
                            <span class="text-muted mt-2">1st Sem</span>
                        </div>

                        <div class="circle   mx-auto text-xs ">
                            <span>50%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card card-outline card-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo BASE_URL; ?>/dist/img/avatar3.png"
                                alt="User profile picture" style="height: 80px; width: 80px;">

                        </div>
                        <div class="text-center mt-2">
                            <span class="text-muted ">Imdadul Hoque</span><br>
                            <span class="text-muted mt-2">1st Sem</span>
                        </div>

                        <div class="circle   mx-auto text-xs ">
                            <span>50%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card card-outline card-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo BASE_URL; ?>/dist/img/avatar4.png"
                                alt="User profile picture" style="height: 80px; width: 80px;">

                        </div>
                        <div class="text-center mt-2">
                            <span class="text-muted ">Alakesh Gogoi</span><br>
                            <span class="text-muted mt-2">1st Sem</span>
                        </div>

                        <div class="circle   mx-auto text-xs ">
                            <span>50%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card card-outline card-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo BASE_URL; ?>/dist/img/avatar5.png"
                                alt="User profile picture" style="height: 80px; width: 80px;">

                        </div>
                        <div class="text-center mt-2">
                            <span class="text-muted ">Devaj Neogi</span><br>
                            <span class="text-muted mt-2">1st Sem</span>
                        </div>

                        <div class="circle   mx-auto text-xs ">
                            <span>50%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card card-outline card-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo BASE_URL; ?>/dist/img/avatar4.png"
                                alt="User profile picture" style="height: 80px; width: 80px;">

                        </div>
                        <div class="text-center mt-2">
                            <span class="text-muted ">Nilotpal Deka</span><br>
                            <span class="text-muted mt-2">1st Sem</span>
                        </div>

                        <div class="circle   mx-auto text-xs text-dark">
                            <span>50%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TABLE SECTION -->
        <div class="card">

            <table class="table table-bordered table-hovered ">
                <thead class="bg-dark">
                    <tr>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Dept</th>
                        <th>Sub</th>
                        <th>Date</th>
                        <th>Mark Attendance</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024/Mca/002</td>
                        <td> <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo BASE_URL; ?>/dist/img/avatar4.png"
                                alt="User profile picture" style="height: 40px; width: 40px;"> Mir Kashem Ali</td>
                        <td>Computer Science</td>
                        <td>COA</td>
                        <td>11-09-2024</td>
                        <td><input
                                type="checkbox"
                                name="my-checkbox"
                                checked
                                data-bootstrap-switch
                                data-off-color="danger"
                                data-on-color="success"
                                data-on-text="Present"
                                data-off-text="Absent"
                                data-size="mini"></td>
                    </tr>
                    <tr>
                        <td>2024/Mca/0012</td>
                        <td> <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo BASE_URL; ?>/dist/img/avatar2.png"
                                alt="User profile picture" style="height: 40px; width: 40px;"> Kabyashree Buragohain</td>
                        <td>Computer Science</td>
                        <td>COA</td>
                        <td>11-09-2024</td>
                        <td><input
                                type="checkbox"
                                name="my-checkbox"
                                checked
                                data-bootstrap-switch
                                data-off-color="danger"
                                data-on-color="success"
                                data-on-text="Present"
                                data-off-text="Absent"
                                data-size="mini"></td>
                    </tr>
                    <tr>
                        <td>2024/Mca/0016</td>
                        <td> <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo BASE_URL; ?>/dist/img/avatar.png"
                                alt="User profile picture" style="height: 40px; width: 40px;"> Nilotpal Deta</td>
                        <td>Computer Science</td>
                        <td>COA</td>
                        <td>11-09-2024</td>
                        <td><input
                                type="checkbox"
                                name="my-checkbox"
                                checked
                                data-bootstrap-switch
                                data-off-color="danger"
                                data-on-color="success"
                                data-on-text="Present"
                                data-off-text="Absent"
                                data-size="mini"></td>
                    </tr>
                    <tr>
                        <td>2024/Mca/020</td>
                        <td> <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo BASE_URL; ?>/dist/img/avatar5.png"
                                alt="User profile picture" style="height: 40px; width: 40px;"> Alakesh Gogoi</td>
                        <td>Computer Science</td>
                        <td>COA</td>
                        <td>11-09-2024</td>
                        <td><input
                                type="checkbox"
                                name="my-checkbox"
                                checked
                                data-bootstrap-switch
                                data-off-color="danger"
                                data-on-color="success"
                                data-on-text="Present"
                                data-off-text="Absent"
                                data-size="mini"></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


</div>

<script>
    function showAttendanceDetails() {
        $('#attendanceDetails').show();
    }
</script>