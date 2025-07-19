<?php 
include('header.php');
include('conn.php');
$query="SELECT * FROM categories";
$result= mysqli_query($conn,$query);

?>

<!-- Start Main -->
<main id="main" class="main" style="min-height:500px;">

  <?php
  $query2="SELECT count(category_id)as total_category from categories";
  $res= mysqli_query($conn,$query2);
  $row=mysqli_fetch_assoc($res);
  $total=$row['total_category']    
  ?>



  <div class="container mb-5 mt-5">
   <h1 class="mt-4">Categories (<?=$total;?>) </h1> 
   <a href="add_category.php"  class="btn btn-primary mb-3 mt-2">Add Category</a>
   <div class="content">

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
      <table class="table table-bordered ">
        <thead>
          <tr>
            <tr>
             <th>Sr.No</th>
             <th>Title</th>
             
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
              <td> <?php echo $row['title']; ?></td>

              <td> <a href="delete_category.php?delete_id=<?php echo $row['category_id']; ?>" onclick="return confirm('are you sure?')" class="btn btn-success btn-sm">Delete</a>   
                <a href="edit_category.php?edit_id=<?php echo $row['category_id']?>" class="btn btn-danger btn-sm">Edit</a></td>

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
  <br> <br>
<?php include('footer.php'); ?>