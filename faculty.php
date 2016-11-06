<?php
session_start();
include "include/Session1.php";
//________________________

require "class/Student_Pub.php";
$db=New Student_Pub('db_auca');
$faculty=$_SESSION['Faculty'];
$nbre_pub=$db->nbre_pub_fac($faculty);
$perpage=10;
$nbrepage=ceil($nbre_pub/$perpage);

if(isset($_GET['s']) && $_GET['s'] > 0 && $_GET['s'] <= $nbre_page)
{
	$cpage=$_GET['s'];
}
else
{
	$cpage=1;
}
$pub=$db->get_fac_pub($faculty,$cpage,$perpage);
if ($pub)
{
	foreach($pub as $post):
		$number=New Comment('db_auca');
				$post_id=$post->id;
				$numbers=$number->nbre_comment($post_id); //the number of comment on each post
	
		?>
			<div class='alert alert-info'>
				<h3><a href="#"><?=$post->first_name; ?></a></h3>
				<p><?=$post->publication;?></p>
				<p><?=$post->date;?></p>
				<p>
					<a href="login.php?p=comment&amp;c=<?=$post->id;?>">
						<button class="btn btn-primary btn-md">
							<span class="glyphicon glyphicon-comment"> Comments <span class='badge'><?=$numbers;?></span></span>
						</button>
					</a>
				</p>
			</div>
		<?php 
		endforeach;
	
}
	for($i=1;$i<=$nbrepage;$i++)
	{
		?>
		<ul class='pagination'>
			<li><a href="login.php?p=faculty&amp;s=<?=$i;?>"><?=$i;?></a></li>
		</ul>
		<?php
	}


