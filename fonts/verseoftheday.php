<?php

if (!empty($_POST['verse']))
{
	$verset=$_POST['verse'];
	
	require "class/Database.php";
	require "class/VerseOfTheDay.php";
	

	$verse=New VerseOfTheDay('db_auca');
	$verse->insertVerse($verset); //Function that insert the verse of the day
	$report="Verse of the day sent";
}


?>



<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Verse of the day</title>
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
		<form action='verseoftheday.php' method='post'>
			<textarea name='verse' class='form-group'></textarea>
			<?php if(isset($report))
			{
				echo"<div class='alert alert-info'>".$report."</div>";
			}
			?>
			<input type='submit' value='Send' class='btn btn-info'/>
		</form>
	</body>
	