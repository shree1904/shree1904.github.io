<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fontAwesome -->
    <script src="https://kit.fontawesome.com/f237bf30a2.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- style -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<?php
			if(@$_GET['empty']==true)
			{
		?>
		<div class="alert-light text-danger text-center py-1"><?php echo $_GET['empty']?></div>
		
	    <?php
			}
		?>
		
		<?php
			if(@$_GET['Invalid']==true)
			{
		?>
		<div class="alert-light text-danger text-center py-1"><?php echo $_GET['Invalid']?></div>
		
	    <?php
			}
		?>
		
		<form action="send1.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="User" placeholder="Name" />
			<input type="email" name="email"placeholder="Email" />
			<input type="password" name="pass" placeholder="Password" />
			<button name="SignUp">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<?php
			if(@$_GET['empty']==true)
			{
		?>
		<div class="alert-light text-danger text-center py-1"><?php echo $_GET['empty']?></div>
		
	    <?php
			}
		?>
		
		<?php
			if(@$_GET['Invalid']==true)
			{
		?>
		<div class="alert-light text-danger text-center py-1"><?php echo $_GET['Invalid']?></div>
		
	    <?php
			}
		?>
	
		<form action="send.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email"  name="email" placeholder="Email" />
			<input type="password" name="pass" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button name="SignIn">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by Shrinidhi Gawande
	</p>
</footer>
<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>
</body>
</html>