<?php 
	include 'connectdb.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id = $id";
	mysqli_query($connect, $sql);
	header("Location: list_user.php");

?>