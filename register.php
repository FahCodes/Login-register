<!DOCTYPE html>
<html lang ="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Animated Login Form</title>
		<link rel="stylesheet" href="register.css">
	</head>
	<body>
		<div class="center">
			<h1>Register</h1>
			<form method="post">
				<div class="txt_field">
					<input type="text" required>
					<span></span>
					<label>Username</label>
				</div>
				<div class="txt_field">
					<input type="password" required>
					<span></span>
					<label>Email</label>
				</div>
				<div class="txt_field">
					<input type="password" required>
					<span></span>
					<label>Password</label>
				</div>
				<div class="txt_field">
					<input type="password" required>
					<span></span>
					<label>Repeat Password</label>
				</div>
				<input type="submit" value="Register">
				<div class="signup_link">
					Already A Member? <a href="login.php">SignIn</a>
				</div>
			</form>
		</div>
	</body>
</html>