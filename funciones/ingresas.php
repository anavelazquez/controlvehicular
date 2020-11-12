<?php
include ("../db/conexion.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];

   $sql = "SELECT * FROM usuarios WHERE nombre_usuario='".$usuario."' AND password='".$password."'";
    $query = mysqli_query($conexion, $sql);
    
    if (mysqli_num_rows($query) == 1) {
  
        header("Location: ../principal.php");
      } else {
        header("Location: ../index.php");
      }
      
?>
