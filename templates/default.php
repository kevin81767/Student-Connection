<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Coming Soon</title>
		<!-- Bootstrap -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
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
			<header>
				<a href='index.php'> <img src="aucalogo.jpg" id="logo" width=250 height=200 class='logo'/> </a>
			</header>
	
	
				
			<br/>
			<div class='starter-template' >
			<div class='ensemble'>
				
			<?= $content ; ?>
			
			</div>
			
			</div>
				
				<footer>
					<?php include('pagebottom.php'); ?>
				</footer>
		</body>
	</html>
			