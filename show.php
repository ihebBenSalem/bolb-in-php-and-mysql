<?php
/*
This application developed by ibsSOFT @NODEME blog
visit http://nodeme.blogspot.com
@ihebBenSalem
*/
require("config.php"); 
$con=new mysqli(host,username,password,db);
     if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
     $qy=$con->query(" SELECT * FROM `file_upload` order by date DESC;");
?>

<!DOCTYPE html>
<html lang="EN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Show</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
<div class="well well-lg"><center><h3>	Files List</h3></center> </div>
<a class="btn btn-default btn-block" href="index.php" role="button">Upload more files</a>

<table class="table table-hover">
	<thead>
		<tr>
			<th>#id</th>
			<th>#Name</th>
			<th>#Mime</th>
			<th>#size
</th>
			<th>#Extension</th>
			<th>#Download</th>
			<th>#Date</th>
		</tr>
	</thead>
	<tbody>

<?php
$counter=0;
while ($rs=$qy->fetch_array()) {
	# code...
	$counter++;
	echo '<tr>
	<td>'.$counter.'</td>
	<td>'.$rs[1].'</td>
	<td>'.$rs[2].'</td>
	<td>'.$rs[3].'</td>
	<td>'.$rs[5].'</td>
	<td>'.$rs[6].'</td>
	<td><a href="download.php?id='.$rs[0].'">Download</a>
	</td>
	</tr>';
}

?>	
	</tbody>
</table>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>