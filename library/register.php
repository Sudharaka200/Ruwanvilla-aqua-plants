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
	<div class="container" style="background-color: #fffdfc;margin-top: 15px;">
				<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
				  <li class="nav-item" role="presentation">
				    <a class="nav-link " id="tab-login" data-mdb-toggle="pill" href="../library/loggin.php" role="tab"
				      aria-controls="pills-login" aria-selected="true">Login</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
				      aria-controls="pills-register" aria-selected="false">Register</a>
				  </li>
				</ul>

				
          <div class="card" >
            <div class="card-body py-5 px-md-5">
              <form action="sql/insert.php" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="first_name" id="form3Example1" class="form-control" placeholder="" required/>
                      <label class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="last_name" id="form3Example2" class="form-control" placeholder="" required />
                      <label class="form-label" for="form3Example2"  >Last name</label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3" class="form-control" placeholder=""  required/>
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4" class="form-control" placeholder="" required />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                 
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-warning btn-block mb-4">
                  Sign up
                </button>

                <!-- Register buttons -->

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>