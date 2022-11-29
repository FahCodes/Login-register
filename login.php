<!DOCTYPE html>
<html lang ="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Animated Login Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="center">
			<h1>Login</h1>
			<form method="post">
				<div class="txt_field">
					<input type="text" required>
					<span></span>
					<label>Username</label>
				</div>
				<div class="txt_field">
					<input type="password" required>
					<span></span>
					<label>Password</label>
				</div>
				<div class="pass"><a href="forgot.php">Forgot Password?</div>
				<input type="submit" value="Login">
				<div class="signup_link">
					<p style="color: #111111;">Not A Member? <a href="register.php">SignUp</a></p>
				</div>
			</form>
		</div>
	</body>
</html>