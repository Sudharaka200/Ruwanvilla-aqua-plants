
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>

	<!-- head file -->
	<?php include '../library/head.php'; ?>
	<?php include '../library/db_conn.php'; ?>
	<!-- head file end -->
	<!-- area-1 -->
		<div>
			<div class="video-cover">
				<video autoplay loop muted  style="margin-top: 0px; object-fit: cover;">
					<source src="../videos/cover1.mp4" type="video/mp4">
				</video>
			</div>

			<!-- nav file -->
			<?php include '../library/nav.php'; ?>
			<!-- nav file end -->

			<div class="content">
				<h2 class="about-store">SRI LANKAN LARGEST ONLINE AQUARIUM STORE</h2>

				<h1 class="headline">Buy aquatic plants online.</h1>
				<a href="https://www.facebook.com/profile.php?id=100083028707757"> <i class="fa fa-facebook-official" style="font-size:50px;color:white;margin-top: 25px;margin-left: 15px;" > </i></a>
				<i class="fa fa-instagram" style="font-size:50px;color:white;margin-top: 25px;margin-left: 15px;"> <a href="#"></a> </i>
				<i class="fa fa-twitter" style="font-size:50px;color:white;margin-top: 25px;margin-left: 15px;"> <a href="#"></a> </i>
					
			</div>
		</div>
	<!-- area-1 end-->
	<!-- area-2 -->
		<div style="margin-top:790px;">
			<center>
			<h1 style="">SHOP BY CATEGORY</h1>
			</center>

		<div>
			<div class="container  " style="background-color: #fffdfc; margin-top: 5px; margin-bottom: 15px;">
				<div class=" row row-cols-1 row-cols-md-4 g-4 " style="margin-top:25px;">
						<?php $sql = "SELECT * FROM advertisement ORDER BY aid DESC";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()) { ?>
							<div class="col box">
							<div class="card">
						  		<a href="../adds/?aid=<?php echo $row["aid"]; ?>" class="href">
						    <img src="../images/uploads/<?php echo $row["img1"]; ?>" class="card-img-top" alt="..." style="height: 300px; object-fit:contain;" >
						      <div class="card-body">
						        <h5 class="card-title name-colour " style="text-decoration: none;"> <?php echo $row["title"]; ?></h5><hr>
						        <h5 class="card-title price iprice" style="color: grey; ">Rs<?php echo number_format($row["price"]); ?>
						        </h5>
						    	</a>
						      </div> 
						 
						     </div> 
						  </div> 
						<?php }?> 
						
				    </div>
	   				</div> 
			   			</a></div>
			   		</div>
			   	</div>
			   </div>
			</div>
		</div>


	<!-- area-2 end-->

	<!-- footer file -->
	<?php include '../library/footer.php'; ?>
	<!-- footer file end -->

</body>
</html>