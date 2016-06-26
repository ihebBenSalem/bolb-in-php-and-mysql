<!--
This application developed by ibsSOFT @NODEME blog
visit http://nodeme.blogspot.com
@ihebBenSalem
-->
<!DOCTYPE html>
<html lang="EN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Upload</title>

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

<center>


<form action="insert.php" method="POST" role="form" enctype = "multipart/form-data">
	<legend>Upload files</legend>

<label class="btn btn-default btn-file">
    Browse <input type="file" name="myfile">
</label>

	<button type="submit" class="btn btn-danger">Upload</button>
</form><br>
<a href="show.php">Show upload file list</a>
</center>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>