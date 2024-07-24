<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>\

	<!-- head file -->
	<?php include '../library/head.php'; ?>
	<?php include '../library/db_conn.php'; ?>
	<!-- head file end -->

	<!-- nav file -->
    <?php include '../library/nav2.php'; ?>
    <!-- nav file end --> 
</head>
<body>
	<!-- main area -->
	<center>
	<div class="container bg-white mt-4 p-3" >
		<h1>Welcome !</h1> <hr>
		<a href="../admin/new_add.php" class="btn btn-warning" style="height:50px;">Post New Add</a>	
	<!-- Main Area End-->

	 <hr style="margin-bottom: 55px;">
			<center>
			<h4 style="">Edit Adds</h4>
			</center>
				
	<div class=" row row-cols-1 row-cols-md-6 g-6 " style="margin-top:25px;">
				  	<?php

						$sql = "SELECT * FROM advertisement WHERE aid>='1' ORDER BY aid DESC";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()) { ?>



							<div class="col box">
							<div class="card" >
								<h5>add ID-<?php echo $row["aid"]; ?> </h5>
						  		<a href="../adds/?aid=<?php echo $row["aid"]; ?>" class="href">
						    <img src="../images/uploads/<?php echo $row["img1"]; ?>" class="card-img-top" alt="..."  style="height: 300px; object-fit:contain;">
						      <div class="card-body">
						        <h5 class="card-title name-colour " style="text-decoration: none;"> <?php echo $row["title"]; ?></h5><hr>
						        <h5 class="card-title price iprice" style="color: grey; ">Rs<?php echo number_format($row["price"]); ?>
						        </h5></a>
						        <a href="edit.php?aid=<?php echo $row["aid"]; ?>" class="btn btn-info" >Edit</a>
						        <a href="delet.php?aid=<?php echo $row["aid"]; ?>" onclick="return confirm('Are You Sure !')"  class="btn btn-danger" >Delete</a>
						      </div> 
						     </div> 
						  </div> 
						<?php }?> 
						</div>
	   				</a>
	<!-- main area end-->
	<br><br><br>
	<hr>
	<!-- User data -->
	<div class="container text-center" >
		<h1>Orders</h1>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Telephone</th>
						<th>Address</th>
						<th>City</th>
						<th>Province</th>
					</tr>
				</thead>
				<tbody>
					<?php $sql=" SELECT * FROM oder WHERE cid>='1' ORDER BY cid DESC  ";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc())
					{ ?>

					<tr>
						<td><?php echo $row["cid"]; ?> </td>
						<td><?php echo $row["full_name"]; ?> </td>
						<td><?php echo $row["tel"]; ?> </td>
						<td><?php echo $row["address"]; ?> </td>
						<td><?php echo $row["city"]; ?> </td>
						<td><?php echo $row["province"]; ?> </td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
	</div>


	<!-- User data end -->
				</div>
			</div>
		</div>
	</div>

</body>
</html>