<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Web Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../imagenes/logo-gmail.png">
</head>
<header class="bg-light">
	<h1 class="p-3">Iniciar Sesión</h1>
</header>
<?php 
	include 'conexion.php';
	$conexion = conectar();



	if (isset($_POST['iniciar'])) 
	{
		$email = $_POST['email'];
		$contrasena = md5($_POST['contrasena']);

		if ($email != "" && $contrasena != "") 
		{
			$consultaInicio = "SELECT * FROM personas WHERE correo = '$email' AND contrasena = '$contrasena' ";
			$resultadoConsulta = mysqli_query($conexion,$consultaInicio);
			$filas = mysqli_num_rows($resultadoConsulta);
			if ($filas != 0) 
			{
				header("location: http://localhost/desarrollo/html/index.php");
				$_SESSION['nombreuser'] = $datos['nombre'];
				$_SESSION['iduser'] = $datos['id'];

			}else
			{
				echo 'Error al iniciar sesión';
			}
		}
		
	}
?>
<body>
	<form action="" class="form m-5" onsubmit="validarInicio(this)" id="formulario" method="post">
		<label for="" class="mt-3">Correo electronico</label>
		<br>
		<input type="email" placeholder="Por favor ingrese su correo electronico" class="form-control mt-3 w-50" name="email" id="email">
		<label for="contrasena" class="mt-3">Contraseña</label>
		<input type="password" placeholder="Por favor ingrese su contraseña" class="form-control w-50 mt-3" name="contrasena" id="contrasena">
		<button class="btn btn-primary mt-3" name="iniciar">Ingresar</button>
	</form>
<script src="../js/codigo.js"></script>
</body>
</html>