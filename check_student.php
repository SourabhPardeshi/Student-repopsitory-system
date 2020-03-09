<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
</head>
<body>
    <link rel="stylesheet" href="style3.css">
    <div class="bg-img">
    
    <div class="container">
<?php
	session_start();
	$username=$_POST['user'];
	$password=$_POST['pass'];

/*	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
*/
/*	mysql_connect("localhost","root","");
	mysql_select_db("tp");

	$result = mysql_query("select * from student where id='$username' and pass='$password'") or die("failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['id']== $username && $row['pass']== $password){
		echo "Welcome ".$row['name'];
	}
	else{
		echo "falied to login";
	}
	*/
	$conn = new mysqli("localhost","root","","tp");
	$result = mysqli_query($conn,"select * from student where id='$username' and pass='$password'") or die("failed to query database".mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if ($row['id']== $username && $row['pass']== $password){
		echo "Welcome ".$row['name'] ;
		$temp=$row['name'];
		//header( "location:student1.php");
		echo " !<br>";
		echo ' Press<a href="http://localhost/project_ak/subject_student.php"> next!</a> ';
	}
	else{
		echo "falied to login";
	}
	$_SESSION['roll']=$_POST['user'];
	$_SESSION['pass']=$_POST['pass'];
	$_SESSION['name']=$temp;
?>



</div>
</div>
</body>
</html>