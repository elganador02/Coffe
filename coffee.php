<?php

include './db/connection.php';
session_start();
if (!isset($_SESSION["user"]))
  header("Location: ./auth/login.php");

$id = $_SESSION['user']['id'];
$query = mysqli_query($connection, "SELECT * FROM register WHERE id='$id' ");
$user = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="./public/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
  <df-messenger intent="WELCOME" chat-title="ForFuture" agent-id="cf13103d-2126-4d5d-bb02-353ea66341e7" language-code="en" chat-icon="comment.png"></df-messenger>

  <style>
    footer {
      box-shadow: -1px -7px 31px -9px rgba(0, 0, 0, 1);
      -webkit-box-shadow: -1px -7px 31px -9px rgba(0, 0, 0, 1);
      -moz-box-shadow: -1px -7px 31px -9px rgba(0, 0, 0, 1);
    }

    df-messenger {
      --df-messenger-button-titlebar-color: #e89922;
      --df-messenger-font-color: #1d96dc;

    }
  </style>

  <title>I Said Coffee</title>
  <link rel="stylesheet" type="text/css" href="./public/assets/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light navbar-light mb-5 fixed-top" style="box-shadow: 2px 11px 31px -9px rgba(0,0,0,1);
  -webkit-box-shadow: 2px 11px 31px -9px rgba(0,0,0,1);
  -moz-box-shadow: 2px 11px 31px -9px rgba(0,0,0,1);">
    <div class="container-fluid">
      <a class="navbar-brand" href="./"><img src="./public/picture/Logo.png" width="50" height="50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-2 p-2 text-center">

          <li class="nav-item">
            <a class="nav-link active" href="./pages/trend_today.php">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="./pages/ourmuseum.php">Menu</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="./pages/aboutus.php">Testimoni</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="./pages/aboutus.php">Contact</a>
          </li>

        </ul>

        <ul class="nav navbar-nav navbar-right ">

          <li class="nav-item dropdown text-center">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="fs-6 text-center">Welcome, <?= $user['user'] ?>
                <span class="ms-2"><img src="./photo/<?= $user['foto'] ?>" width="40" height="40" style="border-radius: 20px;"></span>
            </a>
            <ul class="dropdown-menu text-center ms-6 px-3 border-0" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./pages/settings.php">Settings</a></li>
              <li><a class="dropdown-item" href="./auth/commands/logout.php">Logout</a></li>
            </ul>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./public/picture/db1.jpg" class="d-block w-100 h-25" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div class="jumbotron">
            <h1 class="display-4">I Said Coffee</h1>
            <p>good food for good moments!</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./public/picture/db2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Everything you want</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./public/picture/db3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Thank You for visiting us</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="cart.php"> <i class="fas fa-angle-right"></i> cart</a>
        <a href="logout.php"> <i class="fas fa-angle-right"></i> logout</a>
      </div>


      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 (Admin 1) </a>
        <a href="#"> <i class="fas fa-phone"></i> +321-654-0987 (Admin 2) </a>
        <a href="#"> <i class="fas fa-envelope"></i> TokoBuku@gmail.com </a>
      </div>

      <div class="box">
        <h3>social media</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> TokoBuku </a>
        <a href="#"> <i class="fab fa-twitter"></i> TokoBuku </a>
        <a href="#"> <i class="fab fa-instagram"></i> TokoBuku </a>
        <a href="#"> <i class="fab fa-linkedin"></i> TokoBuku </a>
      </div>

    </div>

  </section>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>