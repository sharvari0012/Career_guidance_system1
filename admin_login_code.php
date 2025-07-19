<?php 
  session_start();
    // Make DB connect
    $conn = mysqli_connect('localhost', 'root', '', 'career_guidance');


    // Collect Form Data
    $mobile= $_POST['mobile'];
    $password = $_POST['password'];
   
    $query = "SELECT * FROM admin WHERE mobile = '$mobile' AND password='$password'";
 

    $result = mysqli_query($conn, $query);
    $row_count = mysqli_num_rows($result);
    // echo $row_count;
    // exit;

   if($row_count == 0) 
   {
         
         header("Location:admin_login.php?status=fail");

   }
   else{

    header("Location:dashboard.php?status=success");


   }
    
    ?>
  