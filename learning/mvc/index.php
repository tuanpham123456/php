<a href="index.php?action=login">Login</a>
<a href="index.php?action=register">Register</a>


<body>

<?php 
	include 'controller/controller.php';
	$controller = new Controller();
	$controller->handleRequest();
?>