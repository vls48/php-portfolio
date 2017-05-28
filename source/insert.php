<?php require_once 'includes/config.php'; ?>

<?php
						$query = "SELECT * FROM artwork";
					  	$result = mysqli_query($connection, $query);
						  // Check there are no errors with our SQL statement
						  if (!$result) {
					   	 die ("Database query failed.");
					  	}

					  	$File = $_POST['file']
					  	$Title = $_POST['name']
					  	$Desc = $_POST['description']

					  	$sql = "insert into artwork (file_path,name,description) values ('$File','$Title','$Desc')";

						if (!mysqli_query($conectionn,$sql))
						{
						 echo 'Not Inserted';
						}

						else
						{
						 echo 'Inserted Successfully';
						}

						header("refresh:2; url=media.php");
?>

