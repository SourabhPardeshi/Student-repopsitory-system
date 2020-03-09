<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>something</title>
</head>
<body>
	<link rel="stylesheet" href="style2.css">
	<div class="bg-img">
	<div class="container">	
	Select 
	<?php
		$sub = $_POST["subject"];
		echo $sub;
		$_SESSION["sub"]=$sub;
	?> assignment !<br><br>
	<form method="post" action="final_student.php" id="form">
		
		<div class="box">
		<input type="radio" name="asgn" value="1" checked> ASSIGNMENT 1<br>
		</div>
		
		<div class="box">
		<input type="radio" name="asgn" value="2"> ASSIGNMENT 2<br>
		</div>
		
		<div class="box">
		<input type="radio" name="asgn" value="3"> ASSIGNMENT 3<br>
		</div>
	
		<input type ="submit" id="submit" class="btn">
		

	</form>
	</div>
</body>
</html>