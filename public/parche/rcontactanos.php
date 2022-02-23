<?php
   $nombre = $_POST["nombre"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $message = $_POST["message"];
   
   $mysqli = new mysqli("localhost", "root", "", "loscerritos");

/* comprobar la conexión. */

		if (mysqli_connect_errno()) {
			printf("Error de conexión: %s\n", mysqli_connect_error());
			
			exit();
		}	
		
		
		$query = "INSERT INTO contactos VALUES (NULL, ?, ?, ?,?)";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('ssss', $nombre, $email, $phone, $message);
		$stmt->execute();
		$stmt->close();
		
		$mysqli->close();
		
		

?>

<script>

	window.location.href = "/contactanos";
	
</script>