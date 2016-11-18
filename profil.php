<?php
session_start();
include "include/Session1.php";
//___________________
?>
<?php 
//Profile picture test
$dat=New Everything('db_auca');
$first_name=$_SESSION['First_name'];
$id_number=$_SESSION['Id_number'];
$take=$dat->every($first_name,$id_number);

?>
<div class='alert alert-warning'>
	<div class='row'>
		<div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>

			<p><h2>First name: <?=$_SESSION['First_name'];?></h2></p>
			<p><h2>Last name: <?=$_SESSION['Last_name'];?></h2></p>
			<p><h2>Id number: <?=$_SESSION['Id_number'];?></h2></p>
			<p><h2>Faculty: <a href='login.php?p=faculty'><?=$_SESSION['Faculty'];?></a></h2></p>
			<p><h2>Semester: <a href='#'><?=$take[0]->semester;?></a></h2></p>
		</div>			<?php 
			if($take[0]->avatar)
			{
				$avatar_pic=$take[0]->avatar;

			?><div class='col-lg-4 col-md-4 col-sm-4'>

				<img src='uploads/<?=$avatar_pic;?>' class='thumbnail thumbnail-responsive' alt='avatar' id='avatar_pic' width=200 height=200/>
				<?php
				}
				else
				{
					?>
				<div class='col-lg-4 col-md-4 col-sm-4'>
				<img src='images.jpg' class='thumbnail thumbnail-responsive' alt='avatar' id='avatar_pic' width=200 height=200/>
				<?php
				}
				?>
					<!-- upload avatar form -->
					<form class='form-group' action='login.php?p=myprofil' method='post' enctype="multipart/form-data">
						<label class='alert alert-info alert-sm'>Change the profile's picture</label>:<input type='file' name='picture'/>
						<button class='btn btn-warning btn-xs' type="submit" value="upload"><span class='glyphicon glyphicon-upload'>upload</span></button>
					</form>
			</div>
			</div>


				<!--Avatar upload script-->
					<?php include ("portions/avatar_upload.php");?>  
			<button type='submit' class='btn btn-info btn-lg btn-block'>Edit my profil</button>
	</div>
</div>

<div class='my_profil'>
	<?php
	$datas=New Student_Pub('db_auca');
	$first_name=$_SESSION['First_name'];
	$last_name=$_SESSION['Last_name'];
	$id_number=$_SESSION['Id_number'];
	$pub=$datas->my_pub($first_name,$last_name,$id_number);
	
	if ($pub)
	{
		foreach($pub as $post):
				//Get number of comments on a post
				$number=New Comment('db_auca');
				$post_id=$post->id;
				$numbers=$number->nbre_comment($post_id); //the number of comment on each post
			?>
		
		<div class='alert alert-info'>
			<h3><a href="#"><?=$post->first_name; ?></a></h3>
			<p><?=$post->publication;?></p>
			<br/>
			<p class='text-success'><small><em><?=$post->date;?></em></small></p>
			<p><a href="login.php?p=comment&amp;c=<?=$post->id;?>">
				<button class="btn btn-primary btn-md">
					<span class="glyphicon glyphicon-comment"> Comments <span class='badge'><?=$numbers;?></span></span>
				</button>
				</a>
				<!--the button edit to modify the post -->
				<a href="login.php?p=edit&amp&id=<?=$post->id;?>">
				<button class="btn btn-warning btn-xs">
					<span class="glyphicon glyphicon-edit"> edit </span>
				</button>
				</a>
				
			</p>
		</div>
	<?php
	endforeach;
	
	}

?>