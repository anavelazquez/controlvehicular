<?php
<<<<<<< HEAD
	$conexion = mysqli_connect("localhost","root","","vehicular");
	//$conexion = mysqli_connect("localhost","root","","control_vehicular");
=======
	$conexion = mysqli_connect("localhost","root","","control_vehicular");
>>>>>>> d0319d5b1b08a1ecee1832c783163a238000d873

if(!$conexion)
	{
		echo 'error No:'.mysqli_connect_errno();
<<<<<<< HEAD
		//echo 'error Description'.mysqli_connect_error();	
		echo 'error Description'.mysqli_connect_error();
=======
		echo 'error Description'.mysqli_connect_error();
	}
else
	{
	//echo "se conecto la base de datos";
>>>>>>> d0319d5b1b08a1ecee1832c783163a238000d873
	}
//else
//	{
//	echo "se conecto la base de datos";
	//echo "se conecto la base de datos";
//	}

?> 