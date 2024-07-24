<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>\

	<!-- head file -->
	<?php include '../library/head.php'; ?>
	<!-- head file end -->

	<!-- nav file -->
    <?php include '../library/nav2.php'; ?>
    <!-- nav file end --> 

</head>
<body>
	<!-- main area -->

	<div class="container bg-white mt-4 p-3">
		<a href="../admin/db.php" class="btn btn-dark">Go Back</a><br><br><hr>
		<form action="sql/insert.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-6 mb-3">
				<label>Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
			<div class="col-sm-12 mb-3">
				<label>Description</label>
				<textarea name="description" class="form-control" style="height:200px;"></textarea>
			</div>
				<label>Price</label>
				<input type="text" name="price" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 1</label>
				<input type="file" name="img1" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 2</label>
				<input type="file" name="img2" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 3</label>
				<input type="file" name="img3" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 4</label>
				<input type="file" name="img4" class="form-control">
			</div>
			<div class="col-sm-12 mb-3 pt-5">
				<input type="submit" class="btn btn-primary w-100">
			</div>
		</div>
		</form>
	</div>
	<!-- Main Area End-->

	<div style="height:400px;"></div>
	</div>


	<!-- main area end-->
</body>
</html>