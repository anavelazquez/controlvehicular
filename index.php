
<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
		<title>Login SISCV</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link href="css/signin.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
</head>
<body>

		<form name="registro" action="funciones/ingresas.php" method="POST" class="form-signin">
			<div class="text-center mb-4">
				<img class="mb-4" src="static/img/user.png" alt="" width="72" height="72"/>
				<h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
			</div>
			<div class="form-label-group">
				<input id="usuario" name="usuario" type="text" class="form-control" placeholder="Nombre del Usuario" required autofocus></input>
				<label for="usuario">Nombre de Usuario</label> 
			</div>
			
			<div class="form-label-group">
				<input id="password" name="password" type="password"class="form-control" placeholder="Password" required></input>
				<label for="password">Contraseña</label>
			</div>
			<div class="checkbox mb-3">
    		<label>
     		 <input type="checkbox" value="remember-me"> Recordar
    		</label>
 			 </div>
			<button type="submit" class="btn btn-lg btn-primary btn-block"><i class="fas fa-sign-in-alt"> </i>Entrar</button>
		</form>
	

		<script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js00"></script>
</body>
