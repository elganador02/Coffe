<?php

include '../db/connection.php';
session_start();
if(!isset($_SESSION["user"]))
    header("Location: ../auth/login.php");

$id = $_SESSION['user']['id'];
$query= mysqli_query($connection,"SELECT * FROM register WHERE id='$id' ");
$user = mysqli_fetch_array($query);



if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $username = $_POST['user'];
        $foto = $_FILES['foto']['name'];
        
        
        if($foto != ""){

        $extension_accepted = ['png', 'jpg', 'svg'];
        $x = explode('.', $foto);
        $extension = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];
        $rand = rand(1,999);
        $new_name = $rand . '-' . $foto;

        if(in_array ($extension, $extension_accepted)){
            move_uploaded_file($file_tmp, '../photo/' . $new_name);

            $query = "UPDATE register SET email = '$email', user = '$username', foto = '$new_name' WHERE id=$id";
    
            $result = mysqli_query($connection, $query);
            if (!$result){
                die("query gagal dijalankan : " . mysqli_errno($connection)) .
                " - " . mysqli_error($connection);
            } else{
                echo "<script>alert('Data Berhasil Diubah.'); window.location='./settings.php';</script>";
            }

        }else{
            echo "<script>alert('Ekstensi Tidak Diperbolehkan .'); window.location='./settings.php';</script>";
        }


        }         

        else{
          $query = "UPDATE register SET email = '$email', user = '$username' WHERE id=$id";

        $result = mysqli_query($connection, $query);
        
        if (!$result){
            die("query gagal dijalankan : " . mysqli_errno($connection)) .
            " - " . mysqli_error($connection);
        } else{
            echo "<script>alert('Data Berhasil Diubah.'); window.location='./settings.php';</script>";
        }

        
        }
      }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
      
      footer{
        box-shadow: -1px -7px 31px -9px rgba(0,0,0,1);
        -webkit-box-shadow: -1px -7px 31px -9px rgba(0,0,0,1);
        -moz-box-shadow: -1px -7px 31px -9px rgba(0,0,0,1);
      }

    </style>

    <title>Projek Furniture</title>
  </head>
  <body> 
    
    <nav class="navbar navbar-expand-lg bg-light navbar-light mb-5 fixed-top" style="box-shadow: 2px 11px 31px -9px rgba(0,0,0,1);
  -webkit-box-shadow: 2px 11px 31px -9px rgba(0,0,0,1);
  -moz-box-shadow: 2px 11px 31px -9px rgba(0,0,0,1);">
      <div class="container-fluid">
        <a class="navbar-brand" href="../"><img src="../public/picture/logo1.png" width="70" height="60"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-2 p-2 text-center">
      
            <li class="nav-item">
              <a class="nav-link active" href="../pages/trend_today.php">Today Trends</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="../pages/ourmuseum.php">Our Museum</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Shop
              </a>
              <ul class="dropdown-menu text-center border-0" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../pages/bed_room.php">Bed Room</a></li>
                <li><a class="dropdown-item" href="../pages/living_room.php">Living Room</a></li>
                <li><a class="dropdown-item" href="../pages/bathroom.php">Bath Room</a></li>
                <li><a class="dropdown-item" href="../pages/kitchen_room.php">Kitchen Room</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="../pages/aboutus.php">About</a>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right ">
            
            <li class="nav-item dropdown text-center">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="fs-6 text-center">Selamat Datang, <?= $user['user'] ?>
                <span class="ms-2"><img src="../photo/<?= $user['foto'] ?>" 
                  width="40" height="40" style="border-radius: 20px;"></span>
              </a>
              <ul class="dropdown-menu text-center ms-6 px-3 border-0" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./settings.php">Settings</a></li>
                <li><a class="dropdown-item" href="../auth/commands/logout.php">Logout</a></li>
              </ul>
            </li>

          </ul>

        </div>
      </div>
    </nav>

    <!-- Navbar ENDS -->

    <div class="container">
      
      <div class="card border-0" 
      style="margin-top: 10rem; background-color: rgb(192, 192, 192); box-shadow: 1px 2px 5px 5px rgba(0,0,0,0.4);
            -webkit-box-shadow: 1px 2px 5px 5px rgba(0,0,0,0.4);
            -moz-box-shadow: 1px 2px 5px 5px rgba(0,0,0,0.4);">
        <div class="card-header border-0">
          Profile
        </div>
        <div class="card-body">
          
          <form method="POST" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['email'] ?>">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['user'] ?>">
            </div>

          <div class="mb-3">
            <label for="formFile" class="form-label">Profile Photo</label>
            <input class="form-control" name="foto" type="file" id="formFile" name="foto">
          </div>
            <button name="submit" type="submit" class="btn btn-light">Submit</button>
          </form>

        </div>
      </div>

    </div>

    <footer class="mt-5">
      <div class="container ">

        <div class="row py-4 justify-content-between align-items-center">
          <div class="col-lg-4 col-md-12 mb-lg-0 text-center ">
            <img src="../public/picture/logo1.png" width="160" class="mb-3 text-center">
            <p class="font-italic text-muted">Thanks For Visiting Our Website</p>
            <ul class="list-inline mt-4">
              <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fab fa-twitter" 
                style="color:  #8C8A8A ;"></i></a></li>

              <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fab fa-facebook"
                style="color:  #8C8A8A ;"></i></a></li>

              <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fab fa-instagram"
                style="color:  #8C8A8A ;"></i></a></li>

              <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fab fa-pinterest"
                style="color:  #8C8A8A ;"></i></a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 mb-lg-0 text-center">
            <h6 class="text-uppercase font-weight-bold mb-4 mt-5">Shop</h6>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><a href="./bed_room.php" class="text-muted text-decoration-none">Bed Room</a></li>
              <li class="mb-2"><a href="./living_room.php" class="text-muted text-decoration-none">Living Room</a></li>
              <li class="mb-2"><a href="./bathroom.php" class="text-muted text-decoration-none">Bath Room</a></li>
              <li class="mb-2"><a href="./kitchen_room.php" class="text-muted text-decoration-none">Kitchen Room</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 mb-lg-0 text-center ">
            <h6 class="text-uppercase font-weight-bold mb-4 mt-5">Company</h6>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><a href="./pages/aboutus.php" class="text-muted text-decoration-none">About Us</a></li>
            </ul>
          </div>
          
        </div>
      </div>

    </footer>

    <script src="../public/assets/js/bootstrap.min.js"></script>
  </body>
</html>