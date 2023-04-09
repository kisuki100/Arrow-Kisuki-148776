<?php

session_start();

require_once "../config/dbConnect.php"; 
 

//create food process

if (isset($_POST["rateServer"])){
	
	$trader_name = mysqli_real_escape_string($dbConn, $_POST["trader_name"]);
	$rate = mysqli_real_escape_string($dbConn, $_POST["rate"]);
	
	
	$user_insert= "INSERT INTO tbl_rate(trader_name,rate)VALUES('$trader_name','$rate')";
	
	
	if($dbConn->query($user_insert) === TRUE){
		header("Location: ../client/viewRatedTrader.php");
		exit();
	}
	else{
		die("Failed to insert the record: " .$dbConn->error);
	}
	
}



?>