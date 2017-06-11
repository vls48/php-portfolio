<?php require_once 'includes/config.php'; ?>
<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    $id = rand(1, 9);
  }
?>

<?php include 'includes/header.php';?>
<body>

	<div class="wrapper largebound">

		 <?php
          $query = "SELECT * FROM artwork WHERE id = {$id} LIMIT 1";
          $result = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($result)) {
        ?>


		<img src=<?php echo $row['large_path'] ?> alt="full size image" class="large">
          <h2><?php echo $row['name'] ?> </h2>
          <p><?php echo $row['description']; ?></p>


        <?php
          } 
          mysqli_free_result($result);
        ?>
		
	</div>



	<?php include 'includes/nav.php';?>

	<?php mysqli_close($connection);?>
		
	<?php include 'includes/footer.php';?>