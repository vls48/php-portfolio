<?php require_once 'includes/config.php'; ?>

<?php

						header('Refresh: 2; url=media.php');

						$query = "SELECT * FROM artwork";
					  	$result = mysqli_query($connection, $query);
						  // Check there are no errors with our SQL statement
						  if (!$result) {
					   	 die ("Database query failed.");
					  	}

					  	$File = $_POST['file'];
					  	$Title = $_POST['name'];
					  	$Desc = $_POST['description'];

					  	$sql = "INSERT INTO artwork (name, file_path, description) values ('$Title', '$File', '$Desc')";

						if (!mysqli_query($connection,$sql))
						{
						 echo 'Not Inserted';
						}

						else
						{
						 echo 'Inserted Successfully';
						}
?>

