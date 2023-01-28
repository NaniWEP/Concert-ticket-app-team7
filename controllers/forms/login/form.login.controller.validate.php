<?php
session_start();
require "models/form.model.php";

//====================================================================
$passwordError = "";
$formValid = false;
$password = '';
$email='';
$emailError='';
$datas = getUserData();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST["email"])){
        $emailError = "Please enter your pemail";
        $colorErrorPass  = true;
        $formValid = false;
    }
    elseif (isset($_POST["email"])){
        $email = $_POST['email'];
        
    }
    if (empty($_POST["password"])) {
            $passwordError = "Please enter your password";
            $colorErrorPass  = true;
            $formValid = false;
    }
    elseif (isset($_POST["password"]))
    {
        $password = $_POST['password'];

        foreach($datas as $data){
            if ($data['email'] == $email && password_verify(  $password,$data['password'])){
                $formValid = true;
                setcookie ("email",$_POST["email"],time()+ 3600);
                setcookie ("password",$_POST["password"],time()+ 3600);
            }
            else{
                $passwordError = "Your password is not correct";
            }
        }           
    }
    if($formValid){
        header("Location:/");
    }
}
