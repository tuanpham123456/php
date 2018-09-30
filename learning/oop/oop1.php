<?php
	class User {
		var $Name;
		var $Email;
		var $Phone;
		var $Address;

	}
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
	$user = new User();
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
	$customer ->Add();
	$customer ->List();
	$customer ->Payment();

?>