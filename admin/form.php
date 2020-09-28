<?php 
define('TITLE','REQUEST');
	include('../connection.php');
	include('header.php');
?>

<div class="col-sm-5 mt-5">
	<form action="" method="POST">
		<div class="form-group">
			<label> request id </label>
			<input type="text" name="requestid" class="form-control">
		</div>
		<div class="form-group">
			<label> name </label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label> request info </label>
			<input type="text" name="requestinfo" class="form-control">
		</div>
		<div class="form-group">
			<label> description </label>
			<input type="text" name="description" class="form-control">
		</div>
		<div class="form-row">
			<div class="form-group col-sm-6">
				<label> address 1 </label>
				<input type="text" name="address1" class="form-control">
			</div>
			<div class="form-group col-sm-6">
				<label> address 2 </label>
				<input type="text" name="address2" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-sm-4">
				<label> city </label>
				<input type="text" name="city" class="form-control">
			</div>
			<div class="form-group col-sm-4">
				<label> state </label>
				<input type="text" name="state" class="form-control">
			</div>
			<div class="form-group col-sm-4">
				<label> zip </label>
				<input type="text" name="zip" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-sm-8">
				<label> phone </label>
				<input type="text" name="phone" class="form-control">
			</div>
			<div class="form-group col-sm-4">
				<label> submit date </label>
				<input type="text" name="submitdate" class="form-control">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-sm-6">
				<label> name </label>
				<input type="text" name="requestid" class="form-control">
			</div>
			<div class="form-group col-sm-6">
				<label> name </label>
				<input type="text" name="requestid" class="form-control">
			</div>
		</div>
	</form>
</div>