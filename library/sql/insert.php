<?php
 // DB CONN
include '../db_conn.php';


// Data
 $first_name= $_REQUEST ["first_name"];
 $last_name= $_REQUEST["last_name"];
 $email= $_REQUEST["email"];
 $password= $_REQUEST["password"]; 
 $date_time=date('Y-m-d H:i:s');
	
// INSERT TO DB 
 $sql=" INSERT INTO user(first_name,last_name,email,password,date_time) VALUES('$first_name','$last_name','$email','$password','$date_time') ";
 if ($conn->query($sql) === TRUE) {
  echo "<script>";
  echo "alert('Registration success. Please login!');";
  echo "window.location.replace('../../library/loggin.php');";
  echo "</script>";
} else {
  echo "<script>";
  echo "alert('Error!');";
  echo "window.location.replace('../../library/register.php');";
  echo "</script>";
}
  ?>