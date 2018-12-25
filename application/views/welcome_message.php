<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir imagen usando jquery ajax</title>
	<!-- libreria jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- cargar.js -->
	<script type="text/javascript" src="<?=base_url();?>js/cargar.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<section>
		<h2>Subir imagen en php usando jquery ajax</h2>
		<article>
			<form name="frmSubir" id="frmSubir" method="post" enctype="multipart/form-data">
			<p>Subir imagen</p>
			<p><input type="file" name="imagenes" /></p>
			<p><input type="submit" class="btn_enviar" value="Guardar imagen" /></p>
			</form>
		</article>
		<section id="mensaje">
			
		</section>
	</section>
</body>
</html>