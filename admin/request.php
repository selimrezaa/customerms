<?php 
define('TITLE','REQUEST');
	include('../connection.php');
	include('header.php');
?>

	
<div class="col-sm-4 mt-5 p-4"><!-- START 2ND COLUMN -->
	<h3 class="text-center text-danger font-weight-bold mb-3 ">Request id show here!</h3> 

<?php 
	$sql = "SELECT id, name, requestinfo, description, email, submitdate FROM submitreq_table";
	$result = $connection->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){ ?>
				<div class="card p-3 mt-2">
					<div class="card-title text-center">
						<h4 class="card-text ">ID: <?php echo $row['id']; ?> </h4>
						<hr/>
					</div>
					<div class="card-body">
						<p class="card-text">Name: <?php echo $row['name']; ?></p>
						<p class="card-text">Request Info: <?php echo $row['requestinfo']; ?></p>
						<p class="card-text">Description: <?php echo $row['description']; ?>
						<div class="float-right ml-3">
							<form action="" method="POST">
							<input type="hidden" name="hiddnId" value="<?php echo $row['id']; ?>">
							<input type="submit" name="requestid" value="View" class="btn btn-warning">			
							<input type="submit" name="close" value="Close" class="btn btn-primary">
							</form>
						</div>

						</p>
					</div>
				</div>

			<?php }
		}
 ?>

</div><!-- END 2ND COLUMN -->
<?php 
if(isset($_REQUEST['requestid'])){
		$sql = "SELECT * FROM submitreq_table WHERE id = {$_REQUEST['hiddnId']}";
		$result = $connection->query($sql);
		$row = $result->fetch_assoc();
}
	if(isset($_REQUEST['close'])){
		$sql = "DELETE FROM submitreq_table WHERE id = {$_REQUEST['hiddnId']}";
		if($connection->query($sql) == TRUE ){
			echo '<meta http-equiv="refresh" content="0;URL=?closed" />';
		}else{
			echo "unable to delete";
		}
	}

	if(isset($_REQUEST['submitbtn'])){
		if(($_REQUEST['request'] == "" ) || ($_REQUEST['name'] == "" ) ||($_REQUEST['requestinfo'] == "" ) ||($_REQUEST['description'] == "" ) ||($_REQUEST['address1'] == "" ) ||($_REQUEST['address2'] == "" ) ||($_REQUEST['city'] == "" ) ||($_REQUEST['state'] == "" ) ||($_REQUEST['zip'] == "" ) ||($_REQUEST['email'] == "" ) ||($_REQUEST['mobile'] == "" ) ||($_REQUEST['assigntotech'] == "" ) ||($_REQUEST['date'] == "" )){
			$msg = "<div class='alert alert-warning'>Fill all fields </div>";
		}else{
			$request = $_REQUEST['request'];
			$name = $_REQUEST['name'];
			$requestinfo = $_REQUEST['requestinfo'];
			$description = $_REQUEST['description'];
			$address1 = $_REQUEST['address1'];
			$address2 = $_REQUEST['address2'];
			$city = $_REQUEST['city'];
			$state = $_REQUEST['state'];
			$zip = $_REQUEST['zip'];
			$email = $_REQUEST['email'];
			$mobile = $_REQUEST['mobile'];
			$assigntotech = $_REQUEST['assigntotech'];
			$date = $_REQUEST['date'];

			$sql = "INSERT into assign_work (rno, request_id,request_info, request_desk, request_name, request_address1, request_address2, request_city, request_state, request_zip,request_email,request_mobile, request_tech, request_date) VALUES ('$request','$name', '$requestinfo', '$description', '$address1', '$address2', '$city', '$state', '$zip','$email', '$mobile', '$assigntotech', '$date')";
			if($connection->query($sql) == TRUE ){
				$msg = "<div class='alert alert-success'>assign successfully</div>";
			}else{
				$msg = "<div class='alert alert-warning'> ERror </div>";
			}
		}
	}



 ?>

<div class="col-sm-5 mt-5 P-4 mb-5"> <!-- START 3RD COLUMN -->
	<form action="" method="POST mb-5">
		<div class="form-group">
			<label> request id </label>
			<input type="text" name="request" class="form-control"
			 value="<?php if(isset($row['id'])) echo $row['id']; ?>">
		</div>
		<div class="form-group">
			<label> name </label>
			<input type="text" name="name" class="form-control" value="<?php if(isset($row['name'])) echo $row['name']; ?>">
		</div>
		<div class="form-group">
			<label> request info </label>
			<input type="text" name="requestinfo" class="form-control" value="<?php if(isset($row['requestinfo'])) echo $row['requestinfo']; ?>">
		</div>
		<div class="form-group">
			<label> description </label>
			<input type="text" name="description" class="form-control" value="<?php if(isset($row['description'])) echo $row['description']; ?>">
		</div>
		<div class="form-row">
			<div class="form-group col-sm-6">
				<label> address 1 </label>
				<input type="text" name="address1" class="form-control" value="<?php if(isset($row['address1'])) echo $row['address1']; ?> ">
			</div>
			<div class="form-group col-sm-6">
				<label> address 2 </label>
				<input type="text" name="address2" class="form-control" value="<?php if(isset($row['address2'])) echo $row['address2']; ?> ">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-sm-4">
				<label> city </label>
				<input type="text" name="city" class="form-control" value="<?php if(isset($row['city'])) echo $row['city']; ?> ">
			</div>
			<div class="form-group col-sm-4">
				<label> state </label>
				<input type="text" name="state" class="form-control" value="<?php if(isset($row['state'])) echo $row['state']; ?> ">
			</div>
			<div class="form-group col-sm-4">
				<label> zip </label>
				<input type="text" name="zip" class="form-control" value="<?php if(isset($row['state'])) echo $row['state']; ?> ">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-sm-8">
				<label> email </label>
				<input type="text" name="email" class="form-control" value="<?php if(isset($row['email'])) echo $row['email']; ?> ">
			</div>
			<div class="form-group col-sm-4">
				<label> mobile </label>
				<input type="text" name="mobile" class="form-control" value="<?php if(isset($row['submitdate'])) echo $row['submitdate']; ?> ">
			</div>
		</div>
		<div class="form-row ">
			<div class="form-group col-sm-6">
				<label>  assign to technician </label>
				<input type="email" name="assigntotech" class="form-control" value="<?php if(isset($row['email'])) echo $row['email']; ?> ">
			</div>
			<div class="form-group col-sm-6">
				<label> date </label>
				<input type="text" name="date" class="form-control" value="">
			</div>
		
		</div>
		<div class="float-right">
		<button type="submit" class="btn btn-primary" name="submitbtn"> assign </button>
		<button type="reset" class="btn btn-warning ml-3" class="resetbtn"> reset </button>
		</div>
	</form>
	<div class="mt-5"><?php if(isset($msg)){ echo $msg; } ?></div>
</div> <!-- END 3RD COLUMN -->


<?php 
	include('footer.php');
?>
