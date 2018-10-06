<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  	<style type="text/css">
  		.login-wrap{
 		  width:320px;
  		margin: 0 auto;
  		margin-top:100px;
  		border:1px solid #eee;
  		padding:15px;
 		  background: #f8f8f8;
  		border-radius: 4px;
      }

      .form-group.last { margin-bottom:0px; }
  	</style>
</head>
<body>
<?php
  // include 'controller/controller.php';
  // if(isset($_POST['submit'])){

  //   $username = $_POST['username'];
  //   $password = $_POST['password'];
  //   $repassword = $_POST['repassword'];
  //   $sql = " INSERT INTO user (username,password,repassword) VALUES ('$username','$password','$repassword')";
  //   mysqli_query($connect,$sql);

  // }

?>
	<div class="container">
  	<div class="row">
   
    <div class="login-wrap">
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label  class="col-sm-3 control-label">
            UserName</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="inputUser" placeholder="UserName" required name="username">
          </div>
        </div>
        <div class="form-group">
          <label  class="col-sm-3 control-label">
            Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" id="inputPsw" placeholder="Password" required name="password">
          </div>
        </div>
        <div class="form-group">
          <label  class="col-sm-3 control-label">
            RePassword</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" id="inputPsw" placeholder="RePassword" required name="repassword">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <div class="checkbox">
              <label>
                <input type="checkbox" /> Remember me
              </label>
            </div>
          </div>
        </div>
        <div class="form-group last">
          <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" name="submit" class="btn btn-success btn-sm">
              Sign in</button>
            <button type="reset" class="btn btn-default btn-sm">
              Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>