<?php
	
	function registrar($nombre,$apellido,$email,$pais,$contrasena)
	{
		if ($nombre != "" && $apellido != "" && $email != "" && $contrasena != "") 
		{
			$consultaRegistro = "INSERT INTO personas (nombre,apellido,correo,pais,contrasena) VALUES ('$nombre','$apellido','$email','$pais','$contrasena')";
			$resultConsulta = mysqli_query($conexion,$consultaRegistro);
			if ($resultConsulta) 
			{
				echo 'registrado exitosamente';
			}else
			{
				echo 'error al registrar';
			}
		}
	}

?>