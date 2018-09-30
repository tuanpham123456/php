<?php
	class User {
		var $username;
		var $password;
		// final function (ko thể ghi đè cha lên con)
		// public,protected,private
		// public con sài đc cha sài đc người ngoài sài đc
		// protected con sài đc cha sài đc người ngoài k đc
		// private cha sài con k đc sài , người ngoài k đc
		function register(){
			echo "<br/> Register user";
		}
		public function edit(){
		  echo "</br> Edit user";
		}
		function delete(){
			echo "<br> Delete user";
		}
		function demo(){
			echo "<br>-------demo------";
			$this ->edit();
		echo "<br>-------demo------";


		}
	}
	$user = new User();
	// $user ->register();
	// $user ->edit();
	// $user ->delete();
	$user ->demo();

	/**
	 * 
	 */
	// kế thừa
	class Student extends User
	{		
		// nếu k có funtion sửa thì dẽ sử dụng function register con
		function register(){

			echo "<br>Studen register";
		}
		function demo(){
			echo "<br>sửa";
		}	
	}

	$student =new Student();
	$student ->register();
	$student ->demo();
?>