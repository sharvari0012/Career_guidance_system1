<?php
include('header.php'); 
$edit_id = $_GET['edit_id'];
include('conn.php');
$query  = "SELECT * FROM questions WHERE question_id=$edit_id";
$result = mysqli_query($conn,$query);
$row    = mysqli_fetch_assoc($result);
$category_id = $row['category_id'];
$title = $row['title'];
$option_a = $row['option_a'];
$option_b = $row['option_b'];
$option_c = $row['option_c'];
$option_d = $row['option_d'];
$correct_option = $row['correct_option'];
?>

<!-- Start div -->
<div id="div" class="container mt-3 mb-5" >
    <h1 class="title1">Edit Question</h1>
    <div class="card">
       <form action="edit_question_code.php" method="POST">
                     <input type="hidden" name="question_id" value="<?= $edit_id;?>" required>
        <div class="row p-3">
           <div class="mb-3 col-lg-6">
              <td><label for="category"><h5>Category </h5></label></td>
              <td><select class="form-control" name="category_id">
               <?php 
                          
                          $query="SELECT * FROM categories";
                          $result= mysqli_query($conn,$query);
                          while($row=mysqli_fetch_assoc($result))
                           {
                      ?>

                        <option value="<?= $row['category_id']; ?>"  <?= $category_id ==$row['category_id'] ? 'selected' : '';?>> <?= $row['title']; ?></option>

                      <?php }?>

          </select></td>
      </div>
   
      <div class="mb-3 col-lg-12">
          <td><label for="title"><h5>Question</h5></label> </td>
          <td><input type="text" id="title" name="title" class="form-control" value="<?= $title;?>" required> </td>
      </div>

      <div class="mb-3 col-lg-6">
        <td> <label for="option"><h5>Option A</h5></label> </td>
        <td> <input type="text" id="option_a" name="option_a" class="form-control" value="<?= $option_a;?>" required></td>
    </div>
    <div class="mb-3 col-lg-6">
        <td> <label for="option"><h5>Option B</h5></label> </td>
        <td> <input type="text" id="option_b" name="option_b" class="form-control"  value="<?= $option_b;?>" required></td>
    </div>
    <div class="mb-3 col-lg-6">
        <td> <label for="option"><h5>Option C</h5></label> </td>
        <td> <input type="text" id="option_c" name="option_c" class="form-control"  value="<?= $option_c;?>"  required></td>
    </div>
    <div class="mb-3 col-lg-6">
        <td> <label for="option"><h5>Option D</h5></label> </td>
        <td> <input type="text" id="option_d" name="option_d" class="form-control"  value="<?= $option_d;?>" required></td>
    </div>
    <div class="mb-3 col-lg-6">
        <td> <label for="option"><h5>Correct Option</h5></label> </td>
        <td> <input type="text" id="correct_option" name="correct_option" class="form-control"  value="<?= $correct_option;?>"  required></td>
    </div>
    <div class="mb-3 col-lg-12">
        <td>
         <button type="submit" class="btn btn-primary mt-2 ml-2">Submit</button>
         <button type="reset" class="btn btn-danger  mt-2 ml-2">Reset</button>
     </td>
 </div>
</div>

</form>
</div>

</div>

<?php include('footer.php'); ?>