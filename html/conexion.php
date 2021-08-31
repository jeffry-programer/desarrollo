<?php 
	function conectar()
	{
		$user = "root";
		$password = "";
		$db = "jeffry";
		$server = "localhost";
		$conexion = mysqli_connect($server,$user,$password,$db);
		if ($conexion) 
		{
			return $conexion;
		}else
		{
			echo 'Error al intentar conecta con db';
		}
	}
?>