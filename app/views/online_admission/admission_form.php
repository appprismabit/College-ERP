<div class="row text-xs  ">
    <div class="col-md-12">
        <div class="card card-default">

            <div class="card-body p-0">

                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        <!-- your steps here -->
                        <div class="step" data-target="#personalInformation-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="personalInformation-part" id="personalInformation-part-trigger">
                                <span class="bs-stepper-circle text-xs">1</span>
                                <span class="bs-stepper-label text-xs">Personal Information</span>
                            </button>
                        </div>

                        <div class="step" data-target="#courseDetails-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="courseDetails-part" id="courseDetails-part-trigger">
                                <span class="bs-stepper-circle text-xs">2</span>
                                <span class="bs-stepper-label text-xs">Other Details</span>
                            </button>
                        </div>
                        <div class="step" data-target="#UploadDocument-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="UploadDocument-part" id="UploadDocument-part-trigger">
                                <span class="bs-stepper-circle text-xs">3</span>
                                <span class="bs-stepper-label text-xs">Upload Documents</span>
                            </button>
                        </div>

                    </div>

                    <div class="bs-stepper-content ">
                        <!-- your steps content here -->
                        <div id="personalInformation-part" class="content" role="tabpanel" aria-labelledby="personalInformation-part-trigger">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Full Name</label><br>
                                        <input type="email" class="p-2" id="exampleInputEmail1" placeholder="Full Name" style="width: 70%; border-radius: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Birthdate</label><br>
                                        <input type="date" class="p-2" id="exampleInputEmail1" style="width: 70%; border-radius: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> State</label><br>
                                        <select name="" id="" class="p-2" style="width: 70%; border-radius: 10px;">
                                            <option value="">Select State</option>
                                            <option value="">Assam</option>
                                            <option value="">Bihar</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Phone Number</label><br>
                                        <input type="email" class="p-2" id="exampleInputEmail1" placeholder="Phone Number" style="width: 70%; border-radius: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Gender</label><br>
                                        <select name="" id="" class="p-2" style="width: 70%; border-radius: 10px;">
                                            <option value="">Select Gender</option>
                                            <option value="">Male</option>
                                            <option value="">Female</option>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> City</label><br>
                                        <select name="" id="" class="p-2" style="width: 70%; border-radius: 10px;">
                                            <option value="">Select City</option>
                                            <option value="">Guwahati</option>
                                            <option value="">Tezpur</option>
                                            <option value="">Dibrugarh</option>
                                            <option value="">Sivsagar</option>
                                            <option value="">Jorhat</option>
                                            <option value="">Nagaon</option>
                                            <option value="">Haflong</option>
                                            <option value="">Silchar</option>
                                           

                                        </select>

                                    </div>
                                </div>
                            </div>



                            <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                        </div>
                        <!-- STEP 2 -->
                        <div id="courseDetails-part" class="content" role="tabpanel" aria-labelledby="courseDetails-part-trigger">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> District</label><br>
                                        <select name="" id="" class="p-2" style="width: 70%; border-radius: 10px;">
                                            <option value="">Select District</option>
                                            <option value="">District 1</option>
                                            <option value="">District 2</option>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Blood Group</label><br>
                                        <select name="" id="" class="p-2" style="width: 70%; border-radius: 10px;">
                                            <option value="">Select Blood Group</option>
                                            <option value="">A+</option>
                                            <option value="">B+</option>

                                        </select>

                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Caste</label><br>
                                        <select name="" id="" class="p-2" style="width: 70%; border-radius: 10px;">
                                            <option value="">Select Caste</option>
                                            <option value="">General</option>
                                            <option value="">ST</option>
                                            <option value="">SC</option>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Natinality</label><br>
                                        <select name="" id="" class="p-2" style="width: 70%; border-radius: 10px;">
                                            <option value="">Select Nationality</option>
                                            <option value="">India</option>
                                            <option value="">Bangladesh</option>

                                        </select>

                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                            <button type="submit" class="btn btn-primary" onclick="stepper.next()">Next</button>
                        </div>

                        <!-- STEP - 3 -->
                        <div id="UploadDocument-part" class="content" role="tabpanel" aria-labelledby="UploadDocument-part-trigger">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Candidate Image</label><br>
                                        <input type="file" class="p-2 border" id="exampleInputEmail1" placeholder="Full Name" style="width: 70%; border-radius: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> HSLC Marksheet</label><br>
                                        <input type="file" class="p-2 border" id="exampleInputEmail1" style="width: 70%; border-radius: 10px;">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> Birth Certificate</label><br>
                                        <input type="file" class="p-2 border" id="exampleInputEmail1" placeholder="Phone Number" style="width: 70%; border-radius: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-genderless"></i> HS Marksheet</label><br>
                                        <input type="file" class="p-2 border" id="exampleInputEmail1" placeholder="Phone Number" style="width: 70%; border-radius: 10px;">

                                    </div>

                                </div>
                            </div>
                            <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
</div>