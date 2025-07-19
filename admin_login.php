<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="../js/bootstrap.bundle.min.js"> </script>
</head>
<body style="background: url(../images/about.jpg);background-size: cover;"> 
   <form action="admin_login_code.php" method="POST">
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

        <div class="col-lg-4 card mt-2 mb-3 p-3 bg-warning shadow">
           <h2 class="text-center">  Admin Login</h2>
           <div class="mb-3">
              Mobile
              <input type="number" name="mobile" class="form-control" required>  
          </div>

          <div class="mb-3">
           Password 
           <input type="password" name="password"  class="form-control" required> 
       </div>

       <div class="mb-3">


        <button type="submit" class="btn btn-primary"> Submit </button>  
        <input type="reset" class="btn btn-danger">

    </div>



</div>

</div>
</form>
</body>
</html>


