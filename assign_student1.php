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
	
	<form method="post" action="stu_upload.php" id="form">
		<div class="box">
		<input type="radio" name="asgn" value="<?php echo $asgn='1'; ?>" id="ass1" checked> ASSIGNMENT 1<br>
		</div>
	
		
		<div class="box">
		<input type="radio" name="asgn" value="<?php echo $asgn='2'; ?>" id="ass2"> ASSIGNMENT 2<br>
		</div>

		<div class="box">
		<input type="radio" name="asgn" value="<?php echo $asgn='3'; ?>" id="ass3"> ASSIGNMENT 3<br>
		</div> 
	

		<input type ="submit" id="submit" class="btn"> 		

	</form>
	
<div class="box">
<?php

	echo "<br><br> SUBMISSION SUMMARY :<br><br>";
	$conn = new mysqli("localhost","root","","tp");
	$result = mysqli_query($conn,"select tid from teacher where sub='".$_SESSION['sub']."'") or die("failed to query database".mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	$tid=$row['tid'];
	$sql_check="select num from a where id='".$_SESSION['roll']."' and tid='$tid'";
	$result=mysqli_query($conn,$sql_check);
	while($row = mysqli_fetch_assoc($result)) {
        echo "ASSIGNMNET " . $row["num"]. "<br>";
    }

    mysqli_close($conn);
?>
</div>
</div>
</div>

</body>
</html>
