<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Auca</title>
		<!-- Bootstrap -->
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
			<link rel='stylesheet' href='css/bootstrap.min.css'>
			<link rel='icon' type='image/png' href='aucalogo2.png'/>
			<link rel='stylesheet' href='design1.css'/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
		-->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src='js/jquery/respond.min.js'></script>
		<script src='js/jquery/respond.src.js'></script>
		<![endif]-->
	</head>
		
	<body>	
				<!--The navigation bar-->
				<div class='navbar navbar-inverse navbar-fixed-top'>
					<div class='container'>
						<button class="navbar-toggle" data-toggle="collapse" data-target="navHeaderCollapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class='navbar-brand'href='index.php?p=home'>Auca Connection</a>
						<div class='collapse navbar-collapse navHeaderCollapse'>
							<ul class='nav navbar-nav navbar-right navHeaderCollapse'>
								<li><a href='index.php?p=home'>SIGN IN</a></li>
								<li><a href='index.php?p=register'><em>SIGN UP</em></a></li>
							</ul>
						</div>
					</div>
				</div>
			<!--//The navigation bar-->

			<!--The caroussel-->

			<div class='container'>
				<div class='row'>
					<div class='col-sm-12'>
						<div id='my-slider' class='carousel slide' data-ride='carousel'>

							<!--indicators-->
							<ol class="carousel-indicators">
							    <li data-target="#my-slider" data-slide-to="0" class="active"></li>
							    <li data-target="#my-slider" data-slide-to="1"></li>
							    <li data-target="#my-slider" data-slide-to="2"></li>
							    <li data-target="#my-slider" data-slide-to="3"></li>
							 </ol>


							<!--wrapper for slides-->
							<div class='carousel-inner' role='listbox'>
								<div class='item active'>
									<img src='forslide/auca1.jpg' alt='staff'/>	
								</div>
								<div class='item'>
									<img src='forslide/auca2.jpg' alt='staff'/>
									
								</div>
								<div class='item'>
									<img src='forslide/auca3.jpg' alt='staff'/>
									
								</div>
								<div class='item'>
									<img src='forslide/auca4.jpg' alt='staff'/>
									
								</div>
							</div>
							<!--controls or next and prev butoons-->
							<a class='left carousel-control' href='#my-slider' role='button' data-slide='prev'>
								<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
								<span class='sr-only'>previous</span>
							</a>

							<a class='right carousel-control' href='#my-slider' role='button' data-slide='next'>
								<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
								<span class='sr-only'>next</span>
							</a>
						</div>
					</div>
				</div>
			</div>


							
			
			<div class='starter-template' >
				<div class='container'>
				
				<?= $content ; ?>

				</div>
			
			</div>
				
				<footer>
					<div class='container'>
					<?php include('portions/pagebottom.php'); ?>
					</div>
				</footer>
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://code.jquery.com/jquery.js"></script>
				<!-- Include all compiled plugins (below), or include individual files
				as needed -->
				<script src="js/bootstrap.min.js"></script>
		</body>
	</html>
			