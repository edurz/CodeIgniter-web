<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
</head>
<body>

<div id="container">

<?= $mensaje ?>

	<form action="<?= base_url(); ?>clogin/ingresar" method="POST">
		<table>
		<tr>
		<td><label>Usuario</label></td>
		<td><input type="text" name="txtUsuario"></td>
		</tr>
		<tr>
		<td><label>Contraseña</label></td>
		<td><input type="password" name="txtClave"></td>
		</tr>
		<tr>
		<td><input type="submit" value="Ingresar"></td>
		</tr>
		
		
		</table>
	
	
	
	</form>

</div>

</body>
</html>