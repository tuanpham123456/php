<!DOCTYPE html>
<html>
<head>
	<title>Form post - session 3</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
	$errName = '';
	$errPass = '';
	$errRePass = '';
	$errGender = '';
	$errCity = '';
	$success = '';
	$check = true;
	$name = $password = $rePassword = $errGender 
	= $errCity = '';
	$checkMale = $checkFemale = $checkOther = '';
	$checkDN = $checkHN = $checkHCM = '';
	if (isset($_POST['submit'])) {
		//  var_dump($_FILES);exit();
		$name = $_POST['name'];
		$password = $_POST['password'];
		$rePassword = $_POST['re_password'];
		$gender = $_POST['gender'];
		$city = $_POST['city'];
		if ($name == '') {
			$check = false;
			$errName = 'Please input your name!';
		}
		if ($password == '') {
			$check = false;
			$errPass = 'Please input your password!';
		}
		if ($rePassword != $password) {
			$check = false;
			$errRePass = 'Your password is not matching!';
		}
		if ($gender == '') {
			$check = false;
			$errGender = 'Please choose your gender!';
		} else {
			if ($gender == 'male') {
				$checkMale = "checked";
			}
			if ($gender == 'female') {
				$checkFemale = "checked";
			}
			if ($gender == 'other') {
				$checkOther = "checked";
			}
		}
		if ($city == '') {
			$check = false;
			$errCity = 'Please choose your city!';
		} else {
			if ($city == 'danang') {
				$checkDN = "selected";
			}
			if ($city == 'hanoi') {
				$checkHN = "selected";
			}
			if ($city == 'hcm') {
				$checkHCM = "selected";
			}
		}
		if ($check) {
			$check = "Register success!";
		}
	}
		if(isset($_POST['submit'])){
			$filleName = $_FILES['uploadFile']['name'];
			$filleSize = $_FILES['uploadFile']['size'];
			$fileType =$_FILES['uploadFile']['type'];
			$fileTempLocation = $_FILES['uploadFile']['tmp_name'];
			$fileError = $_FILES['uploadFile']['error'];

			if($fileError !=0 ){
				$errorMsg['upload'] = "You have error in uploading process...";
				
			}	
			else{
				//trả về 1 chuỗi nếu không phải các phần tử khác đc yêu cầu
				$extension = pathinfo($filleName, PATHINFO_EXTENSION);
				
				$allowExtension = array("jpg","png","jpeg");
				// in_array (phần tử trong mảng)
				if(!in_array($extension , $allowExtension)){
					$errorMsg['extension'] = 'Please select proper extension i.e. jpg,png,jpeg';
					$check = false;

				}
				if($filleSize>500000){
					$errorMsg['size'] = "Please select less than 50000 byte file size";
					$check = false;
				}
				$allowTypes = array('image/jpg','image/png','image/jpeg');
				
				if(!in_array($fileType , $allowTypes)){
					$errorMsg['fileType'] = 'Please select proper extension i.e. jpg,png,jpeg';
					$check = false;
				}
				if(isset($errorMsg)){
					foreach ($errorMsg as $key => $value){
						echo $value. "<br>";
					}
				}
				else{
					move_uploaded_file($fileTempLocation,"uploadFile/".$filleName  );
					echo "Upload file succes";
				}

			}
		}	
	?>
	<h1>Register form</h1>
	<form action="#" name="RegisterForm" method="post" enctype="multipart/form-data">
		<p>Name: <input type="text" name="name" value="<?php echo $name;?>">
			<span class="error"><?php echo $errName;?></span>
		</p>
		<p>Password: <input type="password" name="password" value="<?php echo $password;?>">
			<span class="error"><?php echo $errPass;?></span>
		</p>
		<p>Re-Password: <input type="password" name="re_password" value="<?php echo $rePassword;?>">
			<span class="error"><?php echo $errRePass;?></span>
		</p>
		<p>Gender:
			<input type="checkbox" name="gender" value="male" <?php echo $checkMale;?>> Male
			<input type="radio" name="gender" value="female" <?php echo $checkFemale;?>> Female
			<input type="radio" name="gender" value="other" <?php echo $checkOther;?>> Other
			<span class="error"><?php echo $errGender;?></span>
		</p>
		<p>City:
			<select name="city">
				<option value="">Choose city</option>
				<option value="danang" <?php echo $checkDN;?>>Da Nang</option>
				<option value="hanoi" <?php echo $checkHN;?>>Ha Noi</option>
				<option value="hcm" <?php echo $checkHCM;?>>Ho Chi Minh</option>
			</select>
			<span class="error"><?php echo $errCity;?></span>
		</p>
		<p>Avatar: <input type="file" name="uploadFile">
		<span ><?php $check;?></span>
		</p>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>