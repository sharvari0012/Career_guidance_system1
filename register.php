<?php 
include("header.php");
?>

<section >

    <form action="register_code.php" method="POST" style="background: url(images/login_bg.jpg);background-size: cover;padding: 20px;">

        <div style="text-align:center;margin-top: 20px;">
            <?php 
            if(isset($_GET['status']))
            {
                echo "<br><span style='color:black;background-color:pink;padding:10px;border-radius:10px'> User already Registered...!! </span>";
            }

            ?>
        </div>

        <div class="row text-align-center align-items-center justify-content-center p-5">

            <div class="col-lg-6 card mt-4 mb-2 p-3 shadow" style="opacity: 0.9; background: pink;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;border-radius: 15px;">
               <h2 class="text-center">  Registration Form</h2>
               <div class="mb-2">
                  Name
                  <input type="text" name="name" class="form-control" required>
              </div>

              <div class="mb-2">
               Email 
               <input type="email" name="email" class="form-control" required>
           </div>

           <div class="mb-2">
               Mobile 
               <input type="number" name="mobile"  class="form-control" required>
           </div>

           <div class="mb-2">
               Age 
               <input type="number" name="age"  class="form-control" required>
           </div>

           <div class="mb-2">
               Gender 
               <input type="radio" name="gender" value="male"   required> Male
               <input type="radio" name="gender" value="female"   required> Female
           </div>

           <div class="mb-2">
               City 
               <input type="text" name="city"  class="form-control" required>
           </div>


           <div class="mb-2">
               SSC Mark 
               <input type="number" name="ssc_mark"  class="form-control" required>
           </div>

           <div class="mb-2">
               Password 
               <input type="password" name="password"  class="form-control" required>
           </div>
            <div class="mb-2">
               what are your interested in?
               <input type="what are your interested?" name="What are you interested in?"  class="form-control" required>
           </div>

           <div class="mb-2">
            <button type="submit" class="btn btn-primary"> Submit </button>  
            <input type="reset" class="btn btn-danger">
        </div>
    </div>
</div>
</form>
</section>
<?php 
include("footer.php");
?>