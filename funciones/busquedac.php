<?php

include ("../db/conexion.php");
$busqueda=$_POST["busquedaconductor"];
$sql = "SELECT * from conductores WHERE nombre LIKE '%".$busqueda."%'";

$query = mysqli_query($conexion, $sql);
if (mysqli_num_rows($query) > 0) {
    //$fila = mysqli_fetch_row($query); 
    echo "<table>";
    while ($fila = $query->fetch_row()){
        echo "<tr>";
         echo "<td>".$fila[0]."</td>";
         echo "<td>".$fila[1]."</td>";
         echo "<td>".$fila[2]."</td>";
         echo "<td>".$fila[3]."</td>";
         echo "<td>".$fila[4]."</td>";
         echo "</tr>";
    }   echo"</table>";
}else{
	echo "No se encontraron datos";
}

?> 