<?php

include 'check_cookie.php';

//mess de bienvenue

echo "Bonjour ".$_SESSION['user_id']."<br>";
echo "<a href='logout.php'>Logout</a>";


//POUR LA DEMO
echo "<h2>Cookies</h2>";
echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
