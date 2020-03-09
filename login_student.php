<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<link rel="stylesheet" href="style.css">
	<div class="bg-img">
	<div class="container">	
	<form action="check_student.php" method="POST">
		<p>
			<label>ROLL NO:</label>
			<input type="text" id="user" name="user" required />
		</p>
		<p>
			<label>PASSWORD:</label>
			<input type="PASSWORD" id="pass" name="pass" required />	
		</p>
		<p>
			<input type="submit" value="Login" class="btn">
		</p>
	</form>
	</div>
	</div>
</body>
</html>