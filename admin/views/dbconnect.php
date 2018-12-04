<?php
//error_reporting(0);
ob_start();
session_start();
$siteName = "Cipet.in";

//DEFINE("BASE_URL","http://cipetbhopal.com/");
//DEFINE("BASE_URL","http://localhost/oes/");

DEFINE ('DB_USER','lc7ojqmr');
DEFINE ('DB_PSWD','Yash@1997'); 
DEFINE ('DB_HOST','mysql7002.site4now.net'); 
DEFINE ('DB_NAME','lc7ojqmr_emns'); 

date_default_timezone_set('Asia/Calcutta'); 
$conn =  new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
if($conn->connect_error)
die("Failed to connect database ".$conn->connect_error );
?>