<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<link rel="stylesheet" href="style4.css">
	<div class="bg-img">
	
	<div class="container">
		
<?php
	session_start();
	echo "Name :->". $_SESSION['name'] ."<br> Roll no.-> ". $_SESSION['roll'] ."<br> pass->".$_SESSION['pass']."<br> sub->".$_SESSION['sub']."<br> assignment num->".$_SESSION['asgn'];
	//echo $_SESSION['pass'];
	//echo $_SESSION['sub'];
	//echo $_SESSION['asgn'];
	$conn = new mysqli("localhost","root","","tp");
	$result = mysqli_query($conn,"select tid from teacher where sub='".$_SESSION['sub']."'") or die("failed to query database".mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	$tid=$row['tid'];
	$sql_check="select * from a where id='".$_SESSION['roll']."' and tid='$tid' and num='".$_SESSION['asgn']."'";
	if($result1=mysqli_query($conn,$sql_check)){
		if(mysqli_num_rows($result1)==0){
			$sql="insert into a (id,tid,num,location,caption) values('".$_SESSION['roll']."','$tid','".$_SESSION['asgn']."','".$_SESSION['location']."','".$_SESSION['caption']."')";
			if (mysqli_query($conn, $sql)) {
		    	echo "<br>New record created successfully<br>";
			} else {
		 	   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
		else{
			echo "<br><br>ASSIGNMNET ALREADY SUBMITTED";
		}
	}
/*	$sql="insert into a (id,tid,num,location,caption) values('".$_SESSION['roll']."','$tid','".$_SESSION['asgn']."','".$_SESSION['location']."','".$_SESSION['caption']."')";
	if (mysqli_query($conn, $sql)) {
    	echo "<br><br>New record created successfully !";
	}*/ 
	else {
 	   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}



	

/*	$result=mysqli_query($conn,"select * from a where id='".$_SESSION['roll']."' group by tid");
	while($row = mysqli_fetch_assoc($result)) {
        echo "ASSIGNMNET " . $row["num"]. "<br>";
    }
*/


	mysqli_close($conn);
?>

</div>
<ul>


<li>
<div class="container1">
<form action="subject_student.php" method="POST" >
		<input type="submit" value="select subject" class="btn1">
</form>
</div>
</li>
<br><br>
<li>
<div class="container1">
<form action="start.php" method="POST" >
		<input type="submit" value="logout" class="btn1">
</form>
</div>
</li>
</ul>

</div>

</body>
</html>