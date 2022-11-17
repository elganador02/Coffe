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
                <li><a class="dropdown-item" href="./bathroom.php">Bath Room</a></li>
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

    <div class="container">
      
      <div class="row mx-auto" style="margin-top: 10rem;">
        
        <div class="col-lg-4 col-md-12 col-sm-1">
          <div class="card shadow border-0">
            <img src="../public/picture/bedroom/bed_room1.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">A Shaker-style</h5>
              <p class="card-text " style="text-align: justify;">A Shaker-style sleeping space and a bed chamber with a colour scheme informed by California deserts are among the ten serene, architect-designed bedrooms in our latest Dezeen Lookbook.

              This is the latest in a series providing visual inspiration for the home. Previous articles in the series showcased visually inspiring dining rooms, cosy living rooms, domestic bathrooms designed by architects and colourful kitchens.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-0">
          <div class="card shadow border-0">
            <img src="../public/picture/bedroom/bed_room2.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Guadalajara House</h5>
              <p class="card-text " style="text-align: justify;">Architect Alejandro Sticotti designed Guadalajara House around two existing trees, and closeness to nature was an important aspect of its layout.

              This can be seen in the master bedroom suite, which has large floor-to-ceiling glass doors that open up onto a private deck on the northern side of the house. Wooden panelling and a soft grey and white colour scheme create a relaxing place for sleep.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-0">
          <div class="card shadow border-0">
            <img src="../public/picture/bedroom/bed_room3.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Pound Ridge House</h5>
              <p class="card-text " style="text-align: justify;">This house in upstate New York was designed with an open layout, but its master suite is separated from the more public areas by a private sitting area.

              Here, the owners' bed sits up against a wall painted in dark, moody hues, close to a veranda that can be accessed through a set of sliding doors. A fireplace completes the bedroom.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-3">
          <div class="card shadow border-0">
            <img src="../public/picture/bedroom/bedroom_4.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Pound Ridge House</h5>
              <p class="card-text " style="text-align: justify;">The main bedroom in Prism House by Chilean architect Smiljan Radíc overlooks a dead river of lava from a previous eruption of the nearby Llaima Volcano.

              The dramatic view, seen through Prism House's glazed rear wall, is offset by a simple interior that features a blackened Oregon pine wood floor and a wooden bed that also functions as a seat or shelf.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-3">
          <div class="card shadow border-0">
            <img src="../public/picture/bedroom/bed_room5.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Xiang Jiang House</h5>
              <p class="card-text " style="text-align: justify;">Swedish architecture and design studio Claesson Koivisto Rune went all-in on natural materials for this Beijing house, where a bedroom features timber panelling on both floor and walls as well as a large, four-poster wooden bed frame.

              The pared-down colours are matched with contemporary design pieces from Scandinavia, Japan, China and Italy.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-3">
          <div class="card shadow border-0">
            <img src="../public/picture/bedroom/bed_room6.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center"> Spanish holiday home</h5>
              <p class="card-text " style="text-align: justify;">A walnut slatted ceiling decorates the master bedroom of this holiday home in southeast Spain with coastal mountain-range views.

              Grey sandstone was used for the wall, and a contrasting headboard and storage unit in black behind the bed was decorated with brass accessories. "The interplay of materials and brass elements make it feel very luxurious, but it's also cosy, almost like a wooden holiday retreat," said the studio co-founder Yolanda Yuste López.</p>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="card border-0" style="width: 18rem; margin-top: 10rem; 
          -webkit-box-shadow: 0px -2px 20px 2px rgba(0,0,0,0.51); 
          box-shadow: 0px -2px 20px 2px rgba(0,0,0,0.51); ">
            <img src="../public/picture/bed_room1.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text " style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="card border-0" style="width: 18rem; margin-top: 10rem; 
          -webkit-box-shadow: 0px -2px 20px 2px rgba(0,0,0,0.51); 
          box-shadow: 0px -2px 20px 2px rgba(0,0,0,0.51); ">
            <img src="../public/picture/bed_room1.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text " style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            </div>
        </div> -->



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