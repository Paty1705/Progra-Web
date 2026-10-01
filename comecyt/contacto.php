<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMECYT - Contáctanos</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="validar.js"></script>
</head>
<body>
    <?php include "encabezado.php"; ?>

    <table width="100%">
        <tr>
            <!--Menu lateral-->
            <td width="22%" valign="top">
                <table class="lateral" width="100%">
                    <tr><th>Acerca del COMECYT</th></tr>
                    <tr><td><a href="#">Titular</a></td></tr>
                    <tr><td><a href="#">Antecedentes</a></td></tr>
                    <tr><td><a href="#">Misión, visión y objetivo</a></td></tr>
                    <tr><td><a href="#">Funciones</a></td></tr>
                    <tr><td><a href="#">Marco jurídico</a></td></tr>
                    <tr><td><a href="#">Organigrama</a></td></tr>
                    <tr><td><a href="#">Directorio</a></td></tr>
                    <tr><td><a href="#">Ubicación</a></td></tr>
                    <tr><td><a href="#">Información Financiera y Presupuestal</a></td></tr>
                    <tr><td><a href="#">Área Coordinadora de Archivos</a></td></tr>
                    <tr><td><a href="#">Unidad de Género</a></td></tr>
                    <tr><td><a href="contacto.php"><u>Contáctanos</u></a></td></tr>
                    <tr><td><a href="#">Ética</a></td></tr>
                    <tr><td><a href="#">Gobierno Digital</a></td></tr>
                    <tr><td><a href="#">Transparencia</a></td></tr>
                    <tr><td><a href="#">Procedimientos Adquisitivos</a></td></tr>
                </table>
            </td>

            <!--Formulario-->
            <td valign="top">
                <h1 class="tituloPagina">Contáctanos</h1>
                <div class="formulario">
                    <form name="contacto" action="mensaje.php" method="post" onsubmit="return validar()">
                        <p><label>Su nombre <span class="rojo">*</span></label>
                            <input type="text" name="nombre" size="60"></p>
                        <p><label>Dirección de correo <span class="rojo">*</span></label>
                            <input type="text" name="correo" size="70"></p>
                        <p><label>Asunto <span class="rojo">*</span></label>
                            <input type="text" name="asunto" size="60"></p>
                        <p><label>Mensaje <span class="rojo">*</span></label></p>
                        <textarea name="mensaje" rows="8" class="mensaje"></textarea>
                        <p><input type="submit" value="Enviar" class="boton"></p>
                    </form>
                </div>
            </td>
        </tr>
    </table>
    <br>

    <?php include "pie.php"; ?>
</body>
</html>
