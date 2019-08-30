<?php
//Page Title Goes Here
define('PAGENAME', 'Step 2: Enter Details');

include('header.php');

?>


<div class="jumbotron jumbotron-fluid text-center">
    <h1 class="display-4">Enter Details</h1>
    <p class="lead mb-0">You have Selected <strong><?php echo ucwords(/* $_POST["template"] */$templateSelected); ?></strong> Template</p>

    <a href="/"><small class="mt-0 small text-info">Want to Choose other Template?</small></a>



</div>


<div class="container">
    <div class="card card-outline-secondary my-5">
        <div class="card-header">
            <h3 class="mb-0">Enter Your Information</h3>
        </div>
        <div class="card-body">
            <form method="post" class="form" role="form" autocomplete="off" action="final2.php">
                <?php
                //For Taking the Value of $templateSelected to Next Page
                echo "<input type='text' name='template' class='d-none' value='$templateSelected'>";
                ?>
                <div class="form-group row">
                    <label for="full-name" class="col-lg-3 col-form-label form-control-label" value="John Doe">Full Name</label>
                    <div class="col-lg-9">
                        <input id="full-name" class="form-control" type="text" name="fullName" placeholder="Enter Your Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fathers-name" class="col-lg-3 col-form-label form-control-label">Father's
                        Name</label>
                    <div class="col-lg-9">
                        <input id="fathers-name" class="form-control" type="text" name="FathersName" placeholder="Your Father's Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3"> Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="gender-male" class="radio-inline">
                                    <input id="gender-male" type="radio" name="genderRadio" value="Male"> Male
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label for="gender-female" class="radio-inline">
                                    <input id="gender-female" type="radio" name="genderRadio" value="Female"> Female
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group row">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" name="dateOfBirth" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="XXXXXXXXXX" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="email" type="email" value="" placeholder="example@domain.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sel1" class="col-lg-3">Merital Status</label>
                    <div class=" col-lg-9"">
                        <select class=" form-control id="sel1" name="meritalStatus">
                        <option>Unmarried</option>
                        <option>Married</option>
                        <option>Divorced</option>
                        <option>Widowed</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sel1" class="col-lg-3">Nationality</label>
                    <div class=" col-lg-9"">
                        <select class=" form-control id="sel1" name="nationality">
                        <option>Indian</option>
                        <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Languages Known</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="langKnown" type="text" value="Hindi, English">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                    <div class="col-lg-9">
                        <input class="form-control mb-1" type="text" name="village" placeholder="House No. / Village">
                        <input class="form-control mb-1" type="text" name="ward" placeholder="Appartment / Area / Ward">
                        <div class="row m-0 p-0">
                            <input class="col-lg-4  form-control mb-1" type="text" name="city" placeholder="City">

                            <input class="col-lg-4 form-control mb-1" type="text" name="district" placeholder="District">
                            <input class="col-lg-4 form-control mb-1" type="text" name="state" placeholder="State">
                            <input class="col-lg-6 form-control mb-1" type="text" name="country" placeholder="Country">
                            <input class="col-lg-6 form-control" type="number" name="pinCode" placeholder="Zip Code / Pin Code">

                        </div>

                    </div>
                </div><br>
                <hr>
                <br>
                <div class="pb-3">
                    <h3 class="">Education</h3>
                </div>


                <div class="row clearfix">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-bordered" id="tab_logic1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        Certificate/Degree
                                    </th>
                                    <th class="text-center">
                                        Stream
                                    </th>
                                    <th class="text-center">
                                        Board
                                    </th>
                                    <th class="text-center">
                                        School / University
                                    </th>
                                    <th class="text-center">
                                        Marks(%)
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="qualiBody">
                                <tr id='addr00' data-id="0" class="hidden">
                                    <td data-name="degreeDeploma[]">
                                        <select name="degreeDeploma[]" class="form-control">
                                            <option value="Matric">Matric</option>
                                            <option value="Secondary Education">Secondary Education</option>
                                            <option value="Graduation">Graduation</option>
                                            <option value="Post-Graduation">Post Graduation</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="">Other</option>

                                        </select>
                                    </td>
                                    <td data-name="streamSubjects[]">
                                        <select name="streamSubjects[]" class="form-control">
                                            <option value="">Select Option</option>
                                            <option value="1">All</option>
                                            <option value="2">Science</option>
                                            <option value="3">Commerce</option>
                                            <option value="3">Arts</option>
                                            <option value="3">Hotel Management</option>
                                            <option value="3">Computer Applications</option>
                                            <option value="3">Financial Marketing Management</option>
                                        </select>
                                    </td>
                                    <td data-name="board">
                                        <input type="text" name='board[]' placeholder='Board Name' class="form-control" />

                                    </td>
                                    <td data-name="university[]">
                                        <input type="text" name='university[]' placeholder='School/University' class="form-control" />

                                    </td>
                                    <td data-name="marks[]">
                                        <input type="number" name='marks[]' placeholder='82%' class="form-control" min="1" max="100" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <a onclick="cloneRow()" id="add_qualification" class="btn btn-primary text-white float-right">Add More
                            Qualifications</a>
                        <a onclick="removeRow()" id="add_qualification" class="btn btn-primary text-white float-right">x
                        </a>
                    </div>
                </div>

                <br>
                <hr>
                <br>
                <div class="pb-3">
                    <h3 class="">Experience</h3>
                </div>


                <div class="row clearfix">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-bordered" id="tab_logic2">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        Years of Experience
                                    </th>
                                    <th class="text-center">
                                        Role
                                    </th>
                                    <th class="text-center">
                                        Company
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr id='addr10' data-id="1" class="hidden">
                                    <td data-name="name">
                                        <input type="number" name='yearsOfExperience1' placeholder='Years' class="form-control" />
                                    </td>
                                    <td data-name="mail">
                                        <input type="text" name='experienceRole1' placeholder='Role' class="form-control" />
                                    </td>
                                    <td data-name="desc">
                                        <input type="text" name='experienceCompany1' placeholder='Name of Firm' class="form-control" />
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                        <a id="add_experience" class="btn btn-primary text-white float-right">Add Experience
                        </a>
                    </div>
                </div>
                <hr>
        </div>

        <div class="form-group row p-5">

            <div class="col-lg-6 w-50">
                <input type="reset" class="btn btn-secondary btn-block" value="Reset">
            </div>
            <div class="col-lg-6 col-6 mx-0 w-75">
                <input type="submit" class="btn btn-primary btn-block" value="Create Resume">
            </div>
        </div>


        </form>
    </div>
</div>
<!-- /form user info -->
</div>

<?php include('footer.php'); ?>