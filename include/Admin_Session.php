<?php


if (isset($_SESSION['username']))
{
	header("Location:admin.php?p=publication");
}
