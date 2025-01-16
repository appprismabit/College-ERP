<div class="col-md-12 collapse" id="student_list" data-parent="#accordion">
    <div class="card text-left">
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
</div>
