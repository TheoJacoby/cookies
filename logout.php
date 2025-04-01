<?php

session_start(); // se connecter pour pouvoir ecraser les variables session
session_unset();
//COOKIE
session_destroy();

//supprimer cookie
setcookie("user_id","",time()-3600,"/");
setcookie("user_email","",time()-3600,"/");


header('Location: index.php');
exit();
