<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['nombre'])&&!empty($_POST['email'])&&!empty($_POST['telefono'])&&!empty($_POST['mensaje'])){
        $asunto="contacto jrp";
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        $header = "From: noreply@example.com"."\r\n";
        $header = "Reply-to: noreply@example.com"."\r\n";
        $header = "X-Mailer: PHP/". phpversion();
        $mail= mail($email,$asunto,$mensaje,$header);
        if($mail){
                echo "<h4> Mail enviado</h4>"
        }
    }
}