<?php
	$username = "root";
	$password = "";
	$server = "localhost";
	$database = '18php04_03';
 
	$connect = mysqli_connect($server,$username,$password,$database) or die("không thể kết nối tới database");
	mysqli_query($connect,"SET NAMES 'UTF8'");

?>