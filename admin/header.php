<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE ?></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Font Awesome icon -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- BOOTSTRAP CDN LINK -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- Custom css  -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<!-- NAVBAR START HERE -->
<nav class="navbar navbar-dark bg-danger flex-md-nowwrap fixed-top p-0 shadow"><a href="../index.php" class="navbar-brand col-sm-3 col-sm-2 mr-0 "> OSMS </a> </nav> <!-- NAVBAR END HERE -->

<div class="container-fluid"><!-- START SIDEBAR CONTAINER HERE -->
	<div class="row"><!-- ROW STARST HERE -->
		<nav class="col-sm-2 bg-light sidebar py-5"><!-- SIDE BAR START HERE -->
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item"><a href="dashboard.php" class="nav-link <?php if(PAGE == 'dashboard'){echo 'active';} ?>"> <i class="fa fa-user">DASHBOARD</i></a></li>
					<li class="nav-item"><a href="workOrder.php" class="nav-link <?php if(PAGE == 'workorder'){echo 'active';} ?>"><i class="fa fa-user">Work Order </i></a></li>
					<li class="nav-item"><a href="request.php" class="nav-link"><i class="fa fa-user">Request</i></a></li>
					<li class="nav-item"><a href="asset.php" class="nav-link"><i class="fa fa-user">Asset</i></a></li>
					<li class="nav-item"><a href="technician.php" class="nav-link"><i class="fa fa-user">Technician</i></a></li>
					<li class="nav-item"><a href="requester.php" class="nav-link"><i class="fa fa-user">Requester</i></a></li>
					<li class="nav-item"><a href="sellReport.php" class="nav-link"><i class="fa fa-user">Sell Report</i></a></li>
					<li class="nav-item"><a href="workReport.php" class="nav-link"><i class="fa fa-user">Work Report</i></a></li>
					<li class="nav-item"><a href="changePassword.php" class="nav-link"><i class="fa fa-user">Change Password</i></a></li>
					<li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-user">Logout</i></a></li>

				</ul>
			</div>
		</nav><!-- SIDEBAR END HERE -->