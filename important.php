<?php
session_start();
include "include/Session1.php";
//_____________________________
?>

<h2>Important staff's post</h2>

<?php

require "class/Staff_Pub.php";
$db=New Staff_Pub('db_auca');
$nbre_pub=$db->nbre_staff_pub();
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

$pub=$db->get_Pub_staff($cpage,$perpage);
if ($pub)
{
	foreach($pub as $post):
	?>
	<div class='alert alert-warning'>
	<h3><?=$post->post;?>, <em><?=$post->faculty;?></em></h3>
	<p><?=$post->publication;?></p>
	<em><?=$post->date;?></em>
	</div>
	<?php
	endforeach;
	
	for($i=1;$i<=$nbrepage;$i++)
	{
		?>
		<ul class='pagination'>
			<li><a href="login.php?p=important&amp;s=<?=$i;?>"><?=$i;?></a></li>
		</ul>
		<?php
	}
	
}