<!DOCTYPE html>
<html>

<head>
	<title>I Said Coffee</title>


	<link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/assets/style.css">

</head>

<body background="../public/picture/login.jpg">

	<div class="card mb-3 position-absolute top-50 start-50 translate-middle border-0" style="max-width: 720px; background-color: rgba(255,255,255,0.1); -webkit-box-shadow: -1px 12px 22px -1px rgba(0,0,0,0.59); 
			box-shadow: -1px 12px 22px -1px rgba(0,0,0,0.59);">
		<?php
		if (isset($_GET['message'])) {
			if ($_GET['message'] == 1) {
				echo "
        					<div class='alert alert-danger' role='alert'>
              				Email atau password anda salah
          					</div>
      						";
			}
		}
		?>
		<div class="row g-0 justify-content-center align-items-center rounded overflow-hidden">
			<div class="col-6">
				<img src="../public/picture/back kopi.jpg" style="display: block; height: 442px;" class="img-fluid">
			</div>
			<div class="col-6">
				<div class="card-body">
					<h5 class="card-title">Login</h5>
					<p class="card-text">Please Login Your Account</p>
					<form action="./commands/login-user.php" method="POST" enctype="multipart/form-data">
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input type="email" class="form-control" name="email" aria-describedby="emailHelp">

						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Password</label>
							<input type="password" class="form-control" name="password">
							<div id="emailHelp" class="form-text">Dont Have Account ?
								<a href="register.php" style="text-decoration: none;">Register</a>
							</div>
						</div>

						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<script src="../public/assets/js/bootstrap.min.js"></script>
</body>

</html>