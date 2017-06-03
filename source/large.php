<?php require_once 'includes/config.php'; ?>
<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    $id = rand(1, 9);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	 <meta name="viewport" content="initial-scale=1.0, width=device-width" />

	<title>FULL</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
	<link rel="stylesheet" href="master.css">
	<link href="https://fonts.googleapis.com/css?family=Lato%7CPrata" rel="stylesheet">
	
</head>
<body>

	<div class="wrapper largebound">

		 <?php
          $query = "SELECT * FROM artwork WHERE id = {$id} LIMIT 1";
          $result = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($result)) {
        ?>


		<img src=<?php echo $row['large_path'] ?> alt="placeholder image" class="large">
          <h2><?php echo $row['name'] ?> </h2>
          <p><?php echo $row['description']; ?></p>


        <?php
          } 
          mysqli_free_result($result);
        ?>
		
	</div>



	<?php include 'includes/nav.php';?>

	<?php mysqli_close($connection);?>
		
	<script src="main.js"></script>
</body>
</html>