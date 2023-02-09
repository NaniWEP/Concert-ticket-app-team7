<?php 
require 'models/form.create.show.model.php';
// require 'views/forms/form.create.show.view.php';
require 'models/seller.model.php';

// ========================================================================================= //

$titleError ="";
$title = "";
$descriptionError = "";
$description = "";
$typeIdError = "";
$typeId = '"';
$runningTimeError = "";
$runningTime = "";
$languageError = "";
$language = "";
$subtitleError = "";
$subtitle = "";
$imgShowError = "";
$imgShow = "";
$trailerError = "";
$trailer = "";
$dateError = "";
$date = "";
$timeError = "";
$time = "";
$formValid = true;


// $datas = getUserData();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // validation user name
        if (empty($_POST["title"]))
        {
            $titleError = "Please enter an username";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $title = $_POST["title"];
        }

        if (empty($_POST["description"]))
        {
            $descriptionError = "Please enter description";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $description = $_POST["description"];
        }

        if (empty($_POST["type-id"]))
        {
            $typeIdError = "Please enter type id";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $typeId = $_POST["type-id"];
        }

        if (empty($_POST["running-time"]))
        {
            $runningTimeError = "Please enter running time";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $runningTime = $_POST["running-time"];
        }

        if (empty($_POST["language"]))
        {
            $languageError = "Please enter description";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $language = $_POST["language"];
        }

        if (empty($_POST["subtitle"]))
        {
            $subtitleError = "Please enter subtitle";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $subtitle = $_POST["subtitle"];
        }

        if (empty($_POST["profile"]))
        {   
            $imgShowError = "Please enter img";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $imgShow = $_POST["profile"];
        }

        if (empty($_POST["trailer"]))
        {
            $trailerError = "Please enter trailer";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
            $trailer = $_POST["trailer"];
        }

        if (empty($_POST["date"]))
        {
            $dateError = "Please enter trailer";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
            $date = $_POST["date"];
        }

        if (empty($_POST["time"]))
        {
            $timeError = "Please enter time";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
            $time = $_POST["time"];
        }

        if($formValid)
        {
            insertDataShow( $title, $description,  $typeId,  $runningTime,  $language,  $subtitle, $imgShow,  $trailer);
            header("Location:/show");
        }
        
        if($formValid)
        {
            insertDateTime( $date, $time);
            header("Location:/show");
        }
}
 


//======================================================================//
// $edit_show = ' ';

