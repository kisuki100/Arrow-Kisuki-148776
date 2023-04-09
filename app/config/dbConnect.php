<?php

require_once "constants.php";

$dbConn= new mysqli(HOSTNAME, HOSTUSER, HOSTPASS, DBNAME);

if($dbConn->connect_error){ 
	die("Connnection Failed: " . $dbConn->connect_error);
}else{
	// print "The connection was successful!!! :-)";
} 


?>