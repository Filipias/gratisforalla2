<?php
	include("../includes/connection.php");
	
	$firstname = $_POST["firstname"];
	$description = $_POST["description"];
	$mail	= $_POST["mail"];
	$phone = $_POST["phone"];
	$descriptionSite = $_POST["descriptionSite"];
	
	$sql = "INSERT INTO lista (firstname, description, email, phone, descriptionSite) VALUES('$firstname', '$description', '$mail', '$phone', '$descriptionSite')";
	
	if($connection->query($sql) === TRUE){  ?>
        <script>
            window.location.replace("http://localhost/complete.php");
        </script>
 <?php
	}
	else{
		echo "Fuck off";
	}
?>