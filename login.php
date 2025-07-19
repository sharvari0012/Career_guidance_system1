<?php 
include("header.php");
?>



<form action="login_code.php" method="POST" style="background: url(images/login_bg.jpg);background-size: cover;padding: 20px;">

 <div style="text-align:center;margin-top: 20px;">
 <?php 
 if(isset($_GET['status']))
 {
  if($_GET['status']=="success")
  {
    echo "<span style='color:green'>User Registered Successfully</span>";
}

if($_GET['status']=="fail")
{
    echo "<br><span style='color:black;background-color:pink;padding:10px;border-radius:10px'>Wrong User name or password</span>";
}
}

?>
</div>

<div class="row text-align-center align-items-center justify-content-center p-2 mb-5 mt-5">

    <div class="col-lg-4 card mt-2 mb-3 p-3 box1" style="">
         <h2 class="text-center">  Login Form</h2>
        <div class="mb-3">
          Mobile/Email
          <input type="text" name="mobile" class="form-control" required>  
      </div>

      <div class="mb-3">
         Password 
         <input type="password" name="password"  class="form-control" required> 
     </div>

     <div class="mb-3">


        <button type="submit" class="btn btn-primary"> Submit </button>  
        <input type="reset" class="btn btn-danger">
        <br>
         <br>

         <a href="register.php">New User ? Register</a>

    </div>



</div>

</div>
</form>


<?php 
include("footer.php");
?>