<?php
define('TITLE', 'Submit Request');
include('includes/header.php');
include('connection.php');

session_start();
		if($_SESSION['is_login']){
			$email = $_SESSION['email']; 
		}else{
			echo "<script>location.href='login.php'</script>";
		}

if(isset($_REQUEST['submitReqBtn'])){
	if(($_REQUEST['requestinfo'] == "" ) || ($_REQUEST['description'] == "" ) || ($_REQUEST['name'] == "" ) || ($_REQUEST['address1'] == "" ) || ($_REQUEST['address2'] == "" ) || ($_REQUEST['city'] == "" ) || ($_REQUEST['state'] == "" ) || ($_REQUEST['zip'] == "" ) || ($_REQUEST['email'] == "" ) || ($_REQUEST['mobile'] == "" ) || ($_REQUEST['datee'] == "" )){
		$msg = "<div class='alert alert-warning '>Fill all Fields!</div>";
	}else{
		$requestinfo = $_REQUEST['requestinfo'];
		$description = $_REQUEST['description'];
		$name = $_REQUEST['name'];
		$address1 = $_REQUEST['address1'];
		$address2 = $_REQUEST['address2'];
		$city = $_REQUEST['city'];
		$state = $_REQUEST['state'];
		$zip = $_REQUEST['zip'];
		$email = $_REQUEST['email'];
		$mobile = $_REQUEST['mobile'];
		$datee = $_REQUEST['datee'];

		$sql = "INSERT INTO submitreq_table (name, requestinfo, description, address1, address2, city, state, zip, email, phone, submitdate) VALUES ('$requestinfo','$description','$name','$address1','$address2','$city','$state','$zip','$email','$mobile','$datee')";
		if($connection->query($sql) == TRUE ){
			$getid = mysqli_insert_id($connection);
			$msg = "<div class='alert alert-warning '>You are successfull! data has benn inserted.</div>";
			$_SESSION['myid'] =  $getid;
			echo "<script>location.href='submitSuccess.php'</script>";
		}else{
			$msg = "<div class='alert alert-warning '>SORRY Your Data is not inserted.</div>";
		}

	}
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
<div class="col-sm-2 col-md-10 mt-5"><!-- START SERVICE REQUEST FORM 2ND COLUMN -->
	<form action="" method="POST">
		<div class="form-group mx-5">
			<label for="inputInfo">Name </label>
			<input type="text" name="requestinfo" id="inputInfo" placeholder="Request Information" class="form-control">
		</div>
		<div class="form-group mx-5">
			<label for="inputDescription"> Request Info </label>
			<input type="text" name="description" id="inputDescription" placeholder="Description" class="form-control">
		</div>
		<div class="form-group mx-5">
			<label for="name">Description </label>
			<input type="text" name="name" id="name" placeholder="name" class="form-control">
		</div>
		<div class="form-row mx-5">
		<div class="form-group  col-md-6">
			<label for="address1">address1 </label>
			<input type="text" name="address1" id="address1" placeholder="address1" class="form-control">
		</div>
		<div class="form-group mx-5">
			<label for="address2">address2 </label>
			<input type="text" name="address2" id="address2" placeholder="address2" class="form-control">
		</div>
		</div>
		<div class="row mx-5">
		<div class="form-group col-md-5">
			<label for="city">city </label>
			<input type="text" name="city" id="city" placeholder="city" class="form-control">
		</div>
		<div class="form-group  col-md-5">
			<label for="state">state </label>
			<input type="text" name="state" id="state" placeholder="state" class="form-control">
		</div>
		<div class="form-group col-md-2">
			<label for="zip">zip </label>
			<input type="text" name="zip" id="zip" placeholder="zip" class="form-control" onKeypress="isInputNumber(event)">
		</div>
		</div>
		<div class="row mx-5">
		<div class="form-group col-md-7">
			<label for="email">email </label>
			<input type="email" name="email" id="email" placeholder="email" class="form-control">
		</div>
		<div class="form-group  col-md-3">
			<label for="mobile">mobile </label>
			<input type="text" name="mobile" id="mobile" placeholder="mobile" class="form-control">
		</div>
		<div class="form-group col-md-2">
			<label for="datee">date </label>
			<input type="text" name="datee" id="datee" placeholder="date" class="form-control">
		</div>
		</div>
		<button type="submit" name="submitReqBtn" class="btn btn-primary">Submit</button>
		<button type="reset" name="restReqBtn" class="btn btn-danger">Reset</button>
		<?php if(isset($msg)){echo $msg; } ?>
	</form>
	
</div><!-- END SERVICE REQUEST FORM 2ND COLUMN -->
















<?php include('includes/footer.php'); ?>















<!-- Bootstrap js-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>