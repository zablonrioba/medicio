<?php 


function db_connect($host,$user,$pass,$db) {

   $conn = new mysqli($host, $user, $pass, $db);

   

   if($conn->connect_error) 
     die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());

   return $conn;
}

$conn = db_connect('localhost','root','','medicio');


?>