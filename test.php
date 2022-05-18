<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo "Gracias por escribirme ". $nombre;

if(mail('zeerooh1993@gmail.com', $asunto, $mensaje)){
    echo "mail enviado";
}else{
        echo "No se ha podido mandar";
}
?>