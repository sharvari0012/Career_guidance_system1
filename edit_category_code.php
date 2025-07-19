<?php 
	session_start();
	include('conn.php');

	$category_id= $_POST['category_id'];
	$title = $_POST['title'];
	// $opportunity = $_POST['opportunity'];
	$query = "UPDATE categories SET title='$title' WHERE category_id='$category_id'";
	// $query;
	// $exit;
	mysqli_query($conn,$query);	

	$_SESSION['message']= "Record Updated Successfully";
	header("location:category_list.php");

 ?>