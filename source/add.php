<?php include 'includes/header.php';?>
<body class="wrapper wrap-flex add">

	<form action="insert.php" method="POST" enctype="multipart/form-data" class="contact-input add">

		File Path: <input type="text" name="file">
		Title: <input type="text" name="name">
		Description: <input type="text" name="description">

		<input type="submit" name="submit" class="append">
		
	</form>

	<?php include 'includes/nav.php';?>
	<?php include 'includes/footer.php';?>