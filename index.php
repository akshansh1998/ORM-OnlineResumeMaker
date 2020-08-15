<?php
//Page Title Goes Here
define('PAGENAME', '');

include('function.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/icon.png" type="image/png" sizes="24x24" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- My Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <title><?php echo TITLE; ?></title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="">
    <div class="bg-light hero-image">
        <div class="container text-center">
            <h1 class="display-3">Create Your Resume in 5 Min</h1>
            <p class="lead">No Sign Up Required! 100% Free Forever
            </p>
            <a href="#choose-template" class="btn btn-primary btn-lg">Choose Template</a>
        </div>
    </div>
    <div class="bg-dark" id="choose-template">
        <div class="container">
            <div class="bg-transparent text-center text-white pb-5">
                <h1 class="display-4 font-weight-normal" style="color: #efefef;">Choose Template</h1>
                <hr width="100" size="5" style="border-top: 3px solid #efefef;">
            </div>
            <div class="row">

                <div class="col-lg-6 pb-5">
                    <div class="card custom-card text-center">
                        <div class="card-header">
                            <h5>Classic</h5>
                        </div>
                        <div class="card-img-top img-fluid img-responsive choose-template-card-image">
                            <img src="img/Asset3.svg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Simple Design</h5>
                            <p class="card-text">Classic Design with All Details and Plain Template & Easy to Edit
                            </p>
                            <form method="POST" action="enter-details.php">
                                <input type="text" class=" d-none" name="template" value="classic">
                                <input type="submit" class="btn btn-outline-primary btn-block" value="Select">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="card custom-card text-center">
                        <div class="card-header">
                            <h5>Modern</h5>
                        </div>
                        <div class="card-img-top img-fluid img-responsive choose-template-card-image">
                            <img src="img/Asset1.svg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Professional Design</h5>
                            <p class="card-text">More Complex Layout and a Little Difficult to Edit as Document
                            </p>
                            <form method="POST" action="">
                                <input type="text" class=" d-none" name="template" value="modern">
                                <input type="submit" class="disabled btn btn-outline-primary btn-block" value="Coming Soon" onclick="comingSoon()">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding-bottom: 100px;">
        <div id="how-to-use" class="bg-transparent text-center pt-5">
            <h1 class="display-4 font-weight-normal" style="color: #b3b3b3;">How to Use</h1>
            <hr width="100" size="5" style="border-top: 3px solid #b3b3b3;">
        </div>

        <div class="container-custom">
            <div class=" container">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Choose Your Favourite Template, <span class="text-muted">No Need to Sign Up</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="img/Asset1.svg" alt="" height="100%" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="container-custom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Enter Your Details, <span class="text-muted">Don't Worry it's Safe!</span>
                        </h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="img/Asset3.svg" alt="" height="100%" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="container-custom">
            <div class=" container">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">And lastly, Download Your <span class="text-muted">Resume.</span> It's Free</h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="img/Asset1.svg" alt="" height="100%" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <span class="featurette-divider"></span>


        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <?php include('footer.php'); ?>