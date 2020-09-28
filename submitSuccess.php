<?php 
define('TITLE', 'Submit Request');
include('includes/header.php');
include('connection.php');
	session_start();
	if(isset($_SESSION['is_login'])){
		$email = $_SESSION['email'];
	}
	else{
		echo "<script>location.href='login.php'</script>";
	}

	$sql = "SELECT * FROM submitreq_table WHERE id = {$_SESSION['myid']}";
	$result = $connection->query($sql);
	
	if($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo "<div class = 'ml-5 mt-5'>
				<table class= 'table'>
					<tbody>
						<tr>
							<th> Id </th>
							<td>".$row['id']."</td>
						</tr>
						<tr>
							<th> Name </th>
							<td>".$row['name']."</td>
						</tr>
						<tr>
							<th> Request info </th>
							<td>".$row['requestinfo']."</td>
						</tr>
						<tr>
							<th> address1 </th>
							<td>".$row['address1']."</td>
						</tr>
						<tr>
							<th> address2 </th>
							<td>".$row['address2']."</td>
						</tr>
						<tr>
							<th> Description </th>
							<td>".$row['description']."</td>
						</tr>
						<tr>
							<th> city </th>
							<td>".$row['city']."</td>
						</tr>
						<tr>
							<th> state </th>
							<td>".$row['state']."</td>
						</tr>
						<tr>
							<th> zip </th>
							<td>".$row['zip']."</td>
						</tr>
						<tr>
							<th> email </th>
							<td>".$row['email']."</td>
						</tr>
						<tr>
							<th> phone </th>
							<td>".$row['phone']."</td>
						</tr>
						<tr>
							<th> date </th>
							<td>".$row['submitdate']."</td>
						</tr>
						<tr>
							<td><form class='d-print-none mt-5 ml-5'><input  class= 'btn btn-success' value = 'print' type='submit' onClick='window.print()'></form></td>
						</tr>
					</tbody>
				</table>
			</div>";
	}









 ?>