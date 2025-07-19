  <?php
  session_start();
  include('conn.php');

  $title = $_POST['title'];
  $category_id = $_POST['category_id'];
  $option_a = $_POST['option_a'];
  $option_b = $_POST['option_b'];
  $option_c = $_POST['option_c'];
  $option_d = $_POST['option_d'];
  $correct_option = $_POST['correct_option'];




  if ($title == "") 
  {
    $_SESSION['message'] = "Question required";
    header("location:add_question.php");
  }
  else
  {

    $query = "INSERT INTO questions(title, category_id, option_a, option_b, option_c, option_d, correct_option )VALUES('$title', '$category_id', '$option_a','$option_b', '$option_c', '$option_d', '$correct_option')";
  
    mysqli_query($conn,$query);

    $_SESSION['message'] = "Record Added Successfully...!!";
    header("location:question_list.php");
  }
?>