<?php
			require 'class/Autoloader.php';
			Autoloader::register();

			if (isset($_GET['p']))
			{
				$p=$_GET['p'];
			}
			else
			{
				$p='home';
			}

			$db= New Database('db_auca');
			
			ob_start();

			if ($p ==='home')
			{
				require 'home.php';
			}
			elseif($p ==='register')
			{
				require 'register.php';
			}
			elseif($p==='verify')
			{
				require 'verify.php';
			}
			
			else
			{
				echo 'The page that you request does not exist!!!.';
				echo '<a href=\'index.php\'>Return to the home page</a>';
			}

			$content=ob_get_clean();
			require 'default.php';