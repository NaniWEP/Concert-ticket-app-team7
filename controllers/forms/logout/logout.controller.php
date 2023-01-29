<?php 
session_start();
// session_destroy();
// setcookie('user',$cookie_value, time() - 3600);

    // setcookie('email', $_COOKIE['email'], time() - 3600);
    // setcookie('password', $_COOKIE['password'], time() - 3600);
    unset($_COOKIE['email']); 
    unset($_COOKIE['password']); 
    setcookie('email', null, -1, '/');
    setcookie('password', null, -1, '/');
    // unset($_COOKIE['user']); 
    header('location:/');

?>