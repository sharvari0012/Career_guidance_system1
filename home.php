<?php 
        session_start();
        include("header.php");
?>
     
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 550px;
  }

.bg1{
    background-color: blue;
    padding: 10px !important;
    border: 2px solid red;
}

  </style>

    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner border-bottom shadow">
    <div class="carousel-item active">
      <img src="images/slide4.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/slide5.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/slide6.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon bg1"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon bg1"></span>
  </a>
</div>

        <div class="container mt-3 mb-4">
            <h2 class="text-danger">Welcome to Carreer Guidance System</h2>
            <p>Career choice has a pivotal role in college students’ life planning. In today’s world choosing the right career is the toughest decision. Today many students are confused about their future. They do possess some skills but they are not able to identify their abilities and a proper domain. Different people suggest different career options but at last, the student has to select their career. <a href="about.php"> Read More </a> </p>
        </div>

<?php 
        include("footer.php");
?>
