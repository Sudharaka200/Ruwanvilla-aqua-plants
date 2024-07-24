<?php

// DB CONN
include '../../library/db_conn.php';

// Data
  $title= $_REQUEST["title"];
  $description = $_REQUEST["description"];
  $price= $_REQUEST["price"];
  $date_time=date('Y-m-d H:i:s');
	
// INSERT TO DB 
 $sql=" INSERT INTO advertisement(title,description,price,date_time) VALUES('$title','$description','$price','$date_time') ";
   if ($conn->query($sql) === TRUE) {} else { echo "Error: " . $sql . "<br>" . $conn->error; }

  // images
  for ($i=1; $i<=5 ; $i++) 
  {
    $img="img".$i;
    $temp=$_FILES["$img"]["tmp_name"];
     

    if ($temp!="") 
    {
      $name_x=$_FILES["$img"]["name"];
      $name="pic_".date('YmdHis')."_".rand(10,999999)."_".$name_x;
      $destination="../../images/uploads/".$name;

     move_uploaded_file($temp, $destination);
     // $sql=" INSERT INTO advertisement(img) VALUES('$img') ";
     $sql=" UPDATE advertisement SET $img='$name' WHERE date_time='$date_time' ";
     if ($conn->query($sql) === TRUE) {} else { echo "Error: " . $sql . "<br>" . $conn->error; }
    
  }
}

header("location:../db.php")

?>