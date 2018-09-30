<?php
	class User {
		var $Name;
		var $Email;
		var $Phone;
		var $Address;

		function Add(){

		}
		function Register(){

		}
		function Login(){

		}
		function View(){

		}
		function List(){

		}


	}
	
		/**
	 	* 
	 	*/
	class Customer extends User
	{
		
		var $deliveryAddress;
		var $customerCode;

		function Payment(){

		}
		function historyPayment(){

		}

	
	}
	$customer = new Customer();
	$customer ->Register();
	$customer ->Login();
	$customer ->View();
	$customer ->Payment();

	

?>