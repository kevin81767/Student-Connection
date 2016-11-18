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
		<div class='container'>
			<!--The caroussel-->

			<div class='container'>
				<div class='row'>
					<div class='col-sm-12'>-->
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
			<br/>
			<div class='verse'>
				<?php
				require "class/VerseOfTheDay.php";

				$get=new VerseOfTheDay('db_auca');
				$line=$get->getVerse();
				
				if ($line)
				{
					$ligne=$line[0]->verse;
					echo "<div class='alert alert-success'><h4>Verse of the day</h4>".nl2br($ligne)."</div>";
				}
				?>
			</div>
			<br/>
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class='container' id='navnav'>
					<a class='navbar-brand' href='login.php?p=welcome'>Auca Connection</a>
					<button class="navbar-toggle" data-toggle="collapse" data-target="#navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class='collapse navbar-collapse navHeaderCollapse'>
						<ul class='nav navbar-nav navbar-right navHeaderCollapse'>
							<li class='active' ><a href='login.php?p=welcome'><span class="glyphicon glyphicon-home" width='100' height='100'>Home</span></a></li>
							<li><a class='text-success' href="login.php?p=important">Important</a></li>
							<li><a href="login.php?p=faculty">My faculty</a></li>
							<li><a href="login.php?p=myprofil">My profil</a></li>
							<li><a class='text-danger' href='portions/signout.php'>Sign out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class='starter-template' >
				<div class='content'>
			<?= $content ; ?>
				</div>
			
			</div>
				
				<footer>
					<?php include('portions/pagebottom.php'); ?>
				</footer>  
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://code.jquery.com/jquery.js"></script>
				<!-- Include all compiled plugins (below), or include individual files
				as needed -->
				<script src="js/bootstrap.min.js"></script>
				<script src="js/jquery.js"></script>
		</div>
		</body>
			
	</html>
			