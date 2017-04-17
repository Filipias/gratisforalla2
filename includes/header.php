<?php
	error_reporting(0);
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "Falaffel9812";
	$dbname = "gratis4alla";

	//Anslut till databas
	$connect = mysql_connect("$servername","$username","$password") or die("Kunde inte ansluta till databasen");
	mysql_select_db("$dbname") or die ("Kunde inte hitta databasen");
	
	$query = mysql_query("SELECT * FROM lista WHERE id='13'");
	$numrows = mysql_num_rows($query);
?>

<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Gratis för alla</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="index.php">Hem</a></li>
					<li><a href="form.php">Ansök</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if($_SESSION['id'] == 0){ ?>
						<li><a href="main.php"><span class="glyphicon glyphicon-log-in"> logga in</span></a></li>
					<?php } ?>
					<?php if($_SESSION['rank'] > 0){ ?>
						<li><a href="main.php"> Se ansökningar</a></li>
					<?php } ?>
					<?php if($_SESSION['rank'] > 0){ ?>
						<li><a href="handleAdmin.php"> Hantera admins</a></li>
					<?php } ?>
					<?php if($_SESSION['rank'] == 0 && $_SESSION['id'] > 0){ ?>
						<li><a href="status.php"> Se min ansökan</a></li>
					<?php } ?>
					<?php if($_SESSION['id'] > 0){ ?>
						<li><a href="./run/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logga ut</a></li>
					<?php } ?>
				</ul>
			</div>
		</nav>