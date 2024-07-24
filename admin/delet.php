<?php
 	 // DB connection
		 include '../library/db_conn.php';


	// Variable
		 $aid=$_REQUEST["aid"];

	// SQL UPDATE
		 $sql=" DELETE FROM advertisement WHERE aid='$aid' ";

	// Execution
		 if ($conn->query($sql)=== TRUE) {
		 	header("location: db.php");
		 } else {
		 	echo "Error: " .$sql ."<br>" . $conn->error;
		 }


?>