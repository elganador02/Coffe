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

      .col-4 h1{
        margin-left: 50px;
      }

      .col-4 img{
      border-radius: 50%;
      width: 15rem;
      height: 15rem;
      margin-top: 20px;
      }

      .col-8 .text-email{
        font-style: italic;
      }
      @media screen and (max-width: 1024px){
      
      .col-4 h1{
        font-size: 25px;
        margin-left: 20px;
      }

      .col-8 p{
        font-size: 9px;
        margin-top: 10px;
      }

      .col-4 img{
        width: 7rem;
        height: 7rem;
        border-radius: 50%;
      }

      .col-8 h3{
        font-size: 12px;
      }

      .col-8 h5{
        font-size: 8px;
      }

      .col-8 .text-email{
        font-size: 6px;
      }

      .col-8 .quotes{
        font-size: 8px;
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
          <img src="../public/picture/aboutus/bg-main.jpg" class="d-block w-100 img-fluid">

          <div class="carousel-caption d-none d-md-block img-fluid">
            <h1 class="text-light">Our Team</h1>
            <br>
            <p class="text-light mb-2">In any industry where the people behind a company are as important as the company itself, you’re likely to find a kind of expanded “about” page that includes information on individual employees. “Meet the Team” pages are popular among web design and other creative firms, but are also found on sites within various other industries. These pages are a valuable addition to any site where human contact is an important part of the industry. It adds a personal touch to the company and can lend trust to visitors.</p>
            <br>
        </div>
        
      </div>
    </div>


    <div class="container">
      
      <div class="row align-items-center justify-content-between border-top border-bottom" style="margin-top: 5rem;">
        
        <div class="col-4 gx-0 mt-2">
          <h1>Our <br>Teams</h1>
        </div>

        <div class="col-8 gx-0" style="text-align: justify; font-size: 20px;">
          <p>"Teamwork is the ability to work together toward a common vision. The ability to direct individual accomplishments toward organizational objectives. It is the fuel that allows common people to attain uncommon results." -Andrew Carnegie</p>
        </div>

        <div class="col-4 mb-5 mt-4">   
          <img src="../public/picture/aboutus/pic3.jpeg">
        </div>

        <div class="col-8">
        <h3>Widia Armeida</h3>
        <h5>Front End Development</h5>
        <p class="text-email">widiaarmeida@gmail.com</p>
        <p class="quotes" style="text-align: justify;">“Creative and self-starting Front-End Developer with 5 years experience building stable eCommerce websites and apps in fast-paced, collaborative environments. Highly skilled in HTML/CSS/JavaScript/JQuery and working knowledge of Photoshop. Well-versed in Scrum and Agile.”</p>
        </div>

        <div class="col-8">
        <h3>Mangara ButarButar</h3>
        <h5>Back End Development</h5>
        <p class="text-email">thescreamangara12@gmail.com</p>
        <p class="quotes" style="text-align: justify;">“Optimized SQL queries for the heavy‑load parts of the system, which improved website responsiveness and reduced the database costs by 20%.”</p>
        </div>

        <div class="col-4 mb-5 mt-4">   
          <img src="../public/picture/aboutus/pic2.jpg" style="float: right;">
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