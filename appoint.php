<?php

include('db_connection.php');
error_reporting(E_ERROR | E_PARSE);

$date = $_POST['date'];
$time = $_POST['time'];
$doctor_id = $_POST['doctor_id'];
// $user_id = $_POST['user_id'];
$user_id = "9";


	
	


global $conn;
	
	if($conn-> connect_error){
		die(" connecction has failed ". $conn-> connect_error)	;
	}


else{
	

	 	$stmt2 = $conn->prepare("INSERT INTO appointments (appointment_date,appointment_time,doctor_id,user_id)  VALUES (?,?,?,?)");
	 	$stmt2->bind_param( ssii, $date,$time,$doctor_id,$user_id);
	 	$stmt2->execute();
		
		
if(!empty($stmt2->insert_id)){
 $message = "you have successfully made an appointment";
          echo "<script type='text/javascript'>alert('$message');
		  window.location.href='index.php';
		  </script>";	
}
	}

?>