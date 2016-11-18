<?php
session_start();
include "include/Session1.php";
//_____________________________
?>
<?php
if(isset ($_GET['id']))
{
	?>
	<div class='alert alert-warning'>
	<?php
	$id=$_GET['id'];
	$db=New Student_Pub('db_auca');
	$result=$db->get_one_pub($id);


	if ($result)
	{
		$first_name=$result[0]->first_name;
		$id_number=$result[0]->id_number;

		/*Calling the class Everything who show everything about a student based on his first name and id number.*/

		$datas=New Everything('db_auca');
		$resu=$datas->every($first_name,$id_number);
		if($resu)
		{
			$f_name=$resu[0]->first_name;
			$l_name=$resu[0]->last_name;
			$idnumber=$resu[0]->id_number;
			$sem=$resu[0]->semester;
			$faculty=$resu[0]->faculty;
			$avatar=$resu[0]->avatar;

			/*All information of the user*/

			?><div class='info'>
				<div class='alert alert-warning'>
					<div class='row'>
						<div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>

							<p><h2>First name: <?=$f_name;?></h2></p>
							<p><h2>Last name: <?=$l_name;?></h2></p>
							<p><h2>Id number: <?=$idnumber;?></h2></p>
							<p><h2>Faculty: <?=$faculty;?></h2></p>
							<p><h2>Semester: <a href='#'><?=$sem;?></a></h2></p>
						</div>

						<?php 
						if($avatar)
						{
							$avatar_pic=$avatar;

						?>	
						
							<div class='col-lg-4 col-md-4 col-sm-4'>
										<img src='uploads/<?=$avatar;?>' class='img-circle' alt='avatar' id='avatar_pic' width=200 height=200/>
									<?php
							}
									else
									{
										?>
									<img src='images.jpg' alt='avatar' class='img-circle' id='avatar_pic' width=200 height=200/>
									<?php


									}?>
								</div>
						</div>
					</div>
				</div><br/>
			<?php

			/*Get all the post from the user*/
			$dats=New Student_Pub('db_auca');
			$pub=$dats->my_pub($f_name,$l_name,$idnumber);
	
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

				<?php
				if($post->first_name == $_SESSION['First_name'])
				{ ?>
					<a href="login.php?p=edit&amp&id=<?=$post->id;?>">
				<button class="btn btn-warning btn-xs">
					<span class="glyphicon glyphicon-edit"> edit </span>
				</button>
				</a><?php
				}
			?>
			</p>
		</div>
	<?php
	endforeach;
	
	}




}
else
{
	echo "The page does not exist";
}


}
}