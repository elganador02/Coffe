<!DOCTYPE html>
<html>
<head>
	<title>I Said Coffee</title>


	<link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/assets/style.css">

</head>
<body background="../public/picture/login.jpg" class="img-fluid" style="-webkit-filter: 5px;">

	<!-- <nav class="navbar navbar-expand-lg navbar-light">
	  <div class="container-fluid">
	    <a class="navbar-brand"><img src="../public/picture/logo1.png" width="70px" height="60px"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="#">Home</a>
	        <a class="nav-link" href="#">Features</a>
	        <a class="nav-link" href="#">Pricing</a>
	        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	      </div>
	    </div>
	  </div>
	</nav> -->


	
		<div class="card mb-3 position-absolute top-50 start-50 translate-middle border-0" style="max-width: 720px; background-color: rgba(255,255,255,0.1); -webkit-box-shadow: -1px 12px 22px -1px rgba(0,0,0,0.59); 
			box-shadow: -1px 12px 22px -1px rgba(0,0,0,0.59);">
		  <div class="row g-0 justify-content-center align-items-center">
		  	<?php 
    			if(isset($_GET['message'])){
      				if($_GET['message'] == 1){
        				echo "
        					<div class='alert alert-danger' role='alert'>
                  			Email sudah pernah digunakan.
        					</div>
        					";
      				}
      				elseif($_GET['message'] == 2){
        				echo "
        					<div class='alert alert-success' role='alert'>
                  			Berhasil mendaftar !
        					</div>
        					";
     				}
      				elseif($_GET['message'] == 3){
        				echo "
        					<div class='alert alert-danger' role='alert'>
                  			Ekstensi photo tidak boleh digunakan !
        					</div>
        					";
      				}
    			}
  			?>
		    <div class="col-6">
		      <img src="../public/picture/back kopi.jpg" style="display: block; height: 442px;" class="img-fluid">
		    </div>
		    <div class="col-6">
		      <div class="card-body">
		        <h5 class="card-title">Sign Up</h5>
		        <div id="emailHelp" class="form-text mb-2 mt-2">Already Have Account ? 
				    	<a href="login.php" style="text-decoration: none;">Login</a>
				</div>
		        <form action="./commands/register-user.php" method="POST" enctype="multipart/form-data">
				  <div class="mb-2">
				    <label for="exampleInputEmail1" class="form-label">Email address</label>
				    <input type="email" class="form-control" name="email">
				  </div>

				  	<div class="mb-2">
				    <label for="exampleInputPassword1" class="form-label">Password</label>
				    <input type="password" class="form-control" name="password">
				    
				    </div>
				  	

				  	<div class="mb-2">
				    <label for="exampleInputEmail1" class="form-label">Username</label>
				    <input type="text" class="form-control" name="user">
				  	</div>

				  	<div class="mb-3">
					  <label for="formFile" class="form-label">Profile Photo</label>
					  <input class="form-control" type="file" id="formFile" name="foto">
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