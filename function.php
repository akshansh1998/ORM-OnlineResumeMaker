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

