<?php

include ("db/conexion.php");

$sql = "INSERT INTO usuarios (id_tipo_usuario, nombre_usuario, password) VALUES (1, 'John Doe', '123')";

$query = mysqli_query($conexion, $sql);

if($query == 1){
	echo "Se insertó un usuario";
}else{
	echo "No se pudo insertar el usuario";
}

?> 