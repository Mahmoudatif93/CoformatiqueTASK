
<!DOCTYPE html>
<html>
<head>

	<title>Create New Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comatible" content="IE=edge">
	<meta name="viewport" content="width=device.width, initial-scale-1">
	<link rel="stylesheet" type="text/css" href="singup.css">
</head>
<body>
	<div class="signup-form">
		<form action="InsertUser.php" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p>Sign Up to Start chating.</p>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" autocomplete="off"  type="text" name="Username" placeholder="Type Your Name">
			 </div>

			<div class="form-group">
				<label>Email Address</label>
				<input class="form-control" autocomplete="off"  type="email" name="UserEmail" placeholder="someone@site.com">
			 </div>


			 <div class="form-group">
				<label>Password</label>
				<input class="form-control" autocomplete="off"  type="password" name="Userpassword" placeholder="password">
			 </div>

				

			 <div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" >I accept the <a href="#">Terms of Use</a>&amp;<a href="#">Privacy Policy</a></label>

			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
			</div>
			
		</form>
		<div class="small text-center " style="color: #67428b;">Already have account?<a href="index.php">SignIn here</a></div>
	</div>



</body>
</html>
