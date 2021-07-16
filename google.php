<?php

session_start();
include "vendor/autoload.php";

$client = new Google\Client();
$client->setApplicationName("CPI Login");
$client->setClientId('90318740486-up1nf7b33ibrgr4tmfcoroid8a5ojs92.apps.googleusercontent.com');
$client->setClientSecret('PFE0WXnHNLWvH63kV991oxve');
$client->setRedirectUri('http://localhost/Google/request.php');
$client->addScope("https://www.googleapis.com/auth/userinfo.email");

?>