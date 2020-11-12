<?php

include ("../db/conexion.php");

$sql = "DELETE FROM usuarios Where id_usuario = 1";

$query = mysqli_query($conexion, $sql);

if($query == 1){
	echo "Se elimino el usuario";
}else{
	echo "No se pudo eliminar el usuario";
}

?> 