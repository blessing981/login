<?php include('server.php'); ?>
<!doctype html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="styles/form.css">
		<meta charset="utf-8">
	</head>
		<body>
		<div class="header">
		<h2>Register</h2>
		</div>
		<form id="form" method="post" action="register.php">
		<!--display validation errors here-->
		<?php include('errors.php'); ?>
			Full Name:
			<br>

			<input type="text" id="name" placeholder="Siyabonga Hlongwane" class="input-group">
			<br><br>

			Age:
			<br>
			
			<input type="number" id="age" value="16" class="input-group">
			<br><br>

			Username:
			<br>

			<input type="text and number" id="username" placeholder="user981" class="input-group">
			<br><br>

			Email: 
			<br>

			<input type="text" id="email" placeholder="bob@example.com" class="input-group">
			<br><br>


			Password:
			<br>

			<input type="password" id="password" placeholder="Password" class="input-group">
			<br><br>

			Confirm Password:
			<br>

			<input type="password" id="password2" placeholder="Confirm Password" class="input-group">
			<br>
			<br>
			<input type="button" id="button" onclick="submit()" value="REGISTER" class="btn"><br>
			Already a member? 
			<a href="login.php">Sign in.</a>
		</form>

		</body>
</html>