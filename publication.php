<?php
//____________________________________________________________
session_start();
include("include/Admin_Session1.php");
//________________________________________________________________
?>

<div class='verse'>
<?php
				require "class/VerseOfTheDay.php";
				$gt=new VerseOfTheDay('db_auca');
				$lin=$gt->getVerse();
				
				if ($lin)
				{
					$lign=$lin[0]->verse;
					echo "<div class='alert alert-success'>".$lign."</div>";
				}
?>
</div>
<?php
//_____//________________________________________________________________
				
				
				
if(!empty($_POST['post']) AND ($_POST['publication']))
{
	$post=$_POST['post'];
	$faculty=$_POST['faculty'];
	$publication=$_POST['publication'];
	require 'class/Staff_Pub.php';
	
	$pub=New Staff_Pub('db_auca');
	$get=$pub->insert_staff_pub($post,$faculty,$publication);
	
	if ($get)
	{
		$report='Your publication is online';
	}
	else
	{
		$report='Complete all the field below';
	}
}
?>
		<form  class='form-group' action='admin.php?p=publication' method='POST'>
			<?php
			if(isset($report))
					{
						echo "<div class='alert alert-warning'>".$report."</div>";
					}
			?>
			<label>This publication is from</label>:<input type='text' name='post' class='form-control' required />
			<label>This publication is for</label>:<select name='faculty' class='form-control' >
																			<option value ='All'> All </option>
																			<option value='Information technology'>Information technology</option>
																			<option value='Business'>Business administration</option>
																			<option value='Accounting'>Accounting</option>
																			<option value='Finance'>Finance</option>
																			<option value='Theology'>Theology</option>
																			<option value='Education'>Education</option>
																		   </select>
			<label>Write the publication here</label>:<textarea name='publication' cols='50' rows='20' class='form-control' required ></textarea><br/>
			<input type='submit' value='Submit' class='btn btn-info'/>
		</form>
	
