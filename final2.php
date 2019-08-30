<?php
//Page Title Goes Here
define('PAGENAME', 'About');

include('header.php');
?>



<div class="bg-light">
    <div class="jumbotron jumbotron-fluid text-center">
        <h1 class="display-4">Here You Go</h1>
        <p class="lead mb-0">Hi <?php echo $_POST["fullName"]; ?>! Your <?php echo ucwords($templateSelected); ?> Resume is Ready<strong></strong>!</p>
        <a href="/#how-to-use"><small class="mt-0 small text-info">Simple Steps to Download & Print?</small></a>
    </div>
</div>

<div class="container">
    <div class="card card-outline-secondary my-5">
        <div class="card-header">
            <h3 class="mb-0 text-center">Download Your Resume for Free</h3>
        </div>
        <div class="card-body">
            <div class="final-resume-container border-bottom" id="ormContainer">
                <div class="text-center text-uppercase pb-1">
                    <h4>Resume</h4>
                </div>
                <div class="name-phone-email">

                    <div class="float-left customLineHeight font-weight-bold">
                        <p class="m-0"><?php echo $_POST["fullName"]; ?></p>
                    </div>
                    <div class="float-right">
                        <p class="m-0">
                            <span class="m-0">Cell: <span class=" font-weight-bold"><?php echo $_POST["phoneNumber"]; ?></span></span><br>
                            <span class="m-0">Email: <span class=" font-weight-bold"><?php echo $_POST["email"]; ?></span></span></p>
                    </div>
                    <br clear="all">
                </div>
                <!--name-phone-email-->
                <hr>
                <div>
                    <h6>Career Objectives</h6>
                    <p>To perceive a career in a renowned firm with dedicated efforts and to associate myself with
                        an organization that gives me a chance to update my knowledge.</p>
                </div>

                <hr>

                <div>
                    <h6>Educational Qualifications</h6>
                    <ul>

                        <?php


                        $qualifications = array(
                            'deploma' => $_POST["degreeDeploma"],
                            'subjects' => $_POST["streamSubjects"],
                            'board' => $_POST["board"],
                            'institute' => $_POST["university"],
                            'marks' => $_POST["marks"],
                        );


                        //Get Educational Qualifications as According to Entered
                        for ($i = 0; $i < count($qualifications['deploma']); $i++) {
                            $x = $i;
                            echo "<li>" . $qualifications[deploma][$x] . " From " . $qualifications[institute][$x]  . " Under " . $qualifications[board][$x] . " with " . $qualifications[marks][$x]  . "%" . "</li>";
                        };


                        ?>


                    </ul>
                </div>

                <hr>

                <div>
                    <h6>Experiences</h6>
                    <ul>
                        <li>
                            <span>
                                <?php echo $_POST["yearsOfExperience"]; ?>
                            </span>
                            Years Experience as
                            <span><?php echo $_POST["experienceRole"]; ?></span>
                            in
                            <span><?php echo $_POST["experienceCompany"]; ?></span>
                        </li>
                        <li>
                            <span>
                                <?php echo $_POST["yearsOfExperience"]; ?>
                            </span>
                            Years Experience as
                            <span><?php echo $_POST["experienceRole"]; ?></span>
                            in
                            <span><?php echo $_POST["experienceCompany"]; ?></span>
                        </li>



                    </ul>
                </div>

                <hr>

                <div>
                    <h6>Strengths</h6>
                    <ul class="list-unstyled">
                        <li class="">Good Communication Skills</li>
                        <li class="">Ready to take responsibility</li>
                        <li class="">Quick Learner and Good Interpersonal Skills</li>
                    </ul>
                </div>

                <hr>
                <div>
                    <h6>Personal Profile</h6>
                    <table class="table-borderless w-100">
                        <tr>
                            <th>Name</th>
                            <td>:&nbsp;&nbsp;</td>
                            <td><?php echo $_POST["fullName"]; ?></td>
                        </tr>
                        <tr>
                            <th>Father's Name</th>
                            <td>:&nbsp;&nbsp;</td>
                            <td><?php echo $_POST["FathersName"]; ?></td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>:&nbsp;&nbsp;</td>
                            <td><?php echo $newDate; ?></td>
                        </tr>
                        <tr>
                            <th>Merital Status</th>
                            <td>:&nbsp;&nbsp;</td>
                            <td><?php echo $_POST["meritalStatus"]; ?></td>
                        </tr>
                        <tr>
                            <th>Religion</th>
                            <td>:&nbsp;&nbsp;</td>
                            <td>Hindu</td>
                        </tr>
                        <tr>
                            <th>Nationality</th>
                            <td>:&nbsp;&nbsp;</td>
                            <td><?php echo $_POST["nationality"]; ?></td>
                        </tr>
                        <tr>
                            <th>Languages know</th>
                            <td>:&nbsp;&nbsp;</td>
                            <td><?php echo $_POST["langKnown"]; ?></td>
                        </tr>
                        <tr>

                            <th class=" align-top">Address</th>

                            <td class=" align-top">:&nbsp;&nbsp;</td>
                            <td><?php echo $_POST["village"]; ?><br>
                                <?php echo $_POST["ward"]; ?><br>
                                <?php echo $_POST["city"]; ?><br>
                                <?php echo $_POST["district"]; ?> <?php echo $_POST["state"]; ?> <?php echo $_POST["country"]; ?><br>
                                Pincode: <?php echo $_POST["pinCode"]; ?>
                            </td>
                        </tr>
                    </table>
                </div>

                <hr>

                <div>
                    <h6>Declaration</h6>
                    <p>I here by declare that the above information is correct and true to the best of my knowledge
                        and belief.</p>
                </div>
                <div>
                    <div class="float-left">
                        <span>Place:</span><br>
                        <span>Date:</span>
                    </div>
                    <div class="float-right">
                        <div class="font-weight-bold">(<?php echo $_POST["fullName"]; ?>)</div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer text-center">

            <button class="btn btn-primary mx-2" id="" onclick="openWin();">Download or Print PDF</a>

        </div>
    </div>


    <!-- /form user info -->
</div>


<!-- Open in Popup to Print or to Download -->


<script type="text/javascript">
    function openWin() {


        var divText = document.getElementById("ormContainer").outerHTML;
        var myWindow = window.open('', '', 'width=900,height=800');
        var doc = myWindow.document;
        doc.open();
        doc.write('<html><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /><link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"><style>body{margin: 10mm 10mm 10mm 10mm}</style><!-- Bootstrap CSS --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" /><link rel="stylesheet" href="style.css"><head><title>DIV Contents</title>');
        doc.write('</head><body>');
        doc.write(divText);
        doc.write('</body></html>');
        doc.close();


    }
</script>



<!-- Generate PDF Ends -->



<?php include("footer.php"); ?>