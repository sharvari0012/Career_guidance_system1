<?php 
   
     session_start();
    // Make DB connect
    $conn = mysqli_connect('localhost', 'root', '', 'career_guidance');


    // Collect Form Data
    $mobile= $_POST['mobile'];
    $password = $_POST['password'];
   
    $query = "SELECT * FROM users WHERE (email = '$mobile' OR mobile = '$mobile') AND (password='$password')";
     
    // echo $query;
    // exit;

    $result = mysqli_query($conn, $query);
    $row_count = mysqli_num_rows($result);
    // echo $row_count;
    // exit;

   if($row_count == 0) 
   {
        
         header("Location:login.php?status=fail");

   }
   else{

       $data = mysqli_fetch_assoc($result);
         $_SESSION['user'] = $data['name'];

//         echo  $_SESSION['user'];

    header("Location:profile.php?status=success");


   }
    
    ?>
  