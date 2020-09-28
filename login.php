<?php 
define('TITLE','Login');
	include('connection.php');
	session_start();
	if(!isset($_SESSION['is_login'])){
	if(isset($_REQUEST['email'])){
		$email = trim($_REQUEST['email']);
		$password = trim($_REQUEST['password']);
		$sql = "SELECT email, password FROM new_table WHERE email = '".$_REQUEST['email']."' AND password = '".$_REQUEST['password']."' limit 1";
		$result = $connection->query($sql);
		if($result->num_rows == 1){
			$_SESSION['is_login'] = TRUE;
			$_SESSION['email'] = $email;

			echo "<script>location.href='loginProfile.php';</script>";
		}else{
			$loginMsg = "<div class='alert alert-danger mt-3'>Login Failed </div>";
		}		
	}
}else{
	echo "<script>location.href='loginProfile.php';</script>";
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Font Awesome icon -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Custom css  -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<div class="text-center mt-5">
	<i class="fa fa-user text-danger font-danger mr-2" style="font-size: 30px;"></i>
	<span class="font-danger" style="font-size: 30px; font-weight: bold;"> Online Service Management System</span>
</div>
<p class="text-center text-danger mt-2" style="font-size: 20px;"> <i class="fa fa-user-secret"></i> Request Area (Demo)</p>

<div class="container-fluid mt-4 mb-4">
	<div class="row  p-4 justify-content-center">
		<div class="col-sm-6 col-md-4">
			<form method="POST" action="" class="shadow-lg p-4">
				<div class="form-group">
					<i class="fa fa-user mt-2 ml-2"></i>
					<label class="font-weight-bold">Email</label>
					<input type="email" name="email" placeholder="Eamil" class="form-control">
					<small class="form-text">We'll Never Share Your Email With Anyone Else:</small>
				</div>
				<div class="form-group">
					<i class="fa fa-key mt-2 ml-2"></i>
					<label class="font-weight-bold">Password</label>
					<input type="password" name="password" placeholder="Password"class="form-control">
				</div>
				<button class="btn btn-outline-danger btn-block font-weight-bold text-center mt-4 shadow">Login</button>
				<?php if(isset($loginMsg)){echo $loginMsg;} ?>

			</form>
			<div class="text-center">
				<a href="index.php" class="btn btn-success mt-2 font-weight-bold">Back To Home</a>
			</div>
		</div>
	</div>
</div>



























<!-- Bootstrap js-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>