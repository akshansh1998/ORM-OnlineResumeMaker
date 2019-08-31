<?php

//Setting Default Value of $templateSelected as 0
//Purpose: Selecting Classic or Modern Template will change the value of this variable
//So, if the value remains the same, It can be checked that use have not selected any value yet
$templateSelected = "NO";

//Setting Website Name
define('TITLE', 'ORM Beta - Free Online Resume Maker - No Sign Up Required');


//function for the Choosing Template
//if user choose template, set value of $templateSelected as user select classic or modern
if (isset($_POST["template"])) {

    $templateSelected = $_POST["template"];
};
//if User have not Selected any Template and 
//He Directly Enter on the Pages viz. Enter Details & Final Resume Page.
//He will be Redirected back to the Select Template section on homepage
if ((($templateSelected === "NO") and ($_SERVER['REQUEST_URI'] != "/")) and (
        ($_SERVER['REQUEST_URI'] === "/enter-details.php")
        or ($_SERVER['REQUEST_URI'] === "/enter-details")
        or ($_SERVER['REQUEST_URI'] === "/final.php")
        or ($_SERVER['REQUEST_URI'] === "/final"))
) {
    header('Location: /#choose-template');
};




// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
function breadcrumbs($separator = '<span style="display: inline-block;padding:0 .5rem;color: #6c757d"> / <span> ', $home = 'Home')
{
    // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

    // This will build our "base URL" ... Also accounts for HTTPS :)
    $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

    // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
    $breadcrumbs = array('<li class="breadcrumb-item"><a href="' . $base . '">' . $home . '</a><li>');

    // Find out the index for the last value in our path array
    $last = end(array_keys($path));

    // Build the rest of the breadcrumbs
    foreach ($path as $x => $crumb) {
        // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
        $title = ucwords(str_replace(array('.php', '_'), array('', ' '), $crumb));

        // If we are not on the last index, then display an <a> tag
        if ($x != $last)
            $breadcrumbs[] =
                '<li class="breadcrumbs-item"><a href=\"$base$crumb\">$title</a></li>';
        // Otherwise, just display the title (minus)
        else
            $breadcrumbs[] = '<li class="breadcrumb-item active" aria-current="page">' . $title . '</li>';
    }

    // Build our temporary array (pieces of bread) into one big string :)
    return implode($separator, $breadcrumbs);
}



