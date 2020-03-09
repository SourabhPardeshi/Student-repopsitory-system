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
	$asgn = $_POST["asgn"];
	$_SESSION["t_asgn"]=$asgn;
	$conn = new mysqli("localhost","root","","tp");
	$result = mysqli_query($conn,"select id from a where tid='".$_SESSION['t_id']."' and num='".$_SESSION['t_asgn']."' ") or die("failed to query database".mysqli_error($conn));
//	$row = mysqli_fetch_array($result);
	echo "STUDENTS WHO SUBMITTED ASSIGNMENT:<br><br>";
	while($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $stu_info= mysqli_query($conn,"select * from student where id=$id");
        $row1 = mysqli_fetch_array($stu_info);
        echo "ROLL NO:" . $row1["id"]. " - Name: " . $row1["name"]. "<br>";
    }
    echo "<br><br>";

    echo " NO. OF STUDENTS WHO SUBMITTED ASSIGNMENT: ";
    $result1 = mysqli_query($conn,"select count(*) as submitted from a where tid='".$_SESSION['t_id']."' and num='".$_SESSION['t_asgn']."' ") or die("failed to query database".mysqli_error($conn)); 
    $submitted=mysqli_fetch_assoc($result1); 
    echo $submitted['submitted'];

    echo "<br><br><br>";

    $result1 = mysqli_query($conn,"select * from a where tid='".$_SESSION['t_id']."' and num='".$_SESSION['t_asgn']."'");
    while($row = mysqli_fetch_array($result1))
    {
        echo '<div id="imagelist">';
        echo '<p><img src="'.$row['location'].'"></p>';
        echo '<a href="'.$row['location'].'"><p id="caption">'.$row['caption'].' </p></a>';
        echo '</div>';
    }
    mysqli_close($conn);
?>


</div>
<div class="container1">
<form action="start.php" method="POST" >
        <input type="submit" value="logout" class="btn1">
</form>
</div>
<br><br>
<div class="container1">
<form action="assign_teacher.php" method="POST" >
        <input type="submit" value="Select Assignment" class="btn1">
</form>
</div>
</div>
</body>
</html>