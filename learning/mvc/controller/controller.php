<?php 
		include 'model/model.php';
		class Controller {
			function handleRequest() {
				$action = isset($_GET['action'])?$_GET['action']:'home';
				switch ($action) {
					case 'login':
						$model = new Model();
						$login = $model ->getLogin();
						include 'view/login.php';
						break;
					case 'register':
						$model = new Model();
						$register = $model ->getRegister();
						include 'view/register.php';
						# code...
						break;
					case 'home':
						$model = new Model();
						$home = $model ->getHome();
						include 'view/home.php';
						# code...
						break;
					default:
						# code...
						break;
				}
			}
		}


?>


