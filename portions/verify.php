<?php

if (!empty($_POST['F_name']))
{
	if (!empty($_POST['L_name']))
	{
		if (!empty($_POST['Id_number']))
		{
			if ($_POST['password'] == $_POST['c_password'])
			{
								
					try
					{
					$bdd = new PDO('mysql:host=localhost;dbname=db_auca', 'root', '');
					}
					catch(Exception $e)
					{
					die('Erreur : '.$e->getMessage());
					}
				
					
					
					
							$req = $bdd->prepare("INSERT INTO student_info
																	(first_name,last_name,id_number,faculty,password) 
																			VALUES(:f_name, :l_name, :id_number, :faculty, :password)");
							$req->execute(array(
														'f_name' => $_POST['F_name'],
														'l_name' => $_POST['L_name'],
														'id_number' => $_POST['Id_number'],
														'faculty'=> $_POST['Faculty'],
														'password' => $_POST['password']
														
																)
													);
														
														
			}
			else
			{
				echo "Le mot de passe doit etre bien re-taper ";
			}
		}
	}
}
