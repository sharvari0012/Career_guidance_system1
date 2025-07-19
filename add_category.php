<?php include('header.php');
session_start(); ?>

<div class="container mt-5 mb-5" style="min-height:400px">
    <h1 class="title1">Add Category</h1>
    <form action="add_category_code.php" method="POST">
     <?php 
     if(isset($_SESSION['message']))
      {  ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong> <?= $_SESSION['message'];?> </strong>
      </div>
      <?php 
      unset($_SESSION['message']);
  }
  ?>
  <div class="row p-4">
    <tr>
      <td><label for="title"><h3>Title</h3></label> </td>
      <td><input type="text" id="title" name="title" class="form-control"> </td>
  </tr>
  <tr class=""> 
    <td> </td>
    <td>
       <button type="submit" onclick="myFunction()" class="btn btn-primary mt-3 ml-2">Submit</button>
       <button type="reset" class="btn btn-danger  mt-3 ml-2">Reset</button>
   </td>
</tr>
</div>

</form>
</div>

<?php include('footer.php'); ?>