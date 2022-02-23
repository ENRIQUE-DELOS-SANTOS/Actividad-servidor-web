<!DOCTYPE html>

<body style=" background-image: url('img/ASG.jpg');" >
<html>
<title>panel admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-row">
	<div class="w3-container w3-third">
		<div class="w3-card-4">
		  <div class="w3-container w3-teal">
			<h2>Agregar producto</h2>
		  </div>
		  <form class="w3-container" action="admin/cargarProducto.php" method= "POST" enctype="multipart/form-data">
		  
			<p>      
			<label class="w3-text-black"><b>Nombre del producto</b></label>
			<input class="w3-input w3-border" name="nombre_produc" type="text"></p>
			
			<p>      
			<label class="w3-text-black"><b>Descripcion</b></label>
			<input class="w3-input w3-border" name="descripcion" type="text"></p>
			
			<p>    
			<label class="w3-text-black"><b>Precio</b></label>
			<input class="w3-input w3-border" name="precio" type="number"></p>
			
			<p>   	
			<label class="w3-text-black"><b>imagen del procuto</b></label>
			<input class="w3-input w3-border" name="archivo" type="file"></p>
			
			<p>
			
			<button class="w3-btn w3-teal">Agregar producto</button></p>
		  </form>
		  
		  
		</div>
		
		<div class="w3-card-4">
			<div class="w3-container w3-teal">
					<h2>Clientes. </h2>
				</div>
		  
			<div class="w3-responsive">
			<table class="w3-table-all">
				<thead>
				  <tr class="w3-teal">
					<th>Cliente</th>
					<th>Email</th>
					<th>Telefono</th>
					<th>Mensaje</th>
					<th></th>
				  </tr>
				  
				</thead>
				
				<?php 
					$mysqli = new mysqli("localhost", "root", "", "loscerritos");

					/* verificar conexión */
					if (mysqli_connect_errno()) {
						printf("Error de conexión: %s\n", mysqli_connect_error());
						exit();
					}

					$stmt = $mysqli->prepare("select id,nombre, correo, telefono, mensaje from contactos");
					$stmt->execute();
					$stmt->bind_result($id,$nombre, $correo, $telefono, $mensaje);
					while ($stmt->fetch()):
				?>	
				
				<tr>
				  <td> <?= $nombre ?> </td>
				  <td><?= $correo ?></td>
				  <td><?= $telefono ?></td>
				  <td><?= $mensaje ?></td>

				  <td> <a href="admin/atendido.php?id=<?= $id ?>" class="w3-button w3-left w3-red">Marcar como atendido</a> </td>
				</tr>
				
				<?php
				endwhile;
					$stmt->close();
		
					$mysqli->close();
					
				?>
				
				
			
			  </table></div>
		</div>
	</div>
	
		<div class="w3-container w3-twothird">
		
				<div class="w3-container w3-teal">
					<h2>Lista de productos en existencia. </h2>
				</div>
		  
			<table class="w3-table-all">
				<thead>
				  <tr class="w3-teal">
					<th>Nombre del producto</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Imagen del producto</th>
					<th></th>
				  </tr>
				  
				</thead>
				
				<?php 
					$mysqli = new mysqli("localhost", "root", "", "loscerritos");

					/* verificar conexión */
					if (mysqli_connect_errno()) {
						printf("Error de conexión: %s\n", mysqli_connect_error());
						exit();
					}

					$stmt = $mysqli->prepare("select idproducto, nombreproducto, precio, descripcion, imagen from productos");
					$stmt->execute();
					$stmt->bind_result($idproducto, $nombreproducto, $precio, $descripcion, $imagen);
					while ($stmt->fetch()):
				?>	
				
				<tr>
				  <td> <?= $nombreproducto ?> </td>
				  <td><?= $descripcion ?></td>
				  <td><?= $precio ?></td>
				  <td> <img style="width: 100px" src= "../img/<?= $imagen ?>"> </td>

				  <td> <a href="admin/eliminarProducto.php?idproducto=<?= $idproducto ?>" class="w3-button w3-left w3-red">Eliminar</a> </td>
				</tr>
				
				<?php
				endwhile;
					$stmt->close();
		
					$mysqli->close();
					
					?>
				
				
			
			  </table>
	  </div>
  
</div>
</body>
</html> 
