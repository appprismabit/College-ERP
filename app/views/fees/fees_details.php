<div class="col-md-12 collapse text-xs" id="feeDetails" data-parent="#accordion">
    <div class="card">
        <div class="card-header">

            <div class="text-xs text-uppercase">
                <i class="fa fa-coins" aria-hidden="true"></i> Fee Collected Today Dated : 15-01-2025
                <div class="float-right">

                    <label for="courseSelect">Course</label>
                    <select class="p-2 ml-1" id="courseSelect" style="border-radius:30px;">
                        <option>Select Course</option>
                        <option value="Course 1">Course 1</option>
                        <option value="Course 2">Course 2</option>
                    </select>


                    <label for="dateSelect">Semester </label>
                    <select class="p-2 ml-1" id="dateSelect" style="border-radius:30px;">
                        <option>Selester</option>
                        <option value="Course 1">All</option>
                        <option value="Course 2">Semester 1</option>
                        <option value="Course 2">Semester 2</option>
                        <option value="Course 2">Semester 3</option>
                    </select>


                    <label for="dateSelect">Batch</label>
                    <select class="p-2 ml-1" id="dateSelect" style="border-radius:30px;">
                        <option>Year</option>
                        <option value="Course 1">2024</option>
                        <option value="Course 2">2025</option>
                    </select>




                </div>
            </div>











        </div>

        <div class="card-body p-4 text-sm">
            <div class=" text-uppercase justify-content-between d-flex ">
                <button class="btn btn-info btn-sm float-right">Download Fee Structure</button>
                <div class="mt-2">course: <span id="attendanceFor"></span></div>
                <div class="mt-2">batch: <span id="department"></span></div>
            </div>
            <hr>

            <table class="table table-hover  table-bordered">
                <thead class="bg-dark">
                    <tr>
                        <th>#</th>
                        <th>Enrollment Number</th>
                        <th>Roll Number</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Semester</th>
                        <th>Paid Amount</th>
                        <th>Amount Break down</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1236781926</td>
                        <td>2024/02/02</td>
                        <td>Imdadul Hoque</td>
                        <td>Course 1</td>
                        <td>Semester 1 </td>
                        <td>45000</td>
                        <td><a href="<?php echo BASE_URL; ?>/fees/fees_due_single"><button type="button" class="btn btn-info btn-sm">View</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




</section>