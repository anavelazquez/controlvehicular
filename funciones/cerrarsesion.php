<?php
        session_start();
        unset($_SESSION["ingresado"]);
        unset($_SESSION["tipo_usuario"]);
        session_destroy();
        header("Location: ../index.php");
        exit;
     
?>
