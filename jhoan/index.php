<!DOCTYPE html>
<html>
<head>
	<title>Registrar Control de Visitas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Registrate en SoryIAutorizon</h1>
		<h3>by - Fabian ,Jhoan y Lizbeth </h3>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="text" name="tipdoc" placeholder="Tipo de Documento">
		<input type="text" name="nrodoc" placeholder="Nro documento">
		<input type="email" name="email" placeholder="Email">
		<input type="text" name="edad" placeholder="Edad">
		<input type="text" name="genero" placeholder="Genero">
		<input type="text" name="celular" placeholder="Celular">
		<input type="text" name="telefono" placeholder="Telefono">
		<input type="text" name="comentario" placeholder="Comentario">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>

