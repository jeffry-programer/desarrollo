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
	<h1 class="p-3">Registro de Usuario</h1>
</header>
<body>
	<form action="" class="form m-5" onsubmit="validarRegistro(this)" id="formulario" method="post">
		<label for="">Nombre</label>
		<input type="text" placeholder="Por favor ingrese su nombre" class="form-control w-50 mt-3" name="nombre" id="nombre">
		<label for="" class="mt-3">Apellido</label>
		<input type="text" placeholder="Por favor ingrese su apellido" class="form-control w-50 mt-3" name="apellido" id="apellido">
		<label for="" class="mt-3">Correo electronico</label>
		<br>
		<input type="email" placeholder="Por favor ingrese su correo electronico" class="form-control mt-3 w-50" name="email" id="email">
		<label for="" class="mt-3">Por favor ingrese su Pais de Nacimiento</label>
		<br>

		<?php  
		include "principal.php";
		$conexion = conectar();
		$consulta = "SELECT * FROM pais";
		$result = mysqli_query($conexion,$consulta);
		?>
		
		<select name="pais" id="pais" class="form-select w-50 mt-3">
		<?php foreach ($result as $key): ?>
			<option value="<?php  echo $key['descripcion']?>"><?php echo $key['descripcion'] ?></option>
		<?php endforeach ?>
		</select>
		<br>
		<label for="" class="mt-3">Por favor ingrese su contraseña</label>
		<input type="password" placeholder="Por favor ingrese su contraseña" class="form-control w-50 mt-3" name="contrasena" id="contrasena">
		<label for="" class="mt-3">Por favor repita su contraseña</label>
		<input type="password" placeholder="Por favor repita su contraseña" class="form-control w-50 mt-3" id="repContrasena">
		<button class="btn btn-primary mt-4" name="registrar">Registrar</button>
	</form>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../js/codigo.js"></script>
</body>
<?php 
	if (isset($_POST['registrar'])) 
	{
		$nombre = $_POST['nombre'];	
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$pais = $_POST['pais'];
		$contrasena = md5($_POST['contrasena']);

		registrar($conexion,$nombre,$apellido,$email,$pais,$contrasena);
	}
?>
</html>