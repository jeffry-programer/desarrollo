<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jeffry Messenger</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../imagenes/logo-gmail.png">
</head>
<header>
	<h1 class="bg-light p-4"><img src="../imagenes/logo-gmail.png" alt="gmail" class="logo"> Jeffry Messenger</h1>
</header>
<?php
	include "conexion.php";
	$conexion = conectar();
	$consulta = "SELECT * FROM personas";
	$resultConsulta = mysqli_query($conexion, $consulta);
?>
<body>
	<form action="">
		<h2 class="h2 m-5">Redactar</h2>
		<label class="h5 mt-4 ml-5 h5" for="select">Para: </label><br>
		<select name="" id="select" class="form-select w-50 ml-5 mt-3">
			<?php foreach ($resultConsulta as $key): ?>
				<option value="<?php echo $key['correo']?>"><?php echo $key['correo']?></option>
			<?php  endforeach ?>
		</select><br>
		<label for="" class="h5 mt-3 ml-5">Asunto</label>
		<input type="text" class="form-control w-50 ml-5 mt-3" placeholder="Por favor escriba el asunto de su mensaje">
		<div class="form-group">
			<label for="" class="h5 mt-3 ml-5">Mensaje</label><br>
			<textarea name="" id="" rows="5" placeholder="Por favor escriba su mensaje" class="ml-5 mt-3 form-control w-50"></textarea>
		</div>
		<button class="btn btn-primary mt-3 ml-5">Enviar</button>
		</form>

<script src="../js/codigo.js"></script>
</body>
<aside>
</aside>
<footer></footer>
</html>