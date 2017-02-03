<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kiosko Acatlan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script type="text/javascript" src="js/log.js"></script>
<body>
	<header>
		<h1 class="logo"> Kiosko Impresiones Acatlan- logo </h1>
	</header>

	<div class="acceso">
		<h3>Bienvenido</h3>
		<form name="myForm" onsubmit="return verificar()" method="post">
			<div>
				<input class="usr-log" name ="numeroCuenta" type="text" onchange="verificar();" id="numeroCuenta" placeholder="Cuenta">
				 
			</div>
			<br>
			<div>
				<input class="usr-log" name="pw" type="password" id="password" placeholder="Password">
			</div>
			
		</form>
		<br>
		<button type="button" onclick='verificar();' class="button">Acceder</button>
		<p id="erroracces"></p>

	</div>
	<footer>
		
	</footer>
</body>
</html>
