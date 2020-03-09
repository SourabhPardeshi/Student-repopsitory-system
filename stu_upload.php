<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}

.container {
  position: absolute;
  margin: 225px;
  font-family: georgia,garamond,serif;
  border-style: outset;
  border-width: 5px;
  margin-right: 500px;
  margin-left: 600px;
  max-width: 400px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  padding: 10px;
  background-color: white;
}
.bg-img {
  /* The image used */
 background-image: url("login_back.jpg");

  /* Control the height of the image */
  height: 100%;
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#5e420c;
color: white;
font-size: 10px;
  font-weight: bold;
height: 34px;
}
#imagelist{
border: thin solid silver;
float:left;
padding:5px;
width:auto;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}
#caption{
margin-top: 5px;
}
img{
height: 225px;
}
-->
</style>

<div class="bg-img">
<div class="container">

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
 Select Image: <br />
 <input type="file" name="image" class="ed"><br />
 Caption<br />
 <input name="caption" type="text" class="ed" id="brnu" />
 <br />
 <input type="submit" name="Submit" value="Upload" id="button1" />
 </form>
 
</div>
</div>

<?php
  session_start();
  $asgn = $_POST["asgn"];
  $_SESSION["asgn"]=$asgn;
?>