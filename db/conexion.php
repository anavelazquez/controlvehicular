<?php
	$conexion = mysqli_connect("localhost","root","","vehicular");
	//$conexion = mysqli_connect("localhost","root","","control_vehicular");

if(!$conexion)
	{
		echo 'error No:'.mysqli_connect_errno();
		//echo 'error Description'.mysqli_connect_error();	
		echo 'error Description'.mysqli_connect_error();
	}
//else
//	{
//	echo "se conecto la base de datos";
	//echo "se conecto la base de datos";
//	}

?> 