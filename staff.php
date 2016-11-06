<?php
session_start();
include("include/Admin_Session.php");

if(!empty($_POST['username']) AND ($_POST['password']))
	
{
	$username=$_POST['username'];
    $password=$_POST['password'];
	
	if($username == 'staff' AND $password == 'staff' )
	{
		session_start();
		$_SESSION['username'] = $username;
		header("Location:admin.php?p=publication");
	}
	elseif($username == 'pastor' AND $password == 'pastor')
	{
		session_start();
		$_SESSION['username'] = $username;
		header("Location:admin.php?p=vof");
	}
	else
	{
		$report="Username or/and password are incorrect";
	}

}


?>
<section>
	<article>
		<?php 
		if (isset($report))
		{
			echo " <h3 class='alert alert-warning'>".$report."</h3>";
		}
		?>

<form action='admin.php?p=staff' method='POST'>
<label>Username</label>:<input type='text' name='username' class='form-control'/>
<label>Password</label>:<input type='password' name='password' class='form-control'/><br/>
<input type='submit' value='submit' class='btn btn-info'/>
</form>
</article>
</section>