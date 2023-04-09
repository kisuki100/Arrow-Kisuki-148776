<?php

 session_start();

require_once "../config/dbConnect.php"; 
 

//sign up process

if (isset($_POST["signup"])){
	$surname = mysqli_real_escape_string($dbConn, $_POST["surname"]);
	$firstname = mysqli_real_escape_string($dbConn, $_POST["firstname"]);
	$othername = mysqli_real_escape_string($dbConn, $_POST["othername"]);
	$gender = mysqli_real_escape_string($dbConn, $_POST["gender"]);
	$dob = mysqli_real_escape_string($dbConn, $_POST["dob"]);
	$email = mysqli_real_escape_string($dbConn, $_POST["email"]);
	$password = mysqli_real_escape_string($dbConn, $_POST["password"]);
	$confirmpassword = mysqli_real_escape_string($dbConn, $_POST["confirmpassword"]);
	$role = mysqli_real_escape_string($dbConn, $_POST["role"]);
	
	$path="../images/people/";
	
	$image_name = $_FILES["profile_pic"]["name"];
	
	$file_extension= pathinfo($_FILES["profile_pic"]["name"], PATHINFO_EXTENSION);
	
	$allowed_ext = array("png","jpg");
	
	if (!in_array($file_extension, $allowed_ext )){
		header("Location: ../signup.php?wrong_file");
		exit();
	}
	$profile_pic = rand() .$password.'.'.$file_extension;
	
	$profile_pic_tmp_name = $_FILES["profile_pic"]["tmp_name"];
	
	$target = $path . $profile_pic;
	
	move_uploaded_file($profile_pic_tmp_name, $target);
	
	
	if($password != $confirmpassword){
		header("Location: ../signup.php");
		exit();
	}
	$hash_password = password_hash($confirmpassword, PASSWORD_DEFAULT);
	
	$user_insert= "INSERT INTO tbl_users(user_id,surname,firstname,othername,gender,dob,email,password,profile_pic, role_id,isdeleted)VALUES(NULL,'$surname','$firstname','$othername','$gender','$dob','$email','$hash_password','$profile_pic','$role','0')";
	
	
	if($dbConn->query($user_insert) === TRUE){
		header("Location: ../login.php");
		exit();
	}
	else{
	print $dbConn->error;
		// header("Location: ../signup.php");
		// exit();
		
	}
	
}

//login process
 if(isset($_POST["login"])){
	$entered_email = mysqli_real_escape_string($dbConn, $_POST["email"]);
	$entered_password = mysqli_real_escape_string($dbConn, $_POST["password"]);
	$email= '';

	$spot_email= "SELECT*FROM tbl_users WHERE email = '$entered_email' LIMIT 1";
	
	$uEmail_res = $dbConn->query($spot_email);
	
	if($uEmail_res->num_rows > 0){
		$_SESSION["control"] = $uEmail_res->fetch_assoc();
		
		$stored_password = $_SESSION["control"]["password"];
		$role_id = $_SESSION["control"]["role_id"];
		
		if(password_verify($entered_password, $stored_password)){
	// die("$userRole");
			if($role_id == 1){
			header("Location: ../admin/admin.php");
			exit();
		}elseif($role_id == 2){	
			header("Location: ../trader/trader.php");
			exit();
		}elseif($role_id == 3){	
			header("Location: ../client/client.php");
			exit();
		}else{
			unset($_SESSION["control"]);
			header("Location: ../login.php");
			exit();	
		
		
		}
	
	}else{
			
			header("Location: ../login.php?wrong_cred");
			exit();
			
		
		}

}else{
			
			header("Location: ../login.php?wrong_cred");
			exit();
				
		
		}
	
	}
	
	//logout process
	if(isset($_GET["logout"])){
		unset($_SESSION["control"]);
			header("Location: ../login.php");
			exit();
		
	}
	
	?>