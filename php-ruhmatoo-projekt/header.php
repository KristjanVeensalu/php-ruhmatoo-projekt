<!DOCTYPE html>
<?php
		if (isset($_GET["logout"])) {
		session_destroy();
		header("Location: esileht.php");
	}
?>
<html>
	<head>
		<title>Training</title>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<header style="
		top:0;
		width:100%;
		z-index:1000
	">
			<div class="row page-header" style="background-color:#000000;height:75px;top:0">
				<div class="col-xs-offset-1 col-xs-4">
						<h2>
							<font style="font-family:verdana;font-weight:bold;color:white">
								DO IT BODYWEIGHT
							</font>
						<h2>
				</div>
				
				<div class="col-xs-offset-4 col-xs-2">
					<nav class="navbar-header" style="background-color:black;height:74px;padding:21px">
						<div class="container-fluid" style="background-color:black">
							<div class="navbar-header">	
							<div class="btn-group">
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:black">
								<font style="color:white">Workouts <span class="caret"></span> </font>
								</button>
								<ul class="dropdown-menu">
								<li><a class="btn navbar-header" href="Abs.php">Abs</a></li>
								<li><a class="btn navbar-header" href="Back.php">Back</a></li>
								<li><a class="btn navbar-header" href="Chest.php">Chest</a></li>
								<li><a class="btn navbar-header" href="Core.php">Core</a></li>
								<li><a class="btn navbar-header" href="Legs.php">Legs</a></li>
								<li><a class="btn navbar-header" href="Shoulders.php">Shoulders</a></li>
								</ul>
								</div>
						</div>
					</nav
			</div>
	</header>
	</head>
	<body style="
		background-color:#fafafa;
	">