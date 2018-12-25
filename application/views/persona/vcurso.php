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
	
	<form action="<?= base_url() ?>ccursos/cursos" method="POST">
	<table>
	
	<tr>
		<td><label>Nombre curso</label></td>
		<td><input type=text name="txtNomCurso"></td>
	</tr>
	<tr>
		<td><label>cantidad de videos</label></td>
		<td><input type=text name="txtVideos"></td>
	</tr>
	
	<tr>
		<td><input type=submit value="Guardar"></td>
	</tr>
	
	</form>
	
	
	

	
</div>

</body>
</html>
	