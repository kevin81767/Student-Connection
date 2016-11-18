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
					<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
					<script src="https://code.jquery.com/jquery.js"></script>
					<!-- Include all compiled plugins (below), or include individual files
					as needed -->
					<script src="js/bootstrap.min.js"></script>
					<script src="js/jquery.js"></script>
			</div>
		</body>
	</html>
			