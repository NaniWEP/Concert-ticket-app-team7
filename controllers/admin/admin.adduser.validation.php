<?php
require "models/admin.model.php";
$userName = "";
$dateOfBirth = "";
$email = "";
$password ="";
$role = "";
$hash = "";
$formValid = true;
$datas = getShowData();

    if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        if (empty($_GET["username"]))
        {
            $formValid = false;
        }
        else
        {
            $userName = $_GET["username"];
        }
        if (empty($_GET["date-of-birth"]))
        {
            $formValid = false; 
        }
        else
        {
            $dateOfBirth = $_GET["date-of-birth"];
        }
        if (empty($_GET["email"])) 
        {
            $formValid = false;
        }
        else
        {
            $email = $_GET['email'];
            echo $email;
        }
        if (empty($_GET["password"]))
        {
            $formValid = false;
        }
        else{
            $password=$_GET["password"];
            $hash = password_hash($password ,PASSWORD_BCRYPT);    
        }
        if (empty($_GET["role"]))
        {
            $formValid = false;
        }
        else{
            $role = $_GET['role'];
        }

        if($formValid)
        {
            register($userName, $hash, $email , $dateOfBirth, $role);
            header("Location:/admin");
        }
}
    
