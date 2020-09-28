<?php 
	define('TITLE','DASHBOARD');
	define('PAGE','dashboard');
	include('../connection.php');
	include('header.php');
	session_start();

	if(isset($_SESSION['admin_login'])){
		$aemail = $_SESSION['aemail'];
	} else{
		echo "<script>location.href='adminLogin.php'</script>";
	}
?>

		<div class="col-sm-9 col-md-10 mt-5 text-center"> <!-- 2nd side bar start -->
			<div class="row m-4">
				<div class="col-md-4">
					<div class="card text-white bg-danger mb-3 font-weight-bold  p-2" style="max-width: 18rem;" >
						<div class="card-header">Requests Received </div>
						<div class="card-body"></div>
						<h3 class="card-title">43</h3>
						<a href="#" class="btn text-white">View</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-success mb-3 font-weight-bold p-2" style="max-width: 18rem;" >
						<div class="card-header">Assined Work </div>
						<div class="card-body"></div>
						<h3 class="card-title">43</h3>
						<a href="#" class="btn text-white">View</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-warning mb-3 font-weight-bold p-2" style="max-width: 18rem;" >
						<div class="card-header">No Of technician</div>
						<div class="card-body"></div>
						<h3 class="card-title">43</h3>
						<a href="#" class="btn text-white">View</a>
					</div>
				</div>
			</div><!--- end dshboard row-->
			<div class="mx-5 mt-3 p-2">
				<p class="bg-dark text-white p-2"> List Of Requesters </p>
				<table class="table">
					<thead>
						<tr>
							<th>id </th>
							<th>name </th>
							<th>email </th>
						</tr>
					</thead>
				<?php

					$sql = "SELECT * FROM new_table";
					$result = $connection->query($sql);
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){?>
							<tbody>
								<tr>
									<td> <?php echo $row["id"]; ?> </td>
									<td> <?php echo $row["name"]; ?> </td>
									<td> <?php echo $row["email"]; ?> </td>
								</tr>
							</tbody>
						<?php }
					}else{
						echo "Zerro result";
					}
				?>	

				</table>

		</div> <!--- end dshboard column-->
<?php include('footer.php'); ?>