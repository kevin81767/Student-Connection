<?php


if (isset($_SESSION['Id_number']) AND($_SESSION['First_name']) AND 
				($_SESSION['Last_name']) AND ($_SESSION['Faculty']))
{
	header("Location:login.php");
}
