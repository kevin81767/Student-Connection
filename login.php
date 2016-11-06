<?php
			require 'class/Autoloader.php';
			Autoloader::register();

			if (isset($_GET['p']))
			{
				$p=$_GET['p'];
			}
			else
			{
				$p='welcome';
			}

			$db= New Database('db_auca');
			
			ob_start();

			if ($p ==='welcome')
			{
				require 'welcome.php';
			}
			elseif($p==='important')
			{
				require 'important.php';
			}
			elseif($p==='faculty')
			{
				require'faculty.php';
			}
			elseif($p==='user')
			{
				require 'user.php';
			}
			elseif($p==='comment')
			{
				require 'comment.php';
			}
			elseif($p==='myprofil')
			{
				require('profil.php');
			}
			elseif($p==='edit')
			{
				require'edit.php';
			}
			
			
			else
			{
				echo 'The page that you request does not exist!!!.';
				echo '<a href=\'index.php\'>Return to the home page</a>';
			}

			$content=ob_get_clean();
			require 'default2.php';