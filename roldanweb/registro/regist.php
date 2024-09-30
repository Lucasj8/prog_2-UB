<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Exito</title>
</head>
<body class="regibody">
    
<?php

$conex = mysqli_connect("localhost:3306","root","","registros"); 

?>

<?php

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['user']) >= 1 && strlen($_POST['mail']) >= 1  && strlen($_POST['pass']) >= 1  && strlen($_POST['conpass']) >= 1) {
	    $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $user = trim($_POST['user']);
	    $email = trim($_POST['mail']);
        $pass = trim($_POST['pass']);
        $conpass = trim($_POST['conpass']);
	    
	    $consulta = "INSERT INTO reg(nombre, apellido, usuario, mail, pass, conpass) VALUES ('$name','$email','$lastname','$user','$pass','$conpass')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<center><h1><u>¡Te has inscripto correctamente!</u></h1></center>
            <center><h1><u><a href="../index.html">INICIO</a></u></h1></center>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
    
</body>
</html>