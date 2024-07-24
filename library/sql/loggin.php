<?php
// DB CONN
include '../db_conn.php';

// Data
 $email= $_REQUEST["email"];
 $Password= $_REQUEST["Password"];


$check=0;
 $sql=" SELECT * FROM user WHERE email='$email' AND Password='$Password' ";
 $result = $conn->query($sql);
 while($row = $result->fetch_assoc())
{
	$check=1;
}

if ($check=1) 
{
	header("location:../../");
}





?>