
<?php
require "database/database.php";
require "models/form.model.php";
require 'views/forms/form.register.view.php'; 

if (isset($_POST['submit'])){
    
}
if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {

    $username = (!empty($_POST['user-name'])) ? $_POST['user-name'] : "No name";
    $email = (!empty($_POST['email'])) ? $_POST['email'] : "No email";
    $password = (!empty($_POST['password'])) ? $_POST['password'] : "No password";
    $hash = password_hash( $password ,PASSWORD_BCRYPT);
    $comfirmPassword = (!empty($_POST['comfirm-password'])) ? $_POST['comfirm-password'] : "No name";
    
   
};

register($username, $hash, $email);


header("Location:/");



