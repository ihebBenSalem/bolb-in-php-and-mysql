<?php
/*
This application developed by ibsSOFT @NODEME blog
visit http://nodeme.blogspot.com
@ihebBenSalem
*/
require("config.php");
if (isset($_GET["id"]) and !empty($_GET["id"])) {
	# code...
$id=$_GET["id"];
if ($id<=0) { //check the id is valid
	# code...
	die("Error in id ! try again");
}
		$con=new mysqli(host,username,password,db) or die(" Can not connect to db ! ");
		$result=$con->query(" SELECT file_id,  `mime` ,  `name` ,  `size` ,  `data` FROM  `file_upload` WHERE  `file_id` ='$id'  ");


		 if($result) {
            // Make sure the result is valid
            if($result->num_rows == 1) {
            // Get the row
                $row = mysqli_fetch_assoc($result);
 
                // Print headers
                header("Content-Type: ". $row['mime']);
                header("Content-Length: ". $row['size']);
                header("Content-Disposition: attachment; filename=". $row['name']);
 
                // Print data
                ob_clean();
                flush();
                echo $row['data'];
            }
        }
}
?>