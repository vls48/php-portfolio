<?php require_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	 <meta name="viewport" content="initial-scale=1.0, width=device-width" />

	<title>MEDIA</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
	<link rel="stylesheet" href="master.css">
	<link href="https://fonts.googleapis.com/css?family=Lato%7CPrata" rel="stylesheet">
	
</head>
<body>
	<div class="wrapper">
			<div class="row wrap-flex">
					<div class="child" id="child">

					<?php
						$query = "SELECT * FROM artwork";
					  	$result = mysqli_query($connection, $query);
						  // Check there are no errors with our SQL statement
						  if (!$result) {
					   	 die ("Database query failed.");
					  	}

					  	 while ($row = mysqli_fetch_assoc($result)){
					  	 	echo '<img src=';
					  	 	echo $row['file_path'];
					  	 	echo ' alt="';
					  	 	echo $row['description'];
					  	 	echo '" class="imagesize"> ';
					  	 }
          			?>

					</div>
					
					<div class="icon">	
						<img src="images/media/bannertrad.png" alt="title token" class="token" id="token">
					</div>
			</div>

			

			<div class="row-nav">
			<img src="images/general/menu.png" alt="menu" width="40" height="40" class="ham-menu">
			        <ul id="nav-list" class="visually-hidden">
			          <li><a href="index.html">HOME</a></li>
			          <li><a href="resume.html">RESUME</a></li>
			          <li><a href="media.html" class="active" >MEDIA</a></li>
			          <li><a href="contact.html">CONTACT</a></li>
			          <li id="nav-link"><a href="upcoming.html">UPCOMING</a></li>
			        </ul>
			</div>
	</div>

	<?php
    // Step 5: Close Database Connection
    mysqli_close($connection);
  	?>
	<script src="main.js"></script>
</body>
</html>