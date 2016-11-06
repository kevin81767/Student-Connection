<?php
if (isset($_FILES['picture']) AND ($_FILES['picture']['error'])==0)
{
	$maxsize=1000000000;
	$path='uploads/';
	$extensions=array('.jpeg','.png','.gif','.jpg');
	$extension=strrchr($_FILES['picture']['name'],'.');
	$name=md5(uniqid(rand(),true));
	if (!in_array($extension, $extensions))
	{
		$error= "Error: The extension of the picture is not allowed";
	}
	
	if ($_FILES['picture']['size'] > $maxsize)
	{
		$error="Size too big";
	}
	
	if(!isset($error))
	{
		$name_avatar=str_replace($_FILES['picture']['tmp_name'],'',$name).$extension;
		if(move_uploaded_file($_FILES['picture']['tmp_name'], $path .
			$name_avatar))
		{
			$upl=New Database('db_auca');
			$first_name=$_SESSION['First_name'];
			$last_name=$_SESSION['Last_name'];
			$id_number=$_SESSION['Id_number'];
			$final=$upl->insert_avatar($first_name,$last_name,$id_number,$name_avatar);
			if($final)
			{
				header("location:login.php?p=myprofil");
			}
		}
		else
		{
			$error="Erreur lors de l'envoi du fichier";
		}
	}
	else
	{
		echo $error;
	}
}


?>
