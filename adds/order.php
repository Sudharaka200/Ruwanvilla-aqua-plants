<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Head file -->
	<?php include '../library/head.php'; ?>
</head>
<body>
	<!-- Navbar file -->
	<?php include '../library/nav2.php'; ?>

	<!-- Main Area -->
	<div class="container col-sm-4 mt-4">
		<div class="bg-white rounded p-3">
			<h1 class="text-center" style="font-size:18pt;">Delivery Information</h1>
			<hr>
			<form action="sql/insert.php" method="POST">
				<label>Full Name</label>
				<input type="text" name="full_name" class="form-control mb-3" placeholder="" required>
				<label>Telephone</label>
				<input type="text" name="tel" class="form-control mb-3" placeholder="" required>
				<label>Address</label>
				<input type="text" name="address" class="form-control mb-3" placeholder="" required>
				<label>city</label>
				<input type="text" name="city" class="form-control mb-3" placeholder="" required>
				<label>Province</label>
				<input type="text" name="province" class="form-control mb-3" placeholder="" required>
				<input type="submit" class="btn btn-warning" value="Order Now">
			</form>
		</div>
	</div>
	<!-- Main Area End-->

	<div style="height:400px;"></div>

	<!-- Footer file -->
	<?php include '../library/footer.php'; ?>
</body>
</html>