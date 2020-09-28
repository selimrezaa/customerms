<?php 
define('TITLE','Check Status');
include('includes/header.php');
session_start();
if($_SESSION['is_login']){
			$email = $_SESSION['email']; 
		}else{
			echo "<script>location.href='login.php'</script>";
		}
 ?>

 <!-- START 2ND COLUMN -->
 <div class="col-sm-4 mt-5">
 	<form action="" method="POST" class="form-inline">
 		<div class="form-group">
 			<label class="font-weight-bold mr-5"> Inter id</label>
 			<input type="text" name="interid" class="form-control">
 		</div>
 		<button type="submit" class="btn btn-success" name="checkbtn">Check</button>
 	</form>
 </div> <!-- end 2ND COLUMN -->

 <?php 
 	if(isset($_REQUEST['checkbtn'])){
 		$sql = "SELECT * FROM assign_work WHERE rno = {$_REQUEST['checkbtn']}";
					$result = $connection->query($sql);
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){ ?>
							<table>
								<tr>
									<td> <?php echo $row["rno"]; ?> </td>
								</tr>
							</table>
						<?php }
					}else{
						echo "Zerro result";
					}
 	}
  ?>
  	<!-- 	
	  <table class="table col-sm-4 mt-5">
	  	<h3 class="text-center">Assign Work Here </h3>
  	<thead>
  		<tr>
  			<th>Request id</th>
  		</tr>
  	</thead>
  	<tbody>
  		<tr>
  			<td><?php if(isset ($row['id'])){ echo $row['id']; } ?></td>
  		</tr>
  	</tbody>
  </table> -->