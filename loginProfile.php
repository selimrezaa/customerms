<?php 
	define('TITLE', 'Login Profile');
	include('includes/header.php');
	include('connection.php');

	session_start();
	if($_SESSION['is_login']){
		$email = $_SESSION['email']; 
	}else{
		echo "<script>location.href='login.php'</script>";
	}

$sql = "SELECT name, email FROM new_table WHERE email = '$email'";
$result = $connection->query($sql);
if($result->num_rows == 1){
	$row = $result->fetch_assoc();
	$name = $row['name']; 
}
if(isset($_REQUEST['updateButton'])){
	if($_REQUEST['name'] == ""){
		$msg = "<div class='alert alert-danger'>Fill all Fields!</div>";
	}else{
		$name = $_REQUEST['name'];
		$sql = "UPDATE new_table SET name = '$name' WHERE email = '$email'";
		if($connection->query($sql) == TRUE){
			$msg = "<div class='alert alert-danger'>Update Successfully!</div>";
		}else{
			$msg = "<div class='alert alert-danger'>Unable To Update!</div>";
		}
	}
}


 ?>

		<div class="col-sm-6 mt-5"> <!-- STARST 2ND SIDEBAR  -->
			<form action="" method="POST" class="mx-5">
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" placeholder="Email" class="form-control" readonly="" value="<?php echo $email; ?>">
				</div>
				<div class="form-group">
					<label>Name</label>
					<input type="name" name="name" placeholder="Name" class="form-control" value="<?php echo $name; ?>" >
				</div>
				<button type="submit" name="updateButton" class="btn btn-primary">Update</button>
				<?php if(isset($msg)){echo $msg; } ?>
			</form>
		</div><!-- End 2ND SIDEBAR  -->
	<?php include('includes/footer.php') ?>