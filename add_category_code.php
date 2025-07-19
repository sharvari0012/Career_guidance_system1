  <?php
  session_start();
  include('conn.php');

  $title = $_POST['title'];
  // $opportunity = $_POST['opportunity'];

  if ($title == "") 
  {
    $_SESSION['message'] = "Category required";
    header("location:add_category.php");
  }
  else
  {

    $query = "INSERT INTO categories(title)VALUES('$title')";
  
    mysqli_query($conn,$query);

    $_SESSION['message'] = "Record Added Successfully...!!";
    header("location:category_list.php");
  }
?>
