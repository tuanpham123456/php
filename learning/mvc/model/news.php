<?php 
	class News {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertNews($title, $body){
			$sql = "INSERT INTO news (title, body) VALUES ('$title', '$body')";
			return mysqli_query($this->conn, $sql);
		}
		
	}
?>