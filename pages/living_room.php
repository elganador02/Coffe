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
            <img src="../public/picture/livingroom/living_room1.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Budge Over Dover house</h5>
              <p class="card-text " style="text-align: justify;">Interior design studio YSG opened up the kitchen and living room into one large, open-plan space that connects to the garden to create a "fluid" sense of space in the Budge Over Dover House in Sydney.

              The studio used warm, deep colours to create a sense of calm, including dark wood detailing and aubergine hues. Marble surfaces add a luxury touch and look intriguing next to the simple brick floor.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-0">
          <div class="card shadow border-0">
            <img src="../public/picture/livingroom/living_room2.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Esperinos Guesthouse</h5>
              <p class="card-text " style="text-align: justify;">Greek designer Michael Stamos used a moss-green colour for the living room walls in the Esperinos guesthouse in Greece. The colour gives the room a relaxing feel and picks up the green from the plants that are dotted around the space.

              A nearby staircase has been painted black as a contrast, creating a moody atmosphere that's contrasted by the colourful cushions on the large sofa.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-0">
          <div class="card shadow border-0">
            <img src="../public/picture/livingroom/living_room3.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Whidbey Island Farm</h5>
              <p class="card-text " style="text-align: justify;">MW Works wisely designed Whidbey Island Farm to make the most of the surrounding nature, with large windows and a pared-back interior design that lets the view speak for itself.

              Simple wooden furniture sits both inside the living room and on the connected terrace, while woven blankets and a furry throw adding a cosy touch. The open fire means the owners can enjoy the view of the surrounding forest in comfort even in the depths of winter.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-3">
          <div class="card shadow border-0">
            <img src="../public/picture/livingroom/living_room4.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">VS House </h5>
              <p class="card-text " style="text-align: justify;">Architecture studio Sārānsh used local Kota tiles in the living room of the VS House in Ahmedabad to create a sense of tactility. The interior was kept minimalist, but the studio created interest by combining a range of different natural materials.

              The discrete grey hues of the plush furniture cushions work well against the rattan armrests and wooden furniture bases, while a decorative wall in dark wood adds a refined touch.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-3">
          <div class="card shadow border-0">
            <img src="../public/picture/livingroom/living_room5.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Nithurst Farm</h5>
              <p class="card-text " style="text-align: justify;">Nithurst Farm might have been inspired by both Roman architecture and Soviet-era science fiction, but its living room has a more traditional look.

              Architect Adam Richards, who designed Nithurst Farm as his own home, took advantage of the high, concrete ceilings as a calm background onto which he's projected bright splashes of colour in the form of paintings and curtains. A baroque-style chair and a fabric-clad footstool help soften the space.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-12 col-sm-12 mt-5 mt-lg-3">
          <div class="card shadow border-0">
            <img src="../public/picture/livingroom/living_room6.jpg" class="card-img-top" style="max-height: 20rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Williamsburg schoolhouse</h5>
              <p class="card-text " style="text-align: justify;">The living room of this schoolhouse in Brooklyn, which studio White Arrow's founders designed for their own home, has plenty of patterned textiles, but their creamy pastel hues means the space still doesn't feel busy.

              A large palm tree is a fun detail and picks up the dark wood of a small sideboard and a floating TV-bench. Clean, white walls and a selection of modernist white lamps, as well as glass sofa table, create a restful atmosphere.</p>
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