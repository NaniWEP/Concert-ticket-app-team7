
<?php

session_start();
require "models/form.model.php";
//====================================================================
$formValid = false;
$passwordError = '';
$userName = '';
$password = '';
$email='';
$emailError='';
$datas = getUserData();
$role_id = '';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(empty($_POST["email"]))
    {
        $emailError = "Please enter your email";
        $colorErrorEmail  = true;
        $formValid = false;
    }
    elseif (isset($_POST["email"]))
    {
        $email = $_POST['email'];
        foreach($datas as $data){
            if ($data['email'] == $email)
            {
                $emaillValueCookie = $_POST["email"];
            }else{
                $emailError = "Does not find user's email";
                $colorErrorEmail  = true;
            }
        }
    }
    if (empty($_POST["password"])) 
    {
        $passwordError = "Please enter your password";
        $colorErrorPassword  = true;
        $formValid = false;
    }
    elseif (isset($_POST["password"]))
    {
        $password = $_POST['password'];
        foreach($datas as $data)
        {
            if ($data['email'] == $email && password_verify( $password,$data['password']))
            {
                $role_id = $data['role_id'];
                $formValid = true;
            }
            else{
                $passwordError = "Your password is not correct";
                $colorErrorPassword  = true;
            }
        }           
    }

    if($formValid)
    {   setcookie("username", $data['name'], time() + 3600);

        setcookie ("email",$_POST["email"], time() + 3600);
        setcookie ("password",$_POST["password"], time() + 3600);
        setcookie("role_id", $role_id, time() + 3600);
        if ($role_id == 3){
            header("Location:/");
        }
        elseif($role_id == 2){
            header("Location:/seller");
        }
        elseif($role_id == 1){
            header("Location:/admin");    
        }
    }
}