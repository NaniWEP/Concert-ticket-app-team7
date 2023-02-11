<?php 
require 'models/form.create.show.model.php';
require 'models/seller.model.php';
require 'models/detail.model.php';
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
$showId ='';
$dateTimeId = "";
$image = "";
$image_tmp_name = "";
$image_folder = "";
$countFormvalid =0;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
        if(isset($_POST['upload']))
        {
            $image = $_FILES['image']['name'];
            $image_tmp_name=$_FILES['image']['tmp_name'];
            $image_folder='assets/movies/'. $image;
            move_uploaded_file($image_tmp_name, $image_folder);
        }
               
        // validation title
        if(empty($_POST["title"])){
            $titleError = "Please enter an username";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $title = $_POST["title"];
        }
        // validation description
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
          // validation  type id
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
        // validation running time
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
        // validation language
        if (empty($_POST["language"]))
        {
            $languageError = "Please enter language";
            $colorErrorName  = true;
            $formValid = false;
        }
        else
        {
                $language = $_POST["language"];
        }
        // validation subtitle
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
        // validation image
        if ($_FILES['image']['name'] != '')
        {
            $imgShow = $_FILES['image']['name'];
        }else
        {
            $imgShowError = "Please choose an image";
            $colorErrorName  = true;
            $formValid = false;
        }
        // validation trailer
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
        // validation date
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
        // validation time
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
        if ((isset($_POST['upload'])))
        {
                $image = $_FILES['image']['name'];
                $image_tmp_name=$_FILES['image']['tmp_name'];
                $image_folder='assets/movies/'. $image;
                move_uploaded_file($image_tmp_name, $image_folder);
                if($formValid)
                {
                    insertDataShow( $title, $description,  $typeId,  $runningTime,  $language,  $subtitle, $imgShow,  $trailer,8);
                    $allDataShows = getShowData();
                    foreach($allDataShows as $allDataShow){
                        $showId = $allDataShow['id'];
                    }
                    $countFormvalid += 1;
                }
                if($formValid)
                {
                    insertDateTime( $date, $time);
                    $allDataDatetimes = getDateTimeData();
                    foreach($allDataDatetimes as $allDataDatetime){
                        $dateTimeId = $allDataDatetime['id'];
                    }
                    
                    $countFormvalid +=1;
                }
                if($countFormvalid == 2){
                    insertShowDateTime($showId,  $dateTimeId);
                    header("Location:/");
                }
        }
        

}