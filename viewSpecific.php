<html>
	<head>
		<meta charset="utf-8">
		<title>Gratis för Alla</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
	<?php include("./includes/header.php"); ?>
¨<?php 
	include("./includes/connection.php");
	
	if (isset($_GET['id']) && is_numeric($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM lista WHERE id = $id";
		$result = $connection->query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
?>
	<div id="formIsh">
		<p> <b>Namn:</b> <?php echo $row['firstname'];?></p>
		<p> <b>Beskrivning:<br></b> <?php echo $row['description'];?></p>
		<p> <b>Email:</b> <?php echo $row['email'];?></p>
		<p> <b>Telefonnummer:</b> <?php echo $row['phone'];?></p>
		<p> <b>Beskrivning hemsida:<br></b> <?php echo $row['descriptionSite'];?></p>
	</div>
	
<?php
			}
		}
	}
	
?>
<br>
	<a href="main.php"><button type="button" class="btn btn-primary">Tillbaka</button></a>
		<?php echo "<a href=\"./run/delete.php?id=" . $id . "\">Ta bort</a>"; ?>
		<?php include("./includes/footer.php"); ?>
	</body>
</html>