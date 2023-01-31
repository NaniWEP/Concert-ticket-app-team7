<?php 
session_start();
// session_destroy();
    unset($_COOKIE['email']); 
    unset($_COOKIE['password']); 
    setcookie('email', null, -1, '/');
    setcookie('password', null, -1, '/');
    header('location:/');
?>