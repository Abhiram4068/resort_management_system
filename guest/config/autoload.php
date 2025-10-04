<?php 


//your project path goes here
define("BASE_URL","http://localhost/resort_management3/");
define("BASE_PATH","c:wamp64/www/resort_management3/");

//set your timezone here
date_default_timezone_set('asia/kolkata');





 session_start();
 require(BASE_PATH.'config/database.php'); 
 require( BASE_PATH .'classes/database.php'); 
 require( BASE_PATH .'classes/FormAssist.class.php'); 
 require(BASE_PATH.'classes/FormValidator.class.php'); 
 require( BASE_PATH .'classes/DataAccess.class.php');
 


?>    