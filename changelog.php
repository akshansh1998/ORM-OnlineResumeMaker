<?php
//Page Title Goes Here
define('PAGENAME', 'Change Log');

$pageDescription = array(
    'text' => "Lets Build Your Resume!",
    'link' => "/"
);


include('header.php');
include('function.php');
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


<?php
include('footer.php');

?>