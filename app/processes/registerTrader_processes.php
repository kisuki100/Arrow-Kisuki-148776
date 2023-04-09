<?php

 session_start();

require_once "../config/dbConnect.php"; 
 

//register process

if (isset($_POST["registerTrader"])){
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
		header("Location: ../admin/viewTrader.php?wrong_file");
		exit();
	}
	$profile_pic = rand() .$email.'.'.$file_extension;
	
	$profile_pic_tmp_name = $_FILES["profile_pic"]["tmp_name"];
	
	$target = $path . $profile_pic;
	
	move_uploaded_file($profile_pic_tmp_name, $target);
	
	
	if($password != $confirmpassword){
		header("Location: ../admin/viewTrader.php");
		exit();
	}
	$hash_password = password_hash($confirmpassword, PASSWORD_DEFAULT);
	
	$user_insert= "INSERT INTO tbl_users(user_id,surname,firstname,othername,gender,dob,email,profile_pic,password, role_id,isdeleted)VALUES(NULL,'$surname','$firstname','$othername','$gender','$dob','$email','$profile_pic','$hash_password','$role','0')";
	
	
	if($dbConn->query($user_insert) === TRUE){
		header("Location: ../admin/viewTrader.php");
		exit();
	}
	else{
	
		header("Location: admin/registerTrader.php");
		exit();
		// print $dbConn->error;
		
	}
	
}

// Delete trader process
	
	if(isset($_GET["DeleteTrader"])){
	$DeleteTrader = mysqli_real_escape_string($dbConn, $_GET["DeleteTrader"]);
	
	$DeleteUser_SQL = "DELETE FROM tbl_users WHERE user_id = '$DeleteTrader' LIMIT 1";
	 
	$uDelete_res = $dbConn->query($DeleteUser_SQL);
	if($DeleteUser_SQL === TRUE){
		header("Location: ../admin/viewTrader.php");
			exit();
		
		}else{
		print $dbConn->error;
		header("Location: ../admin/viewTrader.php");
			exit();
	}
}

	//Update trader process
	
if (isset($_POST["editTrader"])){ 
	$surname = mysqli_real_escape_string($dbConn, $_POST["surname"]);
	$firstname = mysqli_real_escape_string($dbConn, $_POST["firstname"]);
	$othername = mysqli_real_escape_string($dbConn, $_POST["othername"]);
	$gender = mysqli_real_escape_string($dbConn, $_POST["gender"]);
	$dob = mysqli_real_escape_string($dbConn, $_POST["dob"]);
	$email = mysqli_real_escape_string($dbConn, $_POST["email"]);
	$user_id = mysqli_real_escape_string($dbConn, $_POST["user_id"]);
	
	$path="../images/people/";
	
	$image_name = $_FILES["profile_pic"]["name"];
	
	$file_extension= pathinfo($_FILES["profile_pic"]["name"], PATHINFO_EXTENSION);
	
	$allowed_ext = array("png","jpg");
	
	$profile_pic = rand() .$email.'.'.$file_extension;
	
	$profile_pic_tmp_name = $_FILES["profile_pic"]["tmp_name"];
	
	$target = $path . $profile_pic;
	
	move_uploaded_file($profile_pic_tmp_name, $target);
	
	
	$user_edit= "UPDATE tbl_users SET surname ='$surname',firstname ='$firstname',othername ='$othername',gender ='$gender',dob ='$dob',email ='$email',profile_pic ='$profile_pic' WHERE user_id='$user_id' LIMIT 1";
	
	
	if($dbConn->query($user_edit) === TRUE){
		header("Location: ../admin/viewTrader.php");
		exit();
	}
	else{
		print $dbConn->error;
		
	
	}
	
}



?>