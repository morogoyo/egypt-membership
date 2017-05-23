<?php


$servername = "mysql407.ixwebhosting.com";
$username = "C291024_trey";
$password = "Beast4414";
$dbname = "C291024_volunteers";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "egypt";
// $conn;

// Create connection

 $conn = new mysqli($servername, $username, $password, $dbname);
 global $conn;
// Check connection
if ($conn->connect_error) {
    die("Connection failed Call Rene: " . $conn->connect_error);
} 

else{
	
	// echo "Connected to data base";
	  
	}


	


?>
