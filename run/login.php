<?php
	$servername = "localhost";
	$username = "root";
	$password = "Falaffel9812";
	$dbname = "gratis4alla";

	//Anslut till databas
	$connect = mysql_connect("$servername","$username","$password") or die("Kunde inte ansluta till databasen");
	mysql_select_db("$dbname") or die ("Kunde inte hitta databasen");
	
	ob_start();
	session_start(); 
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username&&$password){
		$username = mysql_real_escape_string($username);
		$query = mysql_query("SELECT * FROM lista WHERE password='$password' AND username='$username'");

		$numrows = mysql_num_rows($query);
		
		if($numrows!=0) {
			while ($row = mysql_fetch_assoc($query)){
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
				$dbrank = $row['rank'];
				$dbid = $row['id'];
			}

			if (($hash != $username['password'])){
				if ($dbrank == 1){
					header("Location: ../main.php");
					$_SESSION['username']=$dbusername;
					$_SESSION['password']=$dbpassword;
					$_SESSION['rank']=$dbrank;
					$_SESSION['id']=$dbid;
				}
				else if($dbrank == 0){
					header("Location: ../status.php");
					$_SESSION['username']=$dbusername;
					$_SESSION['password']=$dbpassword;
					$_SESSION['rank']=$dbrank;
					$_SESSION['id']=$dbid;
				}
			}
			else{
				header("Location: ../loginSite.php");
				echo "<script type='text/javascript'>alert('Felaktiga inloggnings uppgifter')</script>";
			}
	
		}
		else{ 
			header("Location: ../loginSite.php");
			echo "<script type='text/javascript'>alert('Felaktiga inloggnings uppgifter')</script>";
		}


	}

else{
	header("Location: ../loginSite.php");
	echo "<script type='text/javascript'>alert('Felaktiga inloggnings uppgifter')</script>";
}
?>
