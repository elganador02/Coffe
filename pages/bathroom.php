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
            <img src="../public/picture/bathroom/bathroom1.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Porto house</h5>
              <p class="card-text " style="text-align: justify;">House in Fontaínhas by architecture studio Fala Atelier is a home in Porto, Portugal, featuring a striped concrete roof accented with pops of sugar-pink and powder blue.

              The project involved the renovation of an old and abandoned 18th-century townhouse. To cope with the constraints of the site, Fala Atelier added skylights and sliding doors to let natural light into its narrow and deep plan.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-0">
          <div class="card shadow border-0">
            <img src="../public/picture/bathroom/bathroom2.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Makepeace Mansions apartment</h5>
              <p class="card-text " style="text-align: justify;">A spinning porthole offers shifting views of living spaces inside this London apartment, which Surman Weston has finished with bespoke decor elements.

              The 54-square-metre apartment is set within Makepeace Mansions, a 1920s residential block in the Highgate neighbourhood with a mock-Tudor facade.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-0">
          <div class="card shadow border-0">
            <img src="../public/picture/bathroom/bathroom3.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Unit 622</h5>
              <p class="card-text " style="text-align: justify;">The bathrooms also feature vertical concrete wall tiles, intended as reference the structure of the brutalist building.

              Other details in the washrooms include zinc-plated towel racks, black round clothes hooks, and washbasins with black Corian tops and navy bases that match the frames of the mirrors above.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-3">
          <div class="card shadow border-0">
            <img src="../public/picture/bathroom/bathroom4.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Rylett House</h5>
              <p class="card-text " style="text-align: justify;">Reclaimed floorboards have been used in the bedroom spaces, contrasted by contemporary furniture and fittings. A smaller en-suite is finished with a black grid of tiles and a bright yellow wall.

              Studio 30 Architects has previously remodelled other homes in west London, including a conversion and extension of a terrace featuring sliding windows overlooking a garden.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-3">
          <div class="card shadow border-0">
            <img src="../public/picture/bathroom/bathroom5.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Cats' Pink House </h5>
              <p class="card-text " style="text-align: justify;">Outside, a triangular space surrounding the plot has been turned into a basketball practice area. This holiday home in Taiwan is designed with a focus on the owner's cat and includes cat ladders, a rotating carousel-shaped climbing frame and a fluffy pink swing. Its bathroom combines larger square pink floor tiles with a wall made from terrazzo with large flecks of pink and grey.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-3">
          <div class="card shadow border-0">
            <img src="../public/picture/bathroom/bathroom6.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Spinmolenplein apartment</h5>
              <p class="card-text " style="text-align: justify;">Positioned at the back of the apartment just off the living room is the volume that encloses the bathroom. Its made from the same white-lacquered wood as the kitchen island and is accessed via a set of barn-style doors.

              Inside, the shower cubicle and toilet are finished with an earthy, pink-tone micro cement that contrasts with the white wood.</p>
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