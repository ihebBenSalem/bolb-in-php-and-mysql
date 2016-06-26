<?php
/*
This application developed by ibsSOFT @NODEME blog
visit http://nodeme.blogspot.com
@ihebBenSalem
*/
require("config.php");
if (isset($_FILES["myfile"])) {
$error=$_FILES["myfile"]["error"];

if ($error ==0) {
	# code...
	$db_link=mysqli_connect(host,username,password,db) or die("Can not connect to db !");

     if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }

}

$name = mysqli_real_escape_string($db_link,$_FILES['myfile']['name']);
$extension = strtolower(substr($name, strpos($name, '.') + 1));
$tmp_name = mysqli_real_escape_string($db_link,$_FILES['myfile']['tmp_name']);
$type = mysqli_real_escape_string($db_link,$_FILES['myfile']['type']);
$size = mysqli_real_escape_string($db_link,$_FILES['myfile']['size']);
$data=mysqli_real_escape_string($db_link,file_get_contents($tmp_name));


$sql="INSERT INTO file_upload (name,mime, size,ext,data) VALUES ('$name','$type','$size','$extension','$data')";

if (!mysqli_query($db_link,$sql)) {
  die('Error: ' . mysqli_error($con));
}
else
{
header("location:show.php");
}
}
?>
