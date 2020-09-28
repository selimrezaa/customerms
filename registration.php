<?php 
	include('connection.php');
	//CHECKING EMPTY FIELD
	if(isset($_REQUEST['submit'])){
		if(($_REQUEST['name'] == "" ) || ($_REQUEST['email'] == "" ) || ($_REQUEST['password'] == "" )){
			$regMsg = " <div class='alert alert-warning mr-2' role='alert'>All Fields Are Required! </div>" ;
			}else{
				//CHECKING REGISTERD EMAIL
				$sql = "SELECT email FROM new_table WHERE email = '".$_REQUEST['email']."'";
				$result = $connection->query($sql);
				if($result->num_rows==1){
					$regMsg = " <div class='alert alert-danger mr-2' role='alert'>Your Email Id Allready Exist!</div>" ;
				}
				else{
				//ASSINING USER VALUES
				$name = $_REQUEST['name'];
				$email = $_REQUEST['email'];
				$password = $_REQUEST['password'];

				$sql = "INSERT INTO new_table(name, email, password) VALUES ('$name','$email','$password')";
				if($connection->query($sql) == TRUE ){
					
					$regMsg = " <div class='alert alert-success mr-2' role='alert'>Account Successfully Created </div>" ;

				}else{
					$regMsg = " <div class='alert alert-danger mr-2' role='alert'>Unable To Create Account!</div>" ;
				}
			}
		}
	}

 ?>

 <!-- Start User Registration -->
<div class="container mt-4" id="Registration">
	<h2 class="text-center"> Create An Account</h2>
	<div class="row mt-4 mb-5">
		<div class="col-md-6 offset-md-3">
			<form action="" method="" class="shadow-lg p-4">
				<div class="form-group">
					<i class="fa fa-user"><label for="name" class="font-weight-bold pl-2"> Name</label></i>
					<input type="text" name="name" class="form-control" placeholder="Enter Your Name">
				</div>
				<div class="form-group">
					<i class="fa fa-user"><label for="email" class="font-weight-bold pl-2"> Email</label></i>
					<input type="email" name="email" class="form-control" placeholder="Enter Your Email">
					<small class="form-text">We'll never share your email anyone else</small>
				</div>
				<div class="form-group">
					<i class="fa fa-key"><label for="password" class="font-weight-bold pl-2"> password</label></i>
					<input type="password" name="password" class="form-control" placeholder="Enter Your Password">
				</div>
				<button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="submit"> SignUp</button>
				<em style="font-size: 10px;"> Note- By clicking Sign up, You agree to our term and data policy cooky policy </em>
				<?php if(isset($regMsg)){echo $regMsg;} ?>
			</form>
			
		</div>
	</div>
</div>  <!-- End user registration -->