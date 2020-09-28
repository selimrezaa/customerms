<?php
define('TITLE','Change Password');
 include('includes/header.php');
 include('connection.php');
 session_start();
 if($_SESSION['is_login']){
 	$email = $_SESSION['email'];
 }else{
		echo "<script>location.href='login.php'</script>";
	}

 if(isset($_REQUEST['changePassword'])){
	if($_REQUEST['Password'] == ""){
		$msg = "<div class='alert alert-danger'>Fill all Fields!</div>";
	}else{
		$pass = $_REQUEST['Password'];
		$sql = "UPDATE new_table SET password = '$pass' WHERE email = '$email'";
		if($connection->query($sql) == TRUE){
			$msg = "<div class='alert alert-danger'>Update Successfully!</div>";
		}else{
			$msg = "<div class='alert alert-danger'>Unable To Update!</div>";
		}
	}
}
  ?>

  <div class="col-sm-2 col-md-10 mt-5"><!-- START SERVICE REQUEST FORM 2ND COLUMN -->
	<form action="" method="POST">
		<div class="form-group mx-5">
			<label for="email">Email </label>
			<input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" class="form-control" readonly>
		</div>
		<div class="form-group mx-5">
			<label for="Password">Password </label>
			<input type="Password" name="Password" id="Password" placeholder="Password" class="form-control">
		</div>
		<button type="submit" name="changePassword" class="btn btn-primary">Change Password</button>
		<button type="reset" name="restReqBtn" class="btn btn-danger">Reset</button>
		<?php if(isset($msg)){echo $msg; } ?>
	</form>
	
</div><!-- END SERVICE REQUEST FORM 2ND COLUMN -->