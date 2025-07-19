


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Career Guidance System</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- Latest compiled JavaScript -->
  <script src="js/bootstrap.bundle.min.js"> </script>
  <style type="text/css">

    .nav-link
    { 
      color: black !important;
      font-weight: bold;
      background-color: pink;
      margin-left:18px;
      border: 1px solid white;
      border-radius: 15px;
      padding-left: 15px !important;
       padding-right: 15px !important;
       box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

     .nav-link:hover
    { 
      color: red !important;
      font-weight: bold;
      background-color: yellow;
      margin-left:18px;
      border: 2px solid white;
      border-radius: 15px;
      padding-left: 15px !important;
       padding-right: 15px !important;
       box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      }

      #head{
        color: black;
        font-family: cursive;
        font-weight: bold;
        text-shadow: 2px 2px 5px white;
      }

      .box1
      {
        opacity: 0.9; background: pink;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;border-radius: 15px
      }
  </style>
</head>
<body style="background: url(images/login_bg.jpg);background-size: cover;">
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-sm bg-info navbar-dark" style="background:#f50cd2 !important">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h3 id="head"> Carreer Guidance System </h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
         <li class="nav-item"> <a href="home.php" class="nav-link">Home</a> </li>
         <li class="nav-item"> <a href="about.php" class="nav-link">About Us</a> </li>
         <li class="nav-item"> <a href="contact.php" class="nav-link">Contact </a></li>
         <?php
         if(isset($_SESSION['user']))
          { ?>

            <li class="nav-item">  <a href="logout.php" class="nav-link">Logout</a>  </li>
         
         <?php }else{ ?>

          <li class="nav-item">  <a href="login.php" class="nav-link">Login</a>  </li>
          <li class="nav-item"> <a href="register.php" class="nav-link">Register</a> </li>

        <?php }?> 


      </ul>
    </div>
  </div>
</nav>

<!-- Navbar end -->