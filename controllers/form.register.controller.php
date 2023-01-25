
<?php

require 'views/forms/form.register.view.php';
require 'models/form.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = (!empty($_POST['user-name'])) ? $_POST['user-name'] : "No name";
    $email = (!empty($_POST['email'])) ? $_POST['email'] : "No email";
    $password = (!empty($_POST['password'])) ? $_POST['password'] : "No password";
    $comfirmPassword = (!empty($_POST['comfirm-password'])) ? $_POST['comfirm-password'] : "No name";
    
   
};
register( $username,$password,  $email);

header("Location:");



