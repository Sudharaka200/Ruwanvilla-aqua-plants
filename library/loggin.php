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
				      aria-controls="pills-login" aria-selected="true">Login</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href=" ../library/register.php " role="tab"
				      aria-controls="pills-register" aria-selected="false">Register</a>
				  </li>
				</ul>
				<!-- Pills navs -->

				<!-- Pills content -->
				<div class="tab-content">
				  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
				    <form action="sql/loggin.php" method="POST">
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
				      <button type="submit" class="btn btn-warning btn-block mb-4">Sign in</button>

				      <!-- Register buttons -->
				      <div class="text-center">
				        <p>Not a member? <a href="../library/register.php">Register</a></p>
				      </div>
				    </form>
				  </div>
				  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
				    <form>
				     

				      <!-- Name input -->
				      <div class="form-outline mb-4">
				        <input type="text" id="registerName" class="form-control" />
				        <label class="form-label" for="registerName">Name</label>
				      </div>

				      <!-- Username input -->
				      <div class="form-outline mb-4">
				        <input type="text" id="registerUsername" class="form-control" />
				        <label class="form-label" for="registerUsername">Username</label>
				      </div>

				      <!-- Email input -->
				      <div class="form-outline mb-4">
				        <input type="email" id="registerEmail" class="form-control" />
				        <label class="form-label" for="registerEmail">Email</label>
				      </div>

				      <!-- Password input -->
				      <div class="form-outline mb-4">
				        <input type="password" id="registerPassword" class="form-control" />
				        <label class="form-label" for="registerPassword">Password</label>
				      </div>

				      <!-- Repeat Password input -->
				      <div class="form-outline mb-4">
				        <input type="password" id="registerRepeatPassword" class="form-control" />
				        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
				      </div>

				      <!-- Checkbox -->
				      <div class="form-check d-flex justify-content-center mb-4">
				        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
				          aria-describedby="registerCheckHelpText" />
				        <label class="form-check-label" for="registerCheck">
				          I have read and agree to the terms
				        </label>
				      </div>

				      <!-- Submit button -->
				      <button type="submit" class="btn btn-warning btn-block mb-3">Sign in</button>
				    </form>
				  </div>
				</div>
			</div>
</body>
</html>