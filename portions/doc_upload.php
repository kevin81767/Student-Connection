<?php
if (isset($_FILES['document']) AND ($_FILES['document']['error'])==0)
{
	var_dump($_FILES['document']);
	$maxsize=10000000000000;
	$path='assignment_upload/';
	$extensions=array('.pdf','.docx','.pptx','.jpeg','.png','.gif','.mp3');
	$extension=strrchr($_FILES['document']['name'],'.');
	$name=$_POST['assignment'];
	if (!in_array($extension, $extensions))
	{
		$error= "Error: The extension of the picture is not allowed";
	}
	
	/*if ($_FILES['document']['size'] > $maxsize)
	{
		$error="Size too big";
	}*/
	
	if(!isset($error))
	{
		$name_document=str_replace($_FILES['document']['tmp_name'],'',$name).$extension;
		if(move_uploaded_file($_FILES['document']['tmp_name'], $path .
			$name_document))
		{
			$upl=New Database('db_auca');
			$teacher=$_POST['teacher'];
			$assignment=$_POST['assignment'];
			$final=$upl->assignment_st($teacher,$assignment,$name_document);
			if($final)
			{
				header("location:admin.php?p=assignment");
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
