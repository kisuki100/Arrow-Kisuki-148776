<?php

 session_start();

require_once "../config/dbConnect.php"; 
 

//create product process

if (isset($_POST["uploadProduct"])){
	
	$product_name = mysqli_real_escape_string($dbConn, $_POST["product_name"]);
	$product_sellingprice = mysqli_real_escape_string($dbConn, $_POST["product_sellingprice"]);	
		
	
	$path="../images/product/";
	
	$image_name = $_FILES["product_image"]["name"];
	
	$file_extension= pathinfo($_FILES["product_image"]["name"], PATHINFO_EXTENSION);
	
	$allowed_ext = array("png","jpg");
	
	
	$product_image = rand() .$food_name.'.'.$file_extension;
	
	$product_image_tmp_name = $_FILES["product_image"]["tmp_name"];
	
	$target = $path . $product_image;
	
	move_uploaded_file($product_image_tmp_name, $target);
	
	$user_insert= "INSERT INTO tbl_product(product_name,product_image,product_sellingprice)VALUES('$product_name','$product_image','$product_sellingprice')";
	
	
	if($dbConn->query($user_insert) === TRUE){
		header("Location: ../trader/uploadedProduct.php");
		exit();
	}
	else{
		die("Failed to insert the record: " .$dbConn->error);
	}
	
}



// Delete product process
	
	if(isset($_GET["DeleteProduct"])){
	$DeleteProduct = mysqli_real_escape_string($dbConn, $_GET["DeleteProduct"]);
	
	$DeleteFood_SQL = "DELETE FROM tbl_product WHERE food_id = '$DeleteProduct' LIMIT 1";
	 
	$uDelete_res = $dbConn->query($DeleteFood_SQL);
	if($DeleteFood_SQL === TRUE){
		header("Location: ../trader/uploadedProduct.php");
			exit();
		
		}else{
		print $dbConn->error;
		header("Location: ../trader/uploadedProduct.php");
			exit();
	}
}

	//Update product process
	
if (isset($_POST["editProduct"])){ 
	$product_name = mysqli_real_escape_string($dbConn, $_POST["product_name"]);
	$product_sellingprice = mysqli_real_escape_string($dbConn, $_POST["product_sellingprice"]);
	$product_id = mysqli_real_escape_string($dbConn, $_POST["product_id"]);
	
	$path="../images/product/";
	
	$image_name = $_FILES["product_image"]["name"];
	
	$file_extension= pathinfo($_FILES["product_image"]["name"], PATHINFO_EXTENSION);
	
	$allowed_ext = array("png","jpg");
	
	
	$product_image = rand() .$product_name.'.'.$file_extension;
	
	$product_image_tmp_name = $_FILES["product_image"]["tmp_name"];
	
	$target = $path . $product_image;
	
	move_uploaded_file($product_image_tmp_name, $target);

	$user_update= "UPDATE tbl_product SET product_name ='$product_name',product_image ='$product_image',product_sellingprice ='$product_sellingprice' WHERE product_id='$product_id' LIMIT 1";
	
	
	if($dbConn->query($user_update) === TRUE){
		header("Location: ../trader/uploadedProduct.php");
		exit();
	}
	else{
		print $dbConn->error;
		
	
	}
	
}


?>