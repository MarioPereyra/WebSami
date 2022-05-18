<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo "Gracias por escribirme". $nombre;

mail('zeerooh1993@gmail.com', $asunto, $mensaje);
?>