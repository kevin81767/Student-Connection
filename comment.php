<?php
session_start();
include "include/Session1.php";
//____________________________
// Send the comment in the Database__<
if(isset($_POST['comment']))
{
	if(!empty($_POST['comment']))
	{
		$id_publication=$_GET['c'];
		$first_name=$_SESSION['First_name'];
		$last_name=$_SESSION['Last_name'];
		$faculty=$_SESSION['Faculty'];
		$id_number=$_SESSION['Id_number'];
		$comment=$_POST['comment'];
		
		$insert=New Comment('db_auca');
		$send=$insert->insert_comment($id_publication,$first_name,$last_name,$id_number,$faculty,$comment);
		if($send)
		{
			
			echo "<div class='alert alert-success'>Comment online</div>";
		}
		else
		{
			echo 'Comment not online';
		}
		
	}
	else
	{
		echo'<div class=\'alert alert-danger\'>Your comment is empty</div>'; 
	}
//___Send the comment in the Database__>
}
$db=New Student_Pub('db_auca');
if (isset($_GET['c'] ))
{
	$id=$_GET['c'];
	$pub=$db->get_one_pub($id);
	if($pub) //get the post which they want to comment
	{
		$id=$pub[0]->id;
		$name=$pub[0]->first_name;
		$post=$pub[0]->publication;
		$date=$pub[0]->date; ?>
		<div class='alert alert-info'>
				<h3><a href="#"><?=$name; ?></a></h3>
				<p><?=$post;?></p>
				<br/>
				<p class='text-success'><small><em><?=$date;?></em></small></p>
		</div>
		<?php	
	}
}
else
{
	header("Location:login.php?p=welcome");
}


?>

		<form class='form-group' action='login.php?p=comment&amp;c=<?=$_GET['c'];?>' method='POST'>
		<textarea class='form-control' name='comment' cols='50'></textarea>
		<input type='submit' value='comment' class='btn btn-default'/>
		</form>
	
	
		<?php
		//Get all the comment about this post
		$comm=New Comment('db_auca');
		$get=$comm->get_comment($id);
		if ($get)
		{
			?><div class='position:center'><?php
			foreach($get as $co): //__$co is like commentary
			?>

				<div class='alert alert-info'>
					<h4><a href="login.php?p=user&amp;id=<?=$id;?>"><?=$co->first_name;?></a></h4>
					<p><?=$co->comment;?></p>
					<br/>
					<p class='text-success'><small><em><?=$co->date;?></em></small></p>
				</div>
			<?php
			endforeach;
			?></div><?php
		}
