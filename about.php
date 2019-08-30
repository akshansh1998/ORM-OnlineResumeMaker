<?php
//Page Title Goes Here
define('PAGENAME', 'About');

$pageDescription = array(
    'text' => "Lets Build Your Resume!",
    'link' => "/"
);

include('header.php');
?>

<div class="jumbotron jumbotron-fluid text-center">
    <h1 class="display-4"><?php echo PAGENAME; ?></h1>
    <a class="lead" href="<?php echo $pageDescription[link] ?>"><?php echo $pageDescription[text] ?></a>
    <br>

    <nav class="breadcrumb d-inline-block" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php echo breadcrumbs(); ?>
        </ol>
    </nav>
</div>



<!-- Page Content Start -->
<section>
    <div class="bg-dark">
        <div class="container pb-5">
            <div class="text-white">
                image hai ye
            </div>
        </div>
    </div>
</section>
<!--end of image -->
<section>
    <div class="container pt-5">
        <h2 class="text-center text-captalize pt-5">onlineresumemaker-orm</h2>
        <div class="row">
            <div class="col-lg-l col-md-6 col-12">
                <img src="images/banner.jpg" class="img-fluid">
            </div>
            <div class="col-lg-l col-md-6 col-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">

        <h2 class="text-center text-captalize pt-5">who are the creater of Orm?</h2>
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-12 pb-5">
                <h2>
                    <h2>
                        <img src="images/banner.jpg">
            </div>

        </div>
    </div>
</section>
<!-- Page Content Ends -->


<?php
include('footer.php');

?>