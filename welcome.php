<?php
session_start();
include "include/Session1.php";

//________________________________

//___About the publication_____

if (isset($_POST['publication']))
{
	if (!empty($_POST['publication']))
	{
		
		$publication=$_POST['publication'];
		$F_name=$_SESSION['First_name'];
		$L_name=$_SESSION['Last_name'];
		$Faculty=$_SESSION['Faculty'];
		$Id_number=$_SESSION['Id_number'];
		require "class/Student_Pub.php";
		$db=new Student_Pub('db_auca');
		$datas=$db->insert_student_pub($F_name,$L_name,$Id_number,$Faculty,$publication);
	//###############################################
			if ($datas)
			{
				$report="your publication is online";
			}

			$dat=New Database('db_auca');
			$dte=$dat->GetDate();
			var_dump($dte);
			echo"<div class='alert alert-danger'>".$dte."</div>";
	
	}
		else
		{
			$report="Your publication is empty";
		}
}
   //___________END of "About the publication"_______________
	if(isset($report))
		{
			echo "<div class='alert alert-warning'>".$report."</div>";
		}
?>
	<form class='form-group' action='login.php?p=welcome' method='POST'>
		<textarea name='publication' cols='100' rows='10' class='form-control' id='textar'>#Auca</textarea>
		<br /><input type='submit' value='submit' class='btn btn-info'>
	</form>
<?php

//_______________gET LAST IMPORTANT POST of THE STAFF__________________

$kev=New Staff_Pub('db_auca');
$dat=$kev->get_staff_one();

if($dat)  //  $dat select everything in the database
{
	$staff=$dat[0]->post;
	$concerned=$dat[0]->faculty;
	$publ=$dat[0]->publication;
	echo "<div class='alert alert-danger'><h5 class='text-info'><h3>".$staff."</h3></h5><p><em><strong>TO :".$concerned."</strong></em></p><div class='alert alert-warning'><h4>".$publ."</h4></div></div>";
}

//________About the :get the publication______________
$db=New Student_Pub('db_auca');

//________________________________

//_______________
$nbre_pub=$db->nbre_pub(); //total of post in the Database


$perpage=10; //number of post per page=10
$nbre_page=ceil($nbre_pub/$perpage);
if(isset($_GET['s']) && $_GET['s'] > 0 && $_GET['s'] <= $nbre_page)
{
	$cpage=$_GET['s'];
}
else
{
	$cpage=1;
}
$pub=$db->get_Pub($cpage,$perpage);

if($pub)
{
	foreach($pub as $post):
				//Get number of comments on a post
				$number=New Comment('db_auca');
				$post_id=$post->id;
				$numbers=$number->nbre_comment($post_id); //the number of comment on each post
			?>
		
		<div class='alert alert-info'>
			<h3><a href="login.php?p=user&amp;id=<?=$post->id;?>"><?=$post->first_name; ?></a></h3>
			<p><?=$post->publication;?></p>
			<br/>
			<p class='text-success'><small><em><?=$post->date;?></em></small></p>
			<p><a href="login.php?p=comment&amp;c=<?=$post->id;?>">
				<button class="btn btn-primary btn-md">
					<span class="glyphicon glyphicon-comment"> Comments <span class='badge'><?=$numbers;?></span></span>
				</button>
				</a>
			</p>
		</div>
	<?php
	endforeach;
	
	for($i=1;$i<=$nbre_page;$i++) //Number of page 
	{
		?>
		<ul class='pagination'>
			<li><a href="login.php?p=welcome&amp;s=<?=$i;?>"><?=$i;?></a></li>
		</ul>
		<?php
	}
}
?>


