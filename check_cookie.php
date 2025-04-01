<?php

session_start();

if (isset($_COOKIE['user_id'])&& isset($_COOKIE['user_email'])) {
    //si il y a bien les cookies
    $_SESSION['user_id'] = $_COOKIE['user_id'];
    $_SESSION['user_email'] = $_COOKIE['user_email'];
} else{
    //si les cookies ne vont pas
    header('location: index.php');
    exit();
}