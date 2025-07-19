<?php 
session_start();
if(!isset($_SESSION['user']))
{
            header("Location:login.php");
}


include("header.php");
$conn = mysqli_connect('localhost', 'root', '', 'career_guidance');

$query ="SELECT *, (SELECT title FROM categories WHERE categories.category_id = questions.question_id) AS c_title  FROM questions";
$result= mysqli_query($conn,$query);

?>

<style type="text/css">
    input[type='radio']
    {
        height: 15px;
        width: 15px;
    }


</style>


<div class="container mt-5" >
    
    <h3 class="p-2">Attempt following questions  </h3>
     <form action="test_result.php" method="POST">

     <?php
     $count = 1;
     while($row=mysqli_fetch_assoc($result))
     {
      ?>
      <div  class="p-2 m-2 mt-3 " style="border-radius: 10px;box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
        <h5><?= $count;?>. <?php echo $row['title']; ?></h5>
        <input type="radio" name="ans<?= $count;?>" value="<?php echo $row['option_a']; ?>" required> <?php echo $row['option_a']; ?><br> 
        <input type="radio" name="ans<?= $count;?>" value="<?php echo $row['option_b']; ?>" required> <?php echo $row['option_b']; ?><br>
        <input type="radio" name="ans<?= $count;?>" value="<?php echo $row['option_c']; ?>" required> <?php echo $row['option_c']; ?><br>
        <input type="radio" name="ans<?= $count;?>" value="<?php echo $row['option_d']; ?>" required> <?php echo $row['option_d']; ?><br>
    </div>

    <?php 
    $count++;
} 
?>

   <div class="p-3"> 
       <h1> <button class="btn btn-primary" >Submit Test</button> </h1>
   </div>


   <input type="hidden" name="total_question" value="<?= $count;?>"> 

</form>
</div>

<?php 
include("footer.php");
?>