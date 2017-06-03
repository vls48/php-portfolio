<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="initial-scale=1.0, width=device-width" />

	<title>Add a photo</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
	<link rel="stylesheet" href="master.css">
	<link href="https://fonts.googleapis.com/css?family=Lato%7CPrata" rel="stylesheet">
</head>
<body class="wrapper wrap-flex add">

	<form action="insert.php" method="POST" enctype="multipart/form-data" class="contact-input add">

		File Path: <input type="text" name="file">
		Title: <input type="text" name="name">
		Description: <input type="text" name="description">

		<input type="submit" name="submit" class="append">
		
	</form>

	<?php include 'includes/nav.php';?>
	
</body>
</html>