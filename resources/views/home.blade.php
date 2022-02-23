@extends('layouts.app')

@section('content')


<!DOCTYPE html>

<html>
<title>HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-teal" >
<h1  style="color:white;" class="title m-b-md w3-center" > <img src="img/11.png" style="width:150px"> <b>Los cerritos</b></h1>
<h3>PRODUCTOS</h3>
</div>

<div class="w3-content">
<?php
	$mysqli = new mysqli("localhost", "root", "", "loscerritos");

	/* verificar conexión */
	if (mysqli_connect_errno()) {
		printf("Error de conexión: %s\n", mysqli_connect_error());
		exit();
	}

	$stmt = $mysqli->prepare("select nombreproducto, precio, descripcion, imagen from productos");
	$stmt->execute();
	$stmt->bind_result( $nombreproducto, $precio, $descripcion, $imagen);
	while ($stmt->fetch()):
?>	
<div class="w3-row w3-margin">
				
<div class="w3-third">
  <img src="img/<?= $imagen ?>" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">

  <h3 class="title m-b-md w3-leff"> <b><?= $nombreproducto ?></b></h3>
  
  <p class="title m-b-md w3-justify"> <?= $descripcion ?>  </p>

<h3 style="color:blue;"> <i>$</i> <?= $precio ?></h3>
</div>


</div>
<?php
	endwhile;
	$stmt->close();

	$mysqli->close();
	
?>
</div>
</body>
</html>
@endsection
