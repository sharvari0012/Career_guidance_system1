<?php 

    // Make DB connect
   $conn = mysqli_connect('localhost', 'root', '', 'career_guidance');



    // Collect Form Data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $ssc_mark = $_POST['ssc_mark'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE mobile = '$mobile'";
    $result = mysqli_query($conn, $query);
    $row_count = mysqli_num_rows($result);
    //  echo $row_count;
    // exit;

   if($row_count == 0)
   {
          // Prepare SQL query
            $query = "INSERT INTO users(name, mobile, email, age, gender, city, ssc_mark, password) VALUES('$name', '$mobile', '$email', '$age', '$gender', '$city', '$ssc_mark', '$password')";

         // Execute SQL Query
         mysqli_query($conn, $query);
         header("Location:login.php?status=success");

   }
   else{
    

    header("Location:register.php?status=fail");


   }



  

 
?>