<?php
session_start();
include('db_connection.php');
error_reporting(E_ERROR | E_PARSE);


$c_phone = $_POST['phone'];
$c_password = $_POST['password'];


	




global $conn;
	
	if($conn-> connect_error){
		die(" connecction has failed ". $conn-> connect_error)	;
	}


else{
	
	
	 	$stmt2 ="SELECT * FROM user_profile WHERE  password= '$c_password' AND phone_number = '$c_phone' " ;
	 		
//echo $c_password ;
		
$row =  mysqli_query($conn, $stmt2);
 	
 			 			
 			if (mysqli_num_rows($row) == 1) {
		
			
			 
			$_SESSION['logged_in'] = true;
			$_SESSION['user'] = $c_phone;
			$_SESSION['login']= true;
		    header('Location:index.php'.$access_token);
			
		
}
else{
	
	$message = "failed Logged in";
          echo "<script type='text/javascript'>alert('$message');
		  window.location.href='sign_in.php';
		  </script>";	
	
	
}
	}


?>