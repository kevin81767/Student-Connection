<?php
session_start();

// Verification of the session
include "include/Session.php";
//_______________________

//Verification: if the user entered something

if(!empty($_POST['Id_number']) AND ($_POST['Password']))
{	

	$Id_number=$_POST['Id_number'];
	$Password=sha1($_POST['Password']);
	$db=New Login('db_auca');
	$datas=$db->check_login($Id_number,$Password);
	
	if ($datas)
	{
		session_start();
		$_SESSION['Id_number']=$Id_number;
		$_SESSION['First_name']=$datas[0]->first_name;
		$_SESSION['Last_name']=$datas[0]->last_name;
		$_SESSION['Faculty']=$datas[0]->faculty;
		
		
		header("Location:login.php?p=welcome");
	}
	else
	{
			$report='Username or password are incorrect!!';
	}
}

?>
			<section>
				<article>
				<div class='register'>
				<?php
				if(isset($report))
				{
					echo "<div class='alert alert-danger' class='close' aria-label='close'><p>".$report."</p></div>";
				}
		
	else
	{
		$report="Username and password are empty";
		
	}
				
	//______________________________________________________________			
				?>
				
	<?php  ?> 		<br/>

					<form class ='login' class='form-group' action="index.php?p=home" method='post'>
						<label>ID number</label>:<input type='number'  name='Id_number' id='id' class='form-control' required />
						<label>Password</label>:<input type='password' size=8 name='Password' id='passw' class='form-control' required />
						<input type='submit' value='Sign up' class='btn btn-primary'/>
										
					</form>
				</div>
				</article>
				<aside>
					<div class='passforgot'>
						<h4 class="text-danger"> Forgot password??? Click <a class="text-info" href="#">here</a></h4>
					</div>
					<h5>You don't have an account?? click <a href='index.php?p=register'> Here </a></h5>
				</aside>
			</section>
