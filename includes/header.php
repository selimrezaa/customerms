
<!DOCTYPE html>
<html>
<head>
	<title> <?php echo TITLE  ?> </title>
	<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Font Awesome icon -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Custom css  -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<!-- NAVBAR START HERE -->
<nav class="navbar navbar-dark bg-danger flex-md-nowwrap fixed-top p-0 shadow"><a href="index.php" class="navbar-brand col-sm-3 col-sm-2 mr-0 ">OSMS</a></nav> <!-- NAVBAR END HERE -->


<div class="container-fluid"><!-- START SIDEBAR CONTAINER HERE -->
	<div class="row"><!-- ROW STARST HERE -->
		<nav class="col-sm-2 bg-light sidebar py-5"><!-- SIDE BAR START HERE -->
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item"><a href="loginProfile.php" class="nav-link "> <i class="fa fa-user">PROFILE</i></a></li>
					<li class="nav-item"><a href="submitRequest.php" class="nav-link"><i class="fa fa-user">Submit Request </i></a></li>
					<li class="nav-item"><a href="checkStatus.php" class="nav-link"><i class="fa fa-user">Check Status</i></a></li>
					<li class="nav-item"><a href="changePass.php" class="nav-link"><i class="fa fa-user">Change Password</i></a></li>
					<li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-user">Logout</i></a></li>
				</ul>
			</div>
		</nav><!-- SIDEBAR END HERE -->
		
	