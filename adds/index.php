
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- head file -->
	<?php include '../library/head.php'; ?>
	<?php include '../library/db_conn.php'; ?>
	<!-- head file end -->

	<!-- nav file -->
    <?php include '../library/nav2.php'; ?>
    <!-- nav file end --> 

    <head>
    <body>
    	
    	<div class="container mt-4 bg-white rounded advert">
    		<?php 
    			$aid=$_REQUEST["aid"];
    			$sql = "SELECT * FROM advertisement WHERE aid='$aid' ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()){

    		?>
    	<div class="row">
 			<div class="col-sm-7 py-3">
				<h1><?php echo $row["title"]; ?></h1>

				<!-- carosuel -->
				    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				      <div class="carousel-indicators">
				        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
				      </div>
				      <div class="carousel-inner">
				        <div class="carousel-item active">
				          <img src="../images/uploads/<?php echo $row["img1"]; ?>" class="d-block " alt="..." style="width:100%; height: 600px; object-fit:contain; ">
				        </div>
				        <div class="carousel-item">
				          <img src="../images/uploads/<?php echo $row["img2"]; ?>" class="d-block " alt="..." style="width:100%; height: 600px; object-fit:contain;">
				        </div>
				        <div class="carousel-item">
				          <img src="../images/uploads/<?php echo $row["img3"]; ?>" class="d-block " alt="..." style="width:100%; height: 600px; object-fit:contain;">
				        </div>
				        <div class="carousel-item">
				          <img src="../images/uploads/<?php echo $row["img4"]; ?>" class="d-block " alt="..." style="width:100%; height: 600px; object-fit:contain;">
				        </div> 
				      </div>
				      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				        <span class="visually-hidden">Previous</span>
				      </button>
				      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				        <span class="carousel-control-next-icon" aria-hidden="true"></span>
				        <span class="visually-hidden">Next</span>
				      </button>
				    </div>
				<!-- carosuel end -->
						</div>
						<div class="col-sm-4 py-3 pt-5 border " style="margin-top:10px; margin-bottom: 10px;">
							<div class=" p-3 text-center sticky-top">
								<h2 >Description</h2> <br> <br>
								<p><?php echo $row["description"]; ?>
								</p>
									<hr>
								<a href="../adds/Order.php">
								<button type="button" class="btn btn-warning btn-lg" >Order Now</button>
								</a>
						</div>

					</div>
					<?Php } ?>
					
				</div>
				</div>

			</div>
	<div style="margin-top:35px; " class=" sticky-down">
    <!-- footer file -->
	<?php include '../library/footer.php';  ?>
	<!-- footer file end -->
    </div>
</body>
</head>