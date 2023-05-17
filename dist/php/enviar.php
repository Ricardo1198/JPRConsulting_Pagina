<?php 

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
    $telefono= $_POST['telefono']
    $mensaje = $_POST['mensaje'];
	$asunto = 'Contacto JRP PAGE';
	$mensajeCompleto = "Nombre: ".$nombre."<br>" 
                        "Email: ".$email"<br>" 
                        "Mensaje:".$mensaje;

	if(mail('ventas@jprconsulting.com', $asunto, $mensaje)){
		echo "<script>alert("correo enviado exitosamente")</script>" ;
		echo "<script>setTimeout(\"location.href='contact.html'\",500)</script>" ;
	}else{
		echo "<script>alert("No se pudo enviar intente mas tarde")</script>" ;
		echo "<script>setTimeout(\"location.href='contact.html'\",500)</script>" ;
	}
	

 ?>