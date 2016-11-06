<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Auca</title>
		<!-- Bootstrap -->
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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

	<?php

	//Beginning to send the picture
	if(isset($_FILES['picture']))
	{
		$name=md5(uniqid(rand(),true));
		$dossier = 'uploads/';
		$fichier = basename($_FILES['picture']['name']);
		$names=str_replace($_FILES['picture']['tmp_name'],'',$name).$extension;
		if(move_uploaded_file($_FILES['picture']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
		{
			echo 'Upload effectué avec succès !';
		}
		else //Sinon (la fonction renvoie FALSE).
		{
			echo 'Echec de l\'upload !';
		}
	}







	//End of sending the picture
	?> 
		<form action="test.php" method='post' enctype='multipart/form-data'>
			fichier:<input type='file' name='picture'/>
			<input type='submit' value='upload'/>
		</form>
	</body>
</html>