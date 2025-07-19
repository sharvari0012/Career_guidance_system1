<?php
include('header.php'); 
$edit_id = $_GET['edit_id'];
include('conn.php');
$query  = "SELECT * FROM categories WHERE category_id=$edit_id";
$result = mysqli_query($conn,$query);
$row    = mysqli_fetch_assoc($result);
$title = $row['title'];
// $opportunity = $row['opportunity'];
?>



<!-- Start Main -->
<div class="container mt-5 mb-5" style="min-height:400px">
    <h1 class="text-left">Edit Category</h1>
    <div class="content">
      <center>
       <form action="edit_category_code.php" method="POST">
         <input type="hidden" name="category_id" value="<?= $edit_id;?>" required>
         <div class="row mt-5 mb-5">
            <tr>
              <td><label for="title"><h4 class="text-left">Title</h4></label> </td>
              <td><input type="text" id="title" name="title" class="form-control" value="<?= $row['title'];?>"
                > </td>
            </tr>
            <tr> 
                <td> </td>
                <td>
                 <button type="submit" class="btn btn-primary mt-3 ml-2">Submit</button>
                 <button type="reset" class="btn btn-danger  mt-3 ml-2">Reset</button>
             </td>
         </tr>
     </div>
 </form>
</center>
</div>
</div>

<?php include('footer.php'); ?>