<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- head file -->
	<?php include '../library/head.php'; ?>
	<!-- head file end -->

	<!-- nav file -->
    <?php include '../library/nav2.php'; ?>
    <!-- nav file end --> 

</head>
<body>
	<!-- Pills navs -->
			<div class="container" style="background-color: #fffdfc;margin-top: 15px;">
				<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
				  <li class="nav-item" role="presentation">
				    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
				      aria-controls="pills-login" aria-selected="true">Admin Login</a>
				  </li>
				</ul>
				<!-- Pills navs -->
				<!-- Pills content -->
				<div class="tab-content">
				  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
				    <form action="db.php" method="POST">
				      <!-- Email input -->
				      <div class="form-outline mb-4">
				        <input type="email" name="email" id="loginName" class="form-control" placeholder="name@gmail.com" required />
				        <label class="form-label" for="loginName" >Email or username</label>
				      </div>

				      <!-- Password input -->
				      <div class="form-outline mb-4">
				        <input type="password" name="Password" id="loginPassword" class="form-control"  placeholder="********" required />
				        <label class="form-label" for="loginPassword">Password</label>
				      </div>

				      <!-- 2 column grid layout -->
				      <div class="row mb-4">
				        <div class="col-md-6 d-flex justify-content-center">
				          <!-- Checkbox -->
				          <div class="form-check mb-3 mb-md-0">
				            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
				            <label class="form-check-label" for="loginCheck"> Remember me </label>
				          </div>
				        </div>

				        <div class="col-md-6 d-flex justify-content-center">
				          <!-- Simple link -->
				          <a href="#!">Forgot password?</a>
				        </div>
				      </div>

				      <!-- Submit button -->
				      <button type="submit" class="btn btn-primary btn-block mb-4"> Log In </button>
					 </form>
				  </div>
				</div>
			</div>
</body>
</html>