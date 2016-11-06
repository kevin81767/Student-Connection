<?php
			require 'class/Autoloader.php';
			Autoloader::register();

			if (isset($_GET['p']))
			{
				$p=$_GET['p'];
			}
			else
			{
				$p='staff';
			}

			$db= New Database('db_auca');
			
			ob_start();

			if ($p ==='staff')
			{
				require 'staff.php';
			}
			elseif($p ==='vof')
			{
				require 'vof.php';
			}
			elseif($p==='publication')
			{
				require 'publication.php';
			}
			elseif($p==='login')
			{
				require 'login.php';
			}
			
			else
			{
				echo 'The page that you request does not exist!!!.';
				echo '<a href=\'index.php\'>Return to the home page</a>';
			}

			$content=ob_get_clean();
			require 'default3.php';