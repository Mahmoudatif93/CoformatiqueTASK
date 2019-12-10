<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comatible" content="IE=edge">
	<meta name="viewport" content="width=device.width, initial-scale-1">
	<link rel="stylesheet" type="text/css" href="singin.css">
</head>
<body>
	<div class="signin-form">
			<h1 style="text-align: center;">Welcome to MyChat </h1>
		<form action="userlogin.php" method="POST">
			<div class="form-header">
				<h2>Sign IN </h2>
				<p>Login to mychat</p>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" autocomplete="off"  type="Email" name="UserEmailLogin" placeholder="someone@site.com">
			 </div>
	
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" autocomplete="off"  type="password" name="UserPasswordLogin" placeholder="password">
			 </div>
			 <div class="small"> Forget Password?<a href="#">Click here</a></div><br>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
			</div>

			<?php if (isset($_GET['error'])) {?>
					<div><span style="color: red;">Chcek Your Email Or Password</span></div>
				<?php } ?>

		</form>
		<div class="small text-center " style="color: #67428b;">Don't have an account?<a href="signup.php">Create Account</a></div>
	</div>



</body>
</html>