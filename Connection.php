<?php
$host = "localhost"; 			//Host
$username = "geniemarketdb";  	//User
$password = "kk753030!";  		//Password
$database = "geniemarketdb";	// Database Name

//creating a new connection object using mysqli 
$conn = new mysqli($host, $username, $password, $database) or die("Database connection failed.") ;
?>