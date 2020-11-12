<?php

include ("../db/conexion.php");

$sql = "UPDATE usuarios SET nombre_usuario = 'daniel', password = '123456' Where id_usuario = 1";

$query = mysqli_query($conexion, $sql);

if($query == 1){
	echo "Se actualizo el usuario";
}else{
	echo "No se pudo actualizar el usuario";
}

?> 