
<?php
session_start();
require "models/form.model.php";

// =========================================================================================

$userNameError ="";
$userName = "";
$emailError = "";
$email = "";
$passwordError = "";
$password ="";
$comfirmPasswordError = "";
$comfirmPassword = "";
$formValid = true;


    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        if (empty($_POST["username"]))
        {
            $userNameError = "Please enter a username";
            $colorErrorName  = true;
            $formValid = false;
        }
        elseif(isset($_POST["username"]))
        {
            $userName = $_POST["username"];
            $uppercase = preg_match('@[A-Z]@', $userName);
            $lowercase = preg_match('@[a-z]@', $userName);
            if (!$uppercase || !$lowercase)
             {
                $userNameError = "Username should contains only letters: a-z, A-Z";
                $colorErrorName  = true;
                $formValid = false;
            }
        }
        else
        {
                $userName = $_POST["username"];

                
        }

        if (empty($_POST["email"])) 
        {
            $emailError = "Please enter an email";
            $colorErrorEmail  = true;
            $formValid = false;
        }
        elseif (isset($_POST["email"]))
        {
            $email = $_POST["email"];
            $emailPattern = preg_match('/\\S+@\\S+\\.\\S+/', $email);
            if(!$emailPattern)
            {
                $emailError = "Please enter a property email";
                $colorErrorEmail  = true;
                $formValid = false;
            }
            
        }
        if (empty($_POST["password"]))
        {
            $passwordError = "Please enter password";
            $colorErrorPassword  = true;
            $formValid = false;
        }
        elseif (isset($_POST["password"])) 
        {
            $password = $_POST['password'];
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);

            if (!$uppercase || !$lowercase || !$number || strlen($password) < 8 )
             {
                    $passwordError = "Password should be contain a strong password";
                    $formValid = false;
            }
        }
        else{
            $password=$_POST["password"];
            
        }

        if (empty($_POST["comfirmPassword"]))
        {
            $comfirmPasswordError = "Please enter a comfirm password";
            $colorErrorComfirm  = true;
            $formValid = false;
        }
        elseif (!empty($_POST["comfirmPassword"]))
        {
            $comfirmPassword = $_POST["comfirmPassword"];
            if ($comfirmPassword != $password){

                $comfirmPasswordError = "Your password does not match";
                $formValid = false;
            }else 
            {
                $hash = password_hash($password ,PASSWORD_BCRYPT);
                
            }

        }

        if($formValid)
        {
            register($userName, $hash, $email);
            header("Location:/");
        }
        
    }
    
