<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje recibido</title>
</head>
<body>
<?php
// Se vuelven a validar los datos por si se llega a esta pagina sin pasar por el formulario
$nombre  = isset($_POST["nombre"])  ? trim($_POST["nombre"])  : "";
$correo  = isset($_POST["correo"])  ? trim($_POST["correo"])  : "";
$asunto  = isset($_POST["asunto"])  ? trim($_POST["asunto"])  : "";
$mensaje = isset($_POST["mensaje"]) ? trim($_POST["mensaje"]) : "";

if ($nombre == "" || $asunto == "" || $mensaje == "" || !filter_var($correo, FILTER_VALIDATE_EMAIL) || strlen($mensaje) <= 30) {
    echo "<h1>Datos no válidos</h1>";
    echo "<a href='contacto.php'>REGRESAR AL FORMULARIO</a>";
} else {
    echo "<h1>Información capturada</h1>";
    echo "<p><b>Nombre:</b> " . htmlspecialchars($nombre) . "</p>";
    echo "<p><b>Correo:</b> " . htmlspecialchars($correo) . "</p>";
    echo "<p><b>Asunto:</b> " . htmlspecialchars($asunto) . "</p>";
    echo "<p><b>Mensaje:</b> " . htmlspecialchars($mensaje) . "</p>";
    echo "<a href='index.php'>REGRESAR AL MENU PRINCIPAL</a>";
}
?>
</body>
</html>
