<?php
	session_start();
	require_once('connection.php');
	if(isset($_POST['SignUp']))
	{
		if(empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['User']))
		{
			header("location:Homepage.php?empty=Please Fill in the Blanks");
		}
		else
		{
			$uname = $_POST["User"];
			$pass = password_hash($_POST["pass"],PASSWORD_BCRYPT);
			$email = $_POST["email"];
			$query = "insert into users(Username,Password,Email) VALUES ('$uname','$pass','$email')";
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
	}
	
	

?>













