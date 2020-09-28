<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title>CMS</title>

	<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Font Awesome icon -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Custom css  -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>
<!--Start Navbar  -->
<nav class="navbar navbar-expand-sm navbar-dark bg-danger fixed-top">
  <a class="navbar-brand pl-5 ddd" href="#">Navbar</a>
  <span class="navbar-text">Customers's happyness our aim</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse navLinkColor" id="navbarNav">
    <ul class="navbar-nav pl-5 ">
      <li class="nav-item">
        <a class="nav-link " href="#Home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Servicess">Servicess</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Registration">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#Contact">Contact</a>
      </li>
    </ul>
  </div>
</nav> <!-- End navbar -->

<!-- Start header Jumbotron -->
<header class="jumbotron back-img" style="background-image: url(img/hero.jpg);" id="Home">
	<div class="mainHeading ml-5 mt-5">
	<h1 class="text-uppercase text-dark font-weight-bold heading-text">Welcome to cms</h1>
	<p class="font-italic  text-dark">customers happynes is our aim</p>
	<a href="login.php" class="btn btn-success mr-4">Login</a>
	<a href="#" class="btn btn-danger mr-4"> Signup</a>
	</div>
</header> <!-- End header Jumbotron -->

<!-- Start Introduction Sectiion -->
<div class="container">
	<div class="jumbotron">
		<h3 class="text-center">Welcome to Jumbotron </h3>
		<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
	</div>
</div> <!-- End Introduction Sectiion -->
 
 <!-- Start Servicess -->
 <dir class="container text-center border-bottom mt-4" id="Servicess">
 	<h2 class="text-center">Our Servicess</h2>
 	<div class="row mt-4">
 		<div class="col-sm-4 mb-4">
 			<a href=""><i class="fa fa-tv fa-5x text-success"></i></a>
 			<p class="text-success  mt-4">Electronics Application</p>
 		</div>
 		<div class="col-sm-4 mb-4">
 			<a href=""><i class="fa fa-user-o fa-5x text-primary"></i></a>
 			<p class="text-primary mt-4">Electronics Application</p>
 		</div>
 		<div class="col-sm-4 mb-4">
 			<a href=""><i class="fa fa-cogs fa-5x text-info"></i></a>
 			<p class="text-info mt-4">Electronics Application</p>
 		</div>
 	</div>
 </dir>  <!-- #End Servicess -->

 <!-- Start User Registrat -->
 	<?php include('registration.php'); ?>
 <!-- End Forms -->

 <!-- Start Happy Customers -->
 <div class="jumbotron bg-danger" id="Login">
 	<div class="container">
 		<h3 class="text-center text-white">Happy Customer's</h3>
 		<div class="row">
 			<div class="col-lg-3 col-sm-6 mt-4 mb-4">
 				<div class="card shaodw-lg">
 					<div class="card-body text-center">
 						<img src="img/man1.jpg" class="img-fluid" style=" height: 120px; width: 120px; border-radius: 100px;">
 						<h4 class="card-title text-center">Selim Reza </h4>
 						<p class="class-text">You asked, Font Awesome delivers with 41 shiny new icons in versionYou asked, Font Awesome delivers </p>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-3 col-sm-6 mt-4 mb-4">
 				<div class="card shaodw-lg">
 					<div class="card-body text-center">
 						<img src="img/man2.jpeg" class="img-fluid" style=" height: 120px; width: 120px; border-radius: 100px;">
 						<h4 class="card-title text-center">Selim Reza </h4>
 						<p class="class-text">You asked, Font Awesome delivers with 41 shiny new icons in versionYou asked, Font Awesome delivers </p>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-3 col-sm-6 mt-4 mb-4">
 				<div class="card shaodw-lg">
 					<div class="card-body text-center">
 						<img src="img/man3.jpg" class="img-fluid" style=" height: 120px; width: 120px; border-radius: 100px;">
 						<h4 class="card-title text-center">Selim Reza </h4>
 						<p class="class-text">You asked, Font Awesome delivers with 41 shiny new icons in versionYou asked, Font Awesome delivers </p>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-3 col-sm-6 mt-4 mb-4">
 				<div class="card shaodw-lg">
 					<div class="card-body text-center">
 						<img src="img/man4.jpg" class="img-fluid" style=" height: 120px; width: 120px; border-radius: 100px;">
 						<h4 class="card-title text-center">Selim Reza </h4>
 						<p class="class-text">You asked, Font Awesome delivers with 41 shiny new icons in versionYou asked, Font Awesome delivers </p>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>  <!-- End Happy Customers -->

 <!-- Start Contact Us Section -->
 <div class="container" id="Contact">
 	<h2 class="text-center">Contact Us</h2>
 	<div class="row">
 		<div class="col-md-8"> <!-- Start First Collamn -->
 			<form action="" method="">
 				<input type="text" class="form-control" name="name" placeholder="Name"><br>
 				<input type="text" class="form-control" name="subject" placeholder="Subject"><br>
 				<input type="email" class="form-control" name="email" placeholder="email"><br>
 				<textarea class= " form-control" placeholder="How Can We Help You?" style="height: 150px;"></textarea><br>
 				<button type="submit" value="send" name="submit" class="btn btn-primary">Submit</button> <br>
 			</form>
 		</div> <!-- End First Collamn-->
 		<div class="col-md-4 mt-4 "> <!-- Start Second Collamn -->
 			<strong class="text-center"> HeadQuater: </strong><br>
 			OSMS privet limited,<br>
 			Ashok Nagar Ranchi, <br>
 			Jharkhand 4535645, <br>
 			phone +88384532588<br>
 			<a href="#"> www.developerselim.com</a><br><br>
 			<strong class="text-center"> HeadQuater: </strong><br>
 			OSMS privet limited,<br>
 			Ashok Nagar Ranchi, <br>
 			Jharkhand 4535645, <br>
 			phone +88384532588<br>
 			<a href="#"> www.developerselim.com</a>
 		</div> <!-- End Second Collamn -->
 	</div>
 </div>  <!-- End Contact us Section -->

 <!-- Start Footer Section -->
<div class=" container-fluid mt-5 bg-dark p-3 text-white">
	<div class="row">
		<div class="col-md-6">
			<span class="mr-3">Follow us </span>
			<a href="#" class="mr-2"><i class="fa fa-facebook fi-color"></i></a>
			<a href="#" class="mr-2"><i class="fa fa-instagram fi-color"></i></a>
			<a href="#" class="mr-2"><i class="fa fa-twitter fi-color"></i></a>
			<a href="#" class="mr-2"><i class="fa fa-linkedin fi-color"></i></a>
		</div>
		<div class="col-md-6 text-right">
			<small>Designed By Selimreza &copy;2020 </small>
			<small class="ml-2"> <a href="admin/adminLogin.php">admin login</a></small>
		</div>
	</div>
</div>

<!-- Bootstrap js-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>