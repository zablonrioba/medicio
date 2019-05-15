	<?php

include('db_connection.php');

error_reporting(E_ERROR | E_PARSE);

global $conn;
	
	if($conn-> connect_error){
		die(" connecction has failed ". $conn-> connect_error)	;
	}
	
	else{
		function getdoctors(){
			$row = $conn->prepare("SELECT * FROM `doctors`");
	 	//$result=mysql_query("SELECT * FROM doctors ");
	 	 while($row->fetch() ){
			return $row;
			  }
	}
	}
// while($row=mysql_fetch_array($result)){
	 			

?>