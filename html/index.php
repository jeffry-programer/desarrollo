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
<?php

if(isset($_GET['cerrar'])) {

  //Vaciamos y destruimos las variables de sesión
  $_SESSION['iduser'] = NULL;
  $_SESSION['nombreuser'] = NULL;
  unset($_SESSION['iduser']);
  unset($_SESSION['nombreuser']);

  //Redireccionamos a la pagina index.php
  header('Location: https/localhost/desarrollo/html/index.php');
}

?>
<header>
	<h1 class="bg-light p-4"><img src="../imagenes/logo-gmail.png" alt="gmail" class="logo"> Jeffry Messenger</h1>
</header>
<body>
	<a href="http://localhost/desarrollo/html/escribir.php"><button class="btn btn-primary ml-3 mt-3">Redactar</button></a>
	<a href="'Location:http://localhost/desarrollo/html/index.php?cerrar=yes" ><button class="btn btn-primary ml-3 mt-3">Cerrar</button></a>

<script src="../js/codigo.js"></script>
</body>
<footer></footer>
</html>