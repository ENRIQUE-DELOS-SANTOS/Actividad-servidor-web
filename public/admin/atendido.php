<?php
	
   
   $id = $_GET["id"];
   
   $mysqli = new mysqli("localhost", "root", "", "loscerritos");

/* comprobar la conexión. */

		if (mysqli_connect_errno()) {
			printf("Error de conexión: %s\n", mysqli_connect_error());
			
			exit();
		}	
		
		
		$query = "DELETE from contactos where id = ?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('s', $id);
		$stmt->execute();
		
		$stmt->close();
		
		$mysqli->close();

?>

<script>

	window.location.href = "/admin";
	
</script>