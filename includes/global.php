<?php
/////////////////////////////////////////////////////////////
//
//				global.php
//			General global file for site
//			
//			Mitch Facer - March 2014
//
/////////////////////////////////////////////////////////////

session_start();
/////////////////////////////////////////////////////////////
//				Database Connections
/////////////////////////////////////////////////////////////

if($_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='localhost'){
	$db = new mysqli('localhost', 'apt_selinsup', 'Legolas@mordor');
} else if (1>0){ //other server info here
	die("How did you get here? Really, we want to know. Email _______@goaptitude.com");
}

if($db->connect_errno > 0){
	die('Unable to connect to database [' . $db->connect_error . ']');
}