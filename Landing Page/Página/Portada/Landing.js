
//Esto es solo para hacer segundas ventanas para los formularios y las cookies. DIW

document.addEventListener("DOMContentLoaded", function () {

    const teAyudamosButton = document.getElementById("teayudamos");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();
        window.open("formulario.html", "_blank", "width=1000,height=600");
    });
});
document.addEventListener("DOMContentLoaded", function () {

    const teAyudamosButton = document.getElementById("masinformacion");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();


        window.open("formulario.html", "_blank", "width=1000,height=600");
    });
});
document.addEventListener("DOMContentLoaded", function () {

    const teAyudamosButton = document.getElementById("cookies");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();


        window.open("PoliticaDeCookies.html", "_blank", "width=1000,height=600");
    });
});
function mostrarOcultarDNI() {
    const paisSelect = document.getElementById("pais");
    const dniLabel = document.getElementById("dniLabel");
    const dniInput = document.getElementById("dniInput");

    if (paisSelect.value === "ES") {
        dniLabel.style.display = "block"; // Mostrar el label
        dniInput.style.display = "block"; // Mostrar el input
    } else {
        dniLabel.style.display = "none"; // Ocultar el label
        dniInput.style.display = "none"; // Ocultar el input
    }
}
//Empiezo con Cliente

function validarFormulario() {
    const esNombreValido = validarNombre();
    const esCorreoValido = validarCorreo();
    const esContrasenaValida = validarContrasena();

    if (esNombreValido && esCorreoValido && esContrasenaValida) {
        console.log("Formulario válido. Realizar acciones adicionales o enviar formulario.");
    } else {
        console.log("El formulario contiene errores. Por favor, revíselo.");
    }
}

// Validación del nombre y apellidos
function validarNombre() {
    const nombreCompletoInput = document.getElementById('nombreCompleto');
    const nombreCompletoValue = nombreCompletoInput.value.trim();
    
    // Expresión regular para dos palabras separadas por un espacio
    const regex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ]+\s[a-zA-ZáéíóúÁÉÍÓÚñÑ]+$/;
    
    if (!regex.test(nombreCompletoValue)) {
        alert('El nombre y apellidos deben estar compuestos por dos palabras separadas por un espacio.');
        return false; // Evita el envío del formulario
    }
    return true; // Permite el envío del formulario
}

// Validación del correo electrónico
function validarCorreo() {
    const correoInput = document.getElementById("correoElectronico");
    const correo = correoInput.value;
    const correoValido = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/.test(correo);

    if (correoValido) {
        // El correo es válido
        console.log("Correo válido:", correo);
        return true; // Indica que la validación fue exitosa
    } else {
        // Mostrar un mensaje de error
        alert("Por favor, ingrese una dirección de correo válida.");
        return false; // Indica que la validación falló
    }
}

// Validación de la contraseña
function validarContrasena() {
    const contrasenaInput = document.getElementById("contrasena");
    const contrasena = contrasenaInput.value;
    const contrasenaValida = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/.test(contrasena);

    if (contrasenaValida) {
        // La contraseña es válida
        console.log("Contraseña válida");
        return true;
    } else {
        // Mostrar un mensaje de error
        alert("La contraseña debe tener al menos 8 caracteres, incluyendo al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.");
        return false;
    }
}