<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Auca</title>
		<!-- Bootstrap -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
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
			<div class='container'>
				<header>
					<div class='inline'>
						<div class='head'>
							<a href='admin.php'> <img src="aucalogo.jpg" pull- id="logo" width=150 height=150 class='logo'/> </a>
							<img src="AUCA1.jpg" id="auca" class="auca"/>
						</div>
					</div>
				</header>
				<br/>
				
				
				<div class='starter-template' >
					
				<?= $content ; ?>
				
				</div>
					
					<footer>
						<?php include('portions/pagebottom_admin.php'); ?>
					</footer>  
			</div>
		</body>
	</html>
			