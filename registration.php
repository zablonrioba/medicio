<?php

include('db_connection.php');
error_reporting(E_ERROR | E_PARSE);

$c_fname = $_POST['first_name'];
$c_lname = $_POST['last_name'];
$c_email = $_POST['email'];
$c_phone = $_POST['phone'];
$c_password = $_POST['password'];


		
	
	

if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['phone']) &&isset($_POST['password'])){


global $conn;
	
	if($conn-> connect_error){
		die(" connecction has failed ". $conn-> connect_error)	;
	}


else{
	
			// get current date
	date_default_timezone_set("Africa/Nairobi");
	$date = date("Y-m-d");
	 	$stmt2 = $conn->prepare("INSERT INTO user_profile (first_name,last_name,email,phone_number,password,date )  VALUES (?,?,?,?,?,?)");
	 	$stmt2->bind_param( ssssss, $c_fname,$c_lname,$c_email,$c_phone,$c_password,$date);
	 	$stmt2->execute();
		
		
if(!empty($stmt2->insert_id)){
 $message = "you have successfully registered ";
          echo "<script type='text/javascript'>alert('$message');
		  window.location.href='index.php';
		  </script>";	
}
	}
}

?>