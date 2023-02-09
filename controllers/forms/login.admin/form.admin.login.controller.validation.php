
<?php

session_start();
require "models/form.model.php";
//====================================================================
$passwordError = '';
$formValid = true;
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
            }
            else{
                $passwordError = "Your password is not correct";
                $formValid = false;
                $colorErrorPassword  = true;
            }
        }           
    }
    if($formValid)
    {   
        if ($role_id == 1){
            header("Location:/");
        }elseif($role_id == 2){
            header("Location:/");
        }if($role_id == 2 || $role_id == 1)
        {
            setcookie ("adminEmail",$_POST["email"], time() + 3600);
            setcookie ("adminPassword",$_POST["password"], time() + 3600);
        }
    }

}