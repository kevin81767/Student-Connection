<?php
session_start();
include "include/Session1.php";
//__________________________________
if (isset($_GET['u']))
{
	if ($_GET['u'] === 'first_name')
	{
		$change=$_GET['u'];
		?>
		<form action='login.php?p=edit&amp;u=first_name' method='post' class='form-group'>
			<p>Your current first name is <strong><?=$_SESSION['First_name'];?></strong> </p>
			<input type='text' name='first_name' class='form-control'/>
			<input type='submit' value='Change it' class='btn btn-warning'/>
		</form>
		<?php
		if(isset($_POST['first_name']))
		{
			$first_name=$_POST['first_name'];
			$datas=New Edit('db_auca');
			$up=$datas->update_first_name($first_name);
		}
	}
}
//-----------------------------------
if(isset($_GET['id']))
{
	if (isset($_POST['post']))
	{
		$thepost=$_POST['post'];
		$id=$_GET['id'];
		$dab=New Edit('db_auca');
		$data=$dab->update_post($id,$thepost);
		if($data)
		{
			echo"<div class='alert alert-success'>
			<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
			<strong>Post well modified</strong></div>";
		}
	}
	$id=$_GET['id'];
	var_dump($id);
	$db=New Student_pub('db_auca');
	$datas=$db->get_one_pub($id);
	if ($datas)
	{
		foreach($datas as $post):
		//select the post
		?>
		<form action='login.php?p=edit&id=<?=$_GET['id'];?>' method='post'>
			<textarea name='post' class='form-control' cols='50'>
				<?=$post->publication;?>
			</textarea>
			<input type='submit' value='submit' class='btn btn-info'/>
		</form>  <?php
		endforeach;
	}
}
else
{
	header("Location:login.php?p=profil");
}

?>