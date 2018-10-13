<?php 
	include 'config/connectdb.php';
	class User extends ConnectDB{
		function InsertUser($name, $username, $password){
			$sql = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
			return mysqli_query($this->conn, $sql);
		}
		function getListUser(){
			$sql = "SELECT * FROM users";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteUser($id){
			$sql = "DELETE FROM users WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
		function getUserInfo($id) {
			$sql = "SELECT * FROM users WHERE id = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditUser($id, $name, $username){
			$sql = "UPDATE users SET name = '$name', username = '$username' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
		function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username'
			AND password = '$password'";
			$result = mysqli_query($this->conn, $sql);
			return $result->num_rows;
		}
		function getlogin($usersname, $passmahoabase)
		{
			include "config/connectdb.php";
			$sql = "SELECT * FROM usersandpass WHERE usersname = '$usersname' AND password = '$passmahoabase'";
			//$check = mysqli_query($connect, $sql);
			$num_rows = mysqli_num_rows(mysqli_query($connect, $sql));	
			//$num_rows = mysqli_fetch_row($sql);
			return $num_rows;
		}
		function mahoabase($password)
		{
		$mahoa = md5($password);
		return $wasmahoa;
		}
	}
?>