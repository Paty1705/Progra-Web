function validar() {
    var nombre = document.contacto.nombre.value;
    var correo = document.contacto.correo.value;
    var asunto = document.contacto.asunto.value;
    var mensaje = document.contacto.mensaje.value;

    if (nombre.trim() == "" || correo.trim() == "" || asunto.trim() == "" || mensaje.trim() == "") {
        alert("No se permiten campos vacíos");
        return false;
    }

    var formatoCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!formatoCorreo.test(correo)) {
        alert("El correo electrónico no es válido");
        return false;
    }

    if (mensaje.trim().length <= 30) {
        alert("El mensaje debe tener más de 30 caracteres");
        return false;
    }

    return true;
}
