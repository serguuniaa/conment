<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Apartment</title>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script type="text/javascript"src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>		
		</div>
	</nav>	
	<div class="row">
		<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="wrap">
					<?php
					/**
					 * Created by PhpStorm.
					 * User: Фёдор
					 * Date: 24.10.2015
					 * Time: 23:08
					 */


					include('func.php');

					login();
					logout();

					?>
				</div>
			</div>
		<div class="col-lg-2"></div>
	</div>
</body>
</html>