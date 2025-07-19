<?php 
	session_start();
	include('conn.php');

	$question_id= $_POST['question_id'];
	$category_id= $_POST['category_id'];
	$title = $_POST['title'];
	$option_a = $_POST['option_a'];
	$option_b = $_POST['option_b'];
	$option_c = $_POST['option_c'];
	$option_d = $_POST['option_d'];
	$correct_option = $_POST['correct_option'];
	$query = "UPDATE questions SET category_id='$category_id', title='$title', option_a='$option_a', option_b='$option_b', option_c='$option_c', option_d='$option_d', correct_option='$correct_option'WHERE question_id='$question_id'";
	// $query;
	// $exit;
	mysqli_query($conn,$query);	

	$_SESSION['message']= "Record Updated Successfully";
	header("location:question_list.php");

 ?>