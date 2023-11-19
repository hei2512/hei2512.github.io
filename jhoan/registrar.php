<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
		$tipdoc = trim($_POST['tipdoc']);
		$nrodoc = trim($_POST['nrodoc']);
		$edad = trim($_POST['edad']);
		$genero = trim($_POST['genero']);
		$celular = trim($_POST['celular']);
		$telefono = trim($_POST['telefono']);
		$comentario = trim($_POST['comentario']);
	    $consulta = "INSERT INTO solicitudesRegistro(name, email, fechareg, tipdoc, nrodoc, edad, genero, celular, telefono, comentario) VALUES ('$name','$email','$fechareg',' $tipdoc','$nrodoc',' $edad',' $genero',' $celular ',' $telefono ','$comentario')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Se ingresado la informacion correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Error insertando la informacion!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
