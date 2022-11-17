<?php

include '../db/connection.php';
session_start();
if(!isset($_SESSION["user"]))
    header("Location: ../auth/login.php");

    $id = $_SESSION['user']['id'];
    $query= mysqli_query($connection,"SELECT * FROM register WHERE id='$id' ");
    $user = mysqli_fetch_array($query);

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

      @media screen and (max-width: 450px){
      
      .col-4 h3{
        font-size: 7px;
      }

      .col-4 p{
        font-size: 7px;
      }
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
              <a class="nav-link active" href="./trend_today.php">Today Trends</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="./ourmuseum.php">Our Museum</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Shop
              </a>
              <ul class="dropdown-menu text-center border-0" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./bed_room.php">Bed Room</a></li>
                <li><a class="dropdown-item" href="./living_room.php">Living Room</a></li>
                <li><a class="dropdown-item" href="./bath_room.php">Bath Room</a></li>
                <li><a class="dropdown-item" href="./kitchen_room.php">Kitchen Room</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="./aboutus.php">About</a>
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

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="../public/picture/museum/main2.jpg" class="d-block w-100 img-fluid">

          <div class="carousel-caption d-none d-md-block img-fluid">
            <h1 class="text-light">New perspectives on our heritage</h1>
            <br>
            <p class="text-light">We are the result of talented and talented people in the field of furniture. Which is where we work together to continue to create, continue to innovate, and continue to achieve what we want, namely creating affordable furniture.</p>
            <br>
        </div>
        
      </div>
    </div>


    <div class="container-fluid">
      
      <div class="row align-items-center justify-content-between" style="margin-top: 10rem;">
        
        <div class="col-8 gx-0">   
          <img src="../public/picture/museum/2.jpg" class="w-100">
        </div>

        <div class="col-4 text-center">
        <h3 class="text-dark">The Story Of ForFuture</h3>
        <p style="text-align: justify;">Step right into Småland and the inventiveness of the poor farming community. You’ll meet diligence and ingenuity, and see some of the beginnings of modern Sweden. Add together the industrious Småland creativity with the ideas of Swedish modernism and Ingvar Kamprad’s entrepreneurial spirit – and you have the embryo for ForFuture</p>
        </div>

        <div class="col-4 text-center mt-4">
        <h3 class="text-dark">Indonesia Design 2021</h3>
        <p style="text-align: justify;">The Indonesian Archipelago is filled with great natural beauty, diverse cultural traditions, and a colorful historical background. The architecture, both modern and ancient, is reflective of this chequerd and exciting historical past, especially as modern native architects attempt to use the savage beauty of their environment to create designs that interact and harmonize with everyday life. We check out the top contemporary Indonesian architects who are creating a wave of new “tropical modernism.”</p>
        </div>

        <div class="col-8 gx-0 mt-4">   
          <img src="../public/picture/museum/7.jpg" class="w-100">
        </div>

        <div class="col-8 gx-0 mt-4">   
          <img src="../public/picture/museum/5.jpg" class="w-100">
        </div>

        <div class="col-4 text-center mt-4">
        <h3 class="text-dark">Museum Furniture</h3>
        <p style="text-align: justify;">Mario Trimarchi, born in Sicily, has lived and worked in Milan since 1983. An architect of the ‘freehand’ generation has always moved freely within the visual universe and considers drawing, photography, design, and image equal components with the same theoretical approach.
        <br><br>“La Stanza dello Scirocco” is a range of items born out of the abstract and motionless atmosphere of a magic place: the room in large Sicilian country homes where one is forced to seek shelter from the sultriness while waiting for the sirocco to die down. </p>
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