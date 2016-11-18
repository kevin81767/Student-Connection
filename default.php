<!DOCTYPE html>
	<html>
		<head>
			<title>Auca</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- Bootstrap -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link rel='icon' type='image/png' href='aucalogo2.png'/>
			<link rel='stylesheet' href='design1.css'/>
			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
			queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
			html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
			respond.min.js"></script>
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
				<script src="js/jquery.js"></script>
		</body>
	</html>
			