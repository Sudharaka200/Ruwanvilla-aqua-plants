<?php
 // DB CONN
 include '../../library/db_conn.php'; 

// Data
 $full_name= $_REQUEST["full_name"];
 $tel= $_REQUEST["tel"];
 $address= $_REQUEST["address"];
 $city= $_REQUEST["city"];
 $province= $_REQUEST["province"];

//INSERT TO DB
$sql="INSERT INTO oder(full_name,tel,address,city,province) VALUES('$full_name','$tel','$address','$city','$province')";
if ($conn->query($sql) === TRUE)
{
  echo "<script>";
  echo "alert('Oder Succesfull');";
  echo "window.location.replace('../../');";
  echo "</script>";
} else {
  echo "<script>";
  echo "alert('Error!');";
  echo "window.location.replace('../order.php');";
  echo "</script>";
}

?>