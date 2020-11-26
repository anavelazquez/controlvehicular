<?php
include ("../db/conexion.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];

   $sql = "SELECT * FROM usuarios WHERE nombre_usuario='".$usuario."' AND password='".$password."'";
  $query = mysqli_query($conexion, $sql);
    $usuariologeado = mysqli_fetch_array($query); 
    if (mysqli_num_rows($query) == 1) {

        session_start();
        $_SESSION["ingresado"]=$usuariologeado["nombre_usuario"];
      $_SESSION["logeado"]=true;
        $_SESSION["tipo_usuario"]=$usuariologeado["id_tipo_usuario"];
    
        header("Location: ../principal.php");
      } else {
        header("Location: ../index.php");
      }
      
?>
