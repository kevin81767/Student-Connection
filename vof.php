<?php

if (!empty($_POST['verse']))
{
	$verset=$_POST['verse'];
	
	
	require "class/VerseOfTheDay.php";
	

	$verse=New VerseOfTheDay('db_auca');
	$verse->insertVerse($verset); //Function that insert the verse of the day
	$report="Verse of the day sent";
}


?>

<form action='admin.php?p=vof' method='post' class='form-group'>
	<h5 class='text-info'>VERSE OF THE DAY</h5>
			<textarea name='verse' class='form-group' class='form-control'></textarea>
			<?php if(isset($report))
			{
				echo"<div class='alert alert-info'>".$report."</div>";
			}
			?>
			<input type='submit' value='Send' class='btn btn-info'/>
</form>

	