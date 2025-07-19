<?php
	session_start();
	include('conn.php');

	$delete_id = $_GET['delete_id'];
	
	$delete_query = "DELETE FROM categories WHERE category_id=$delete_id";

	mysqli_query($conn,$delete_query);

	$_SESSION['message'] = "Record Deleted Successfully..!!";

	header("location:category_list.php");
?>