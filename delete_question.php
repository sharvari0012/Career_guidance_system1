<?php
	session_start();
	include('conn.php');

	$delete_id = $_GET['delete_id'];
	
	$delete_query = "DELETE FROM questions WHERE question_id='$delete_id'";

	mysqli_query($conn,$delete_query);

	$_SESSION['message'] = "Record Deleted Successfully..!!";

	header("location:question_list.php");
?>