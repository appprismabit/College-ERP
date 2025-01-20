<div class="col-md-12 collapse text-xs" id="collectFee" data-parent="#accordion">
    <div class="card">
        <div class="card-header">
            <div class="row form-group ">
                <div class="col-md-3">
                    <div class="text-sm text-uppercase text-green">
                        <i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Collect Fee of Student
                    </div>

                </div>


                <div class="col-md-4 text-xs">
                    <label>Enter Enrollment Number</label>
                    <input type="text" class="form-control text-xs">
                </div>
                <div class="col-md-3">
                    <label>&nbsp;</label>
                    <button type="button" class="form-control btn btn-outline-primary btn-sm" onclick="searchBtn();"> <i class="fa fa-search fa-xs" aria-hidden="true"></i> Search</button>
                </div>
                <div class="col-md-2">
                    <label>&nbsp;</label>
                    <button type="button" class="form-control btn btn-outline-danger btn-sm" onclick="resetSearch();"> <i class="fa fa-arrow-rotate-right"></i> Reset</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">

                        <div class="card-body" id="studentFeeDetailsInfo" style="display: none;">
                            <div class="ribbon-wrapper ribbon-lg">
                                <div class="ribbon bg-danger">
                                    Due
                                </div>
                            </div>
                            <div class=" d-flex">
                                <!-- Image on the left -->
                                <div class="col-2">
                                    <img src="<?php echo BASE_URL; ?>/img/student/demostudent.jpg" style="height: 120px; width: 100%;">
                                    <button class="btn btn-info btn-sm btn-block mt-1"> <i class="fa fa-user" aria-hidden="true"></i> Student Profile</button>
                                </div>
                                <!-- Text on the right -->
                                <div class="col-5">

                                    RollNo: <span class="text-bold">2025/LLB/0001</span><br>
                                    Student Name: <span class="text-bold">Imdadul Haque</span><br>
                                    Gender: <span class="text-bold">Male</span><br>
                                    Father Name: <span class="text-bold">Samsul Hoque</span><br>
                                    Mother Name: <span class="text-bold">Moshira Begum</span><br>
                                </div>
                                <div class="col-5">
                                    Semester: <span class="text-bold">1st</span><br>
                                    Course: <span class="text-bold">LLB</span><br>
                                    Contact No: <span class="text-bold">1234567890</span><br>

                                    Address: <span class="text-bold">xyz</span><br>

                                    Cast: <span class="text-bold">General</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center text-dark">
                                    <span class="text-md">Student Payment Details</span>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">


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
                                                <th>20000</th>
                                            </tr>
                                            <tr>
                                                <th colspan="5" class="text-right">Due Amount</th>
                                                <th>16000/-</th>
                                            </tr>
                                            <tr class="form-group">
                                                <th colspan="2" class="text-right">Payment Details</th>
                                                <th>
                                                    <input type="date" class="form-control">
                                                </th>
                                                <th>
                                                    <select class="form-control" name="" id="">
                                                        <option>--Select Payment Method---</option>
                                                        <option>Cash</option>
                                                        <option>Draft</option>
                                                        <option>UPI</option>
                                                        <option>Account Transfer</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <input type="text" class="form-control" placeholder="Ref No if any...">
                                                </th>
                                                <th>
                                                    <input type="text" class="form-control" placeholder="Enter Amount">
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <br>
                                    <button type="button" data-toggle="modal" data-target="#modal-xl" class="btn btn-primary btn-sm float-right"> <i class="fa fa-arrow-down" aria-hidden="true"></i> Collect Payment</button>
                                </div>
                                <!-- model -->
                                <!-- model end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card" id="paymentHistory" style="display: none;">
                        <div class="card-header">
                            <span>Payment History</span>
                            <hr>
                            <div class="form-group">
                                <select class="form-control" name="" id="">
                                    <option>--- Select Academic Year----</option>
                                    <option>2024-25</option>
                                    <option>2023-24</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-xs p-0 m-0">
                                <thead>
                                    <tr>
                                        <th>Academic Year</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Ref</th>
                                        <th>Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">2024-25</td>
                                        <td>01-01-2025</td>
                                        <td>10000.00</td>
                                        <td>DV22525</td>
                                        <td> <a href="#" class="btn btn-info btn-sm"> <i class="fa fa-download" aria-hidden="true"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>