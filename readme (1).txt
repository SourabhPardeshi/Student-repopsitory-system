final_student && final_teacher && chechk_student && check_teacher= style3.css
login_student && login_teacher = style.css
assign_student && assign_teacher && sub_student = style2.css
start = style.css



<?php
  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Connection failed! " . $conn->connect_error);
  }
  else{
  echo "Connected successfully !";
  }


$result = mysqli_query($conn,'SELECT * From photos');
while($row = mysqli_fetch_array($result))
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'"></p>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '</div>';
}
?>