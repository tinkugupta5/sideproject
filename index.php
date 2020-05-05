<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/all.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/custom.css">
		<!-- font-family: 'Roboto', sans-serif; -->
		<title>Unotec</title>
	</head>
	<body>
		<!-- start navigation bar -->
		<nav  class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
			<a href="#" class="navbar-brand">UNOTECH</a>
			<span class="navbar-text"> Customer's Happiness is our Main aim</span>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="myMenu">
				<ul class="navbar-nav pl-5 custom-nav">
					<li  class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li  class="nav-item"><a href="#Service" class="nav-link">Service</a></li>
					<li  class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
					<li  class="nav-item"><a href="#" class="nav-link">Login</a></li>
					<li  class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
					
				</ul>
			</div>
		</nav>
		<!-- Ending of navigation bar -->
		<!-- JUMBOTRONE -->
		<header class="jumbotron back-img" style="background-image: url(image/banner.jpg);">
			<div class=" myclass mainHeading">
				<h1 class="text-uppercase text-white font-weight-bold">Welcome to Unotec</h1>
				<p class="font-italic text-white">Customer Happiness is our aim</p>
				<a href="#" class="btn btn-success mr-4">Login</a>
				<a href="#" class="btn btn-danger mr-4">Sign Up</a>
			</div>
			
		</header>
		<!-- jumbotron end -->
		<!-- start introduction section -->
		<div class="container">
			<div class="jumbotron">
				<h3 class="text-center">Unotec Services</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eum sunt sint aperiam illo aliquam repellendus, sapiente corporis fugiat, doloremque eveniet nostrum id molestiae quaerat doloribus pariatur cumque iusto numquam!  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum tempore dolorem numquam ullam dolores sequi magni porro vitae, sapiente perspiciatis, repudiandae fugit nemo aperiam explicabo aspernatur ea placeat fuga eligendi.</p>
			</div>
		</div>
		<!-- start introduction section -->
		<!-- our services -->
		<div class="container text-center border-bottom">
			<h2 class="text-center">our services</h2>
			<div class="row mt-4">
				<div class="col-sm-4 mb-4">
					<a href=""><i class="fas fa-tv fa-8x text-success"></i></a>
					<h4 class="mt-4">Electronic Application</h4>
				</div>
				<div class="col-sm-4 mb-4">
					<a href=""><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
					<h4 class="mt-4">Maintances</h4>
				</div>
				<div class="col-sm-4 mb-4">
					<a href=""><i class="fas fa-cogs fa-8x text-info"></i></a>
					<h4 class="mt-4">Fault Repair</h4>
				</div>
			</div>
		</div>
		<!-- registration form -->

		<?php include("userregistration.php") ?>

		<!-- end registration form container -->
		<!-- happy customer -->
		
		<div class="jumbotron bg-danger">
			<div class="container">
				<h2 class="text-center text-white">Happy Customer</h2>
				<div class="row mt-5">
					<div class="col-lg-3 col-sm-6">
						<div class="card shado-lg mb-2">
							<div class="card-body text-center">
								<h4 class="card-tittle">Rahul Kumar</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quis asperiores aliquam mollitia ex quidem repellat, in eius doloremque nam earum, natus ullam praesentium maxime id dolorem harum? Doloremque, suscipit?</p>
								
							</div>
						</div>
						
					</div>
					<!-- second card  -->
					<div class="col-lg-3 col-sm-6">
						<div class="card shado-lg mb-2">
							<div class="card-body text-center">
								<h4 class="card-tittle">Rahul Kumar</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quis asperiores aliquam mollitia ex quidem repellat, in eius doloremque nam earum, natus ullam praesentium maxime id dolorem harum? Doloremque, suscipit?</p>
								
							</div>
						</div>
						
					</div>
					<!-- third card -->
					<div class="col-lg-3 col-sm-6">
						<div class="card shado-lg mb-2">
							<div class="card-body text-center">
								<h4 class="card-tittle">Rahul Kumar</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quis asperiores aliquam mollitia ex quidem repellat, in eius doloremque nam earum, natus ullam praesentium maxime id dolorem harum? Doloremque, suscipit?</p>
								
							</div>
						</div>
						
					</div>
					<!-- fourth card  -->
					<div class="col-lg-3 col-sm-6">
						<div class="card shado-lg mb-2">
							<div class="card-body text-center">
								<h4 class="card-tittle">Rahul Kumar</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quis asperiores aliquam mollitia ex quidem repellat, in eius doloremque nam earum, natus ullam praesentium maxime id dolorem harum? Doloremque, suscipit?</p>
								
							</div>
						</div>
						
					</div>
					<!-- end card -->
				</div>
			</div>
		</div>
		<!-- end happy customer  -->
		<!-- start contact us  -->
		<?php include("contactform.php") ?>
		<!-- end contact us -->
		<!-- Bootstarp javascript -->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/all.min.js"></script>
		
	</body>
</html>