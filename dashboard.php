<?php include('header.php');
include('conn.php');
$query="SELECT COUNT(user_id) AS total_user FROM users";
$result= mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$total=$row ['total_user'];

?>



<div class="container mt-5 mb-5" style="min-height:400px">
    <h1 class="title1"><u> Dashboard </u></h1>
    
    <div class="row mt-5" >
        <div class="col-lg-4 ">
            <div class="text-center shadow bg-info p-3">
               <h3>Total Users- <?=$total;?></h3>  
           </div>
       </div>


       <?php
       include('conn.php');
       $query="SELECT COUNT(category_id) AS total_category FROM categories";
       $result= mysqli_query($conn,$query);
       $row=mysqli_fetch_assoc($result);
       $total=$row ['total_category'];
       ?>

       <div class="col-lg-4">
        <div class="text-center box-shadow  bg-success p-3">

           <h3>Total Category- <?=$total;?></h3>  
       </div>
   </div>

   <?php
   include('conn.php');
   $query="SELECT COUNT(question_id) AS total_question FROM questions";
   $result= mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($result);
   $total=$row ['total_question'];
   ?>

   <div class="col-lg-4">
    <div class="text-center box-shadow  bg-warning p-3">
       <h3>Total Questions- <?=$total;?></h3>  
   </div>
</div>

</div>
</div>

<?php 
include("footer.php");
?>
