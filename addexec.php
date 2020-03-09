<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp";

//$conn = new mysqli($servername, $username, $password,$dbname);


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location = "photos/" . $_FILES["image"]["name"];
			$location_file=$_FILES["image"]["name"];
			$caption = $_POST['caption'];
			$_SESSION['location']=$location;
			$_SESSION['caption']=$caption;
			$_SESSION['file']=$location_file;
		//	$_POST['sub_id']=$_SESSION['sub'];
		//	$_POST['ass_id']=$_SESSION['asgn'];
		//	$save = mysqli_query($conn,"INSERT INTO photos (location, caption) VALUES ('$location','$caption')");
			header("location: final_student.php");
			exit();					
	}
?>
