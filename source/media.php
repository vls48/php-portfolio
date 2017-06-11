<?php require_once 'includes/config.php'; ?>
<?php include 'includes/header.php';?>
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
					  	 	echo '<a href="large.php?id=';
					  	 	echo $row['id'];
					  	 	echo '"> ';
					  	 	echo '<img src=';
					  	 	echo $row['file_path'];
					  	 	echo ' alt="';
					  	 	echo $row['description'];
					  	 	echo '" class="imagesize"> ';
					  	 	echo '</a>';
					  	 }
          			?>

					</div>
					
					<div class="icon">	
						<img src="images/media/bannertrad.png" alt="title token" class="token" id="token">
					</div>
			</div>

			

			<?php include 'includes/nav.php';?>
	</div>

	<?php
    // Step 5: Close Database Connection
    mysqli_close($connection);
  	?>
  	
		<?php include 'includes/footer.php';?>