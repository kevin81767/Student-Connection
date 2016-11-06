<?php
				require "class/VerseOfTheDay.php";

				$get=new VerseOfTheDay('db_auca');
				$line=$get->getVerse();
				
				if ($line)
				{
					$ligne=$line[0]->verse;
					echo "<div class='alert alert-success'>".$ligne."</div>";
				}
				?>