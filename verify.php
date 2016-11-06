<?php

echo ' We are in '.date('Y-m-d').'  At '.date('h:i:s').' PM' ; 

if (!empty($_POST['F_name']))
{
	if (!empty($_POST['L_name']))
	{
		if (!empty($_POST['Id_number']))
		{
			if ($_POST['Password'] == $_POST['c_Password'])
			{
							$F_name=$_POST['F_name'];
							$L_name=$_POST['L_name'];
							$Id_number=$_POST['Id_number'];
							$Faculty=$_POST['Faculty'];
							$Semester=$_POST['Semester'];
							$Password=sha1($_POST['Password']);
							
							$db->insert($F_name,$L_name,$Id_number,$Faculty,$Semester,$Password);
							if ($db)
							{
								echo"<h1 class='text-success'> Successfuly registered </h1>
					<h3> Click<a href='index.php'> here</a> for login</h3>";
							}
							
			}
			else
			{
				echo "<h4 class='text-danger'>You must confirm the same password provide on the top </h4>";
			}
							
							
					
		}
		else
		{
			echo "<h4 class='text-danger'>You must confirm the same password provide on the top </h4>";
		}
	}
		else
		{
			echo "You must provide an id number in order to process with the registration";
		}
}
	else
	{
		echo "<p>You must provide a name in order to process with the registration</p>";
	}

