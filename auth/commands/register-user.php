<?php 
	include '../../db/connection.php';

	function registerOrang($email, $password, $user, $foto){
		global $connection;
		if($foto != ""){
		$extension_accepted = ['jpg','png','svg'];
		$x = explode('.',$foto);
		$extension =  strtolower(end($x));
		$file_tmp = $_FILES['foto']['tmp_name'];
		$rand = rand(1,999);
		$new_name = $rand . '-' . $foto;

		if(in_array($extension, $extension_accepted)){
			move_uploaded_file($file_tmp,'../../photo/' . $new_name);
			$query = "INSERT INTO register(email,password,user,foto) VALUES(
			'$email','$password','$user','$new_name'
		)";
			$result = mysqli_query($connection,$query);
			if (!$result){
				die("Query gagal dijalankan: " . mysqli_errno($connection) . 
				" - " . mysqli_error($connection));
			}
		}else{
			header("Location:../register.php?message=3");
		}
	}else{
		$query = "INSERT INTO register(email,password,user) VALUES(
			'$email','$password','$user'
	)";
	$result = mysqli_query($connection,$query);
	if (!$result){
		die("Query gagal dijalankan: " . mysqli_errno($connection) .
			" - " . mysqli_error($connection));
	}
	}
	}

if(isset($_POST['submit'])){
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
		$foto = $_FILES['foto']['name'];

		$queryValidation = "SELECT * FROM register WHERE email = '$email'";
		$resultValidation = mysqli_num_rows(mysqli_query($connection, $queryValidation));
		if($resultValidation > 0){
			header("Location:../register.php?message=1");
		} else{
			registerOrang($email,$password,$user,$foto);
			header("Location:../register.php?message=2");
		}
	}
?>