<?php 
include('header.php');
include('conn.php');
$query ="SELECT *, (SELECT title FROM categories WHERE categories.category_id = questions.category_id) AS c_title  FROM questions";

$result= mysqli_query($conn,$query);
?>
<!-- Start Main -->
<div id="main" class="container" style="min-height:500px;">

  <?php
  $query2="SELECT count(question_id)as total_question from questions";
  $res= mysqli_query($conn,$query2);
  $row=mysqli_fetch_assoc($res);
  $total=$row['total_question']    
  ?>

  <section class="main mt-5 mb-5">
    <?php 
    if(isset($_SESSION['message']))
      {  ?>

        <div class="alert alert-success">
          <?= $_SESSION['message'];?>
        </div>
        <?php 
        unset($_SESSION['message']);
      }
      ?>


      
      <h1 class="title1">Questions (<?=$total;?>) </h1> 
      <a href="add_question.php"  class="btn btn-primary mt-2 mb-3">Add Questions</a>
      <div class="content">
        <div  class="divScroll">
          <table class="table table-bordered">
            <thead>
              <tr>
                <tr>
                 <th>Sr.No</th>
                 <th>Category</th>
                 <th>Question</th>
                 <th>Option A</th>
                 <th>Option B</th>
                 <th>Option C</th>
                 <th>Option D</th>
                 <th>Correct Option</th>
                 <th>Action</th>
               </tr>
             </thead>

             <?php
             $count = 1;
             while($row=mysqli_fetch_assoc($result))
             {
              ?>
              <tbody>
                <tr>
                  <td> <?= $count;?> </td>
                  <td> <?php echo $row['c_title']; ?></td>
                  <td> <?php echo $row['title']; ?></td>
                  <td> <?php echo $row['option_a']; ?></td>
                  <td> <?php echo $row['option_b']; ?></td>
                  <td> <?php echo $row['option_c']; ?></td>
                  <td> <?php echo $row['option_d']; ?></td>
                  <td> <?php echo $row['correct_option']; ?></td>

                  <td> <a href="delete_question.php?delete_id=<?php echo $row['question_id']; ?>" onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm">Delete</a>   
                    <a href="edit_question.php?edit_id=<?php echo $row['question_id']?>" class="btn btn-success btn-sm m-1">Edit</a></td>

                  </td>
                </tr>
              </tbody>

              <?php 
              $count++;
            } 
            ?>
          </table>

        </div>
      </div>
    </section>
  </div>
  <!-- End Main -->

  <?php include('footer.php'); ?>