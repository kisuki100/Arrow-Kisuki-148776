<?php

 session_start();

require_once "../config/dbConnect.php"; 
 

// buy product process

if (isset($_POST["buyProduct"])){
	
	
	$product_name = mysqli_real_escape_string($dbConn, $_POST["product_name"]);
	$product_sellingprice = mysqli_real_escape_string($dbConn, $_POST["product_sellingprice"]);	
	$product_id = mysqli_real_escape_string($dbConn, $_POST["product_id"]);	
		
	
	
	
	$user_insert= "INSERT INTO tbl_purchase(product_name,product_sellingprice)VALUES('$product_name','$product_sellingprice')";
	
	
	if($dbConn->query($user_insert) === TRUE){
		header("Location: ../client/viewMyPurchase.php");
		exit();
	}
	else{
		die("Failed to insert the record: " .$dbConn->error);
	}
	
}


	?>