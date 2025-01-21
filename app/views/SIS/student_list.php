<div class="col-md-12 collapse" id="student_list" data-parent="#accordion">
    <div class="card text-left">
        <div class="card-body">
            <div class="row text-xs">
                <div class="col-12 col-md-12">
                    <!-- <label class="text-md"><i class="fa fa-search"></i></label> -->
                    <div class="float-right">


                        <label>Semester</label>
                        <select class="p-2 mr-2" style="border-radius: 50px;">
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                            <option>4th</option>
                        </select>
                        <label>Course</label>
                        <select class="p-2" style="border-radius: 50px;" onchange="getStudentList();">
                            <option>MCA</option>
                            <option>BCA</option>
                            <option>MBA</option>
                            <option>BBA</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-xs" id="studentList">
        <table class="table table-bordered table-hovered">
            <thead class="">
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
                    <td><img class="profile-user-img img-fluid img-circle"
                            src="<?php echo BASE_URL; ?>/dist/img/avatar4.png"
                            alt="User profile picture" style="height: 40px; width: 40px;"> Mir Kashem Ali </td>
                    <td>Male</td>
                    <td>MCA</td>
                    <td>Semester 1</td>
                    <td><a href="<?php echo BASE_URL; ?>/sis/student_single" class="btn btn-info btn-sm">Profile</a></td>
                </tr>
                <tr>
                    <td>9862337</td>
                    <td>2025/mca/019</td>
                    <td><img class="profile-user-img img-fluid img-circle"
                            src="<?php echo BASE_URL; ?>/dist/img/avatar5.png"
                            alt="User profile picture" style="height: 40px; width: 40px;"> Alakesh Gogoi </td>
                    <td>Female</td>
                    <td>MCA</td>
                    <td>Semester 1</td>
                    <td><a href="<?php echo BASE_URL; ?>/sis/student_single" class="btn btn-info btn-sm">Profile</a></td>
                </tr>
                <tr>
                    <td>9868637</td>
                    <td>2025/mca/009</td>
                    <td><img class="profile-user-img img-fluid img-circle"
                            src="<?php echo BASE_URL; ?>/dist/img/avatar2.png"
                            alt="User profile picture" style="height: 40px; width: 40px;"> Kabyashree Buragohain </td>
                    <td>Female</td>
                    <td>MCA</td>
                    <td>Semester 1</td>
                    <td><a href="<?php echo BASE_URL; ?>/sis/student_single" class="btn btn-info btn-sm">Profile</a></td>
                </tr>
                <tr>
                    <td>9868637</td>
                    <td>2025/mca/009</td>
                    <td><img class="profile-user-img img-fluid img-circle"
                            src="<?php echo BASE_URL; ?>/dist/img/avatar.png"
                            alt="User profile picture" style="height: 40px; width: 40px;"> Himasree Das</td>
                    <td>Male</td>
                    <td>MCA</td>
                    <td>Semester 1</td>
                    <td><a href="<?php echo BASE_URL; ?>/sis/student_single" class="btn btn-info btn-sm">Profile</a></td>
                </tr>
            </tbody>


        </table>

    </div>
</div>
<script>
    function getStudentList() {
        $('#studentList').show();
    }
</script>