<?php
	session_start();
	require_once('connection.php');
	if(isset($_POST['SignIn']))
	{
		if(empty($_POST['email']) || empty($_POST['pass']))
		{
			header("location:Homepage.php?empty=Please Fill in the Blanks");
		}
		else
		{
			$pass1 = password_hash($_POST['pass'],PASSWORD_BCRYPT);
			if(password_verify($_POST["pass"],$pass1))
			{
				$query = "select * from users where email='".$_POST['email']."' and password = '".$pass1."'  ";
				$result = mysqli_query($con,$query);
				if($result)
				{
					$_SESSION['user']= $_POST['email'];
					header("location:Welcome.php");
				}
				else
				{
					header("location:Homepage.php?Invalid=Please check your details");
				}
			}
			else{
				echo 'not valid';
			}
		}	
	}
	else
	{
		echo ' not working';
	}
	
	
	

?>