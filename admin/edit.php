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
	<?php
		$aid=$_REQUEST["aid"];
		$sql = "SELECT * FROM advertisement WHERE aid>='$aid' ";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) { ?>
	<!-- main area -->

	<div class="container bg-white mt-4 p-3">
		<a href="../admin/db.php" class="btn btn-dark">Go Back</a><br><br><hr>
		<form action="sql/insert.php" method="GET" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-6 mb-3">
				<label>Title</label>
				<input type="text" name="title" class="form-control" value="<?php echo $row["title"]; ?>">
			</div>
			<div class="col-sm-4 mb-3">
			<div class="col-sm-12 mb-3">
				<label>Description</label>
				<textarea name="description" class="form-control" style="height:200px;"></textarea value="<?php echo $row["description"]; ?>">
			</div>
				<label>Price</label>
				<input type="text" name="price" class="form-control" value="<?php echo $row["price"]; ?>">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 1</label>
				<input type="file" name="img1" class="form-control" value="<?php echo $row["img1"]; ?>">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 2</label>
				<input type="file" name="img2" class="form-control" value="<?php echo $row["img2"]; ?>">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 3</label>
				<input type="file" name="img3" class="form-control" value="<?php echo $row["img3"]; ?>">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 4</label>
				<input type="file" name="img4" class="form-control" value="<?php echo $row["img4"]; ?>">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 5</label>
				<input type="file" name="img5" class="form-control" value="<?php echo $row["img5"]; ?>">
			</div>
			<div class="col-sm-12 mb-3 pt-5">
				<input type="submit" class="btn btn-primary w-100">
			</div>
		</div>
		</form>
		<?php }?> 
	</div>
	<!-- Main Area End-->

	<div ></div>
	</div>
	<!-- main area end-->
</body>
</html>