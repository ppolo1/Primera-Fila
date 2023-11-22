let nombre = document.getElementById("nombreCompleto") ;
let email = document.getElementById("correoElectronico") ;
let password = document.getElementById("contrasena") ;
let passwordRepetida = document.getElementById("confirmarContrasena") ;
let form = document.getElementById("formularioRegistro") ;
let parrafo = document.getElementById("mensajeRegistro") ;
let dni = document.getElementById("dniInput") ;

let errorNombre = document.getElementById("errorNombre") ;
let errorEmail = document.getElementById("errorEmail") ;
let errorPassword = document.getElementById("errorPassword") ;
let errorPasswordRepetida = document.getElementById("errorPasswordRepetida") ;
let errorDni = document.getElementById("errorDni") ;

/**
 * Normas validación nombre:
 *  - No puede estar vacío. REQUERIDO.
 *  - Debe contener mínimo dos palabras.
 *  - Las palabras deben estar separadas por un único espacio.
 *  - Se permite el guion (-) entre palabras. Ejemplo: Martín-Arroyo
 *  - Se permiten tildes y otros caracteres comunes en los nombres. Ejemplos válidos serían: Pière, Adrián o Gümba.
 */
function validarNombre() {

    // Expresiones regulares

    let regNombre = /^[A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+(?:-[A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+)?(?: [A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+(?:-[A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+)?)+$/ ; // Debe estar formado por al menos dos palabras separadas por un espacio
    
        if (nombre.value.trim() === "") {
            // Si el nombre está vacío
            errorNombre.innerHTML = "El nombre es requerido" ;
            nombre.focus() ;
            nombre.value = "" ;
        }
        else if(!regNombre.test(nombre.value)){
            // Si el nombre no es válido

            errorNombre.innerHTML = "Debes introducir un nombre válido" ;
            nombre.focus() ;
        }
        else{

            errorNombre.innerHTML = "" ;
        }

}

/**
 * Normas validación email:
 *  - No puede estar vacío. REQUERIDO.
 *  - No debe contener caracteres no válidos, como la ñ.
 *  - Debe contener una @ en su sitio correspondiente.
 *  - Debe tener su estructura habitual: nombre + dominio.
 *  - Debe ser un dominio válido. ".c" no sería válido.
 */
function validarEmail() {

    // Expresión regular

    let regEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/ ;
    
    if (email.value.trim() === ""){
        // Si el email está vacío

        errorEmail.innerHTML = "El email es requerido" ;
        email.focus() ;
        email.value = "" ;
    }
    else if (!regEmail.test(email.value)) {
        // Si el email no es válido

        errorEmail.innerHTML = "Debes introducir un email válido" ;
        email.focus() ;
    } 
    else{

        errorEmail.innerHTML = "" ;
    }

}
/**
 * Normas validación contraseña:
 *  - No puede estar vacía. REQUERIDA.
 *  - Debe tener entre 8 y 15 caracteres.
 *  - Debe contener al menos una mayúscula.
 *  - Debe contener al menos una minúscula.
 *  - Debe contener al menos un dígito.
 *  - No debe contener espacios.
 *  - Debe contener al menos un carácter especial.
 */
function validarPassword() {

    // Expresiones regulares

    let min8Caracteres = /^.{8,}$/ ; // Mínimo 8 caracteres
    let max15Caracteres = /^.{8,15}$/ ; // Máximo 15 caracteres
    let contieneMayuscula = /[A-Z]/ ; // Debe contener al menos una mayúscula
    let contieneMinuscula = /[a-z]/ ; // Debe contener al menos una minúscula
    let contieneDigito = /\d/ ; // Debe contener al menos un dígito
    let noContieneEspacios = /^\S+$/ ; // No debe contener espacios
    let contieneCaracterEspecial = /[¡!@#$%^&*(),.¿?":{}|<>_/\\\'\'ºª·€¬=\[\]\+\-";]/ ; // Debe contener al menos un carácter especial ; // Debe contener al menos un carácter especial

    
    if(password.value.trim() === ""){
        // Si la contraseña está vacía

        errorPassword.innerHTML = "La contraseña es requerida" ;
        password.focus() ;
        password.value = "" ;
    }
    else if(password.value.trim() != ""){
        // Si la contraseña no es válida
        
        if(!min8Caracteres.test(password.value)){
            // Si tiene menos de 8 caracteres

            errorPassword.innerHTML = "Debe tener un mínino de 8 caracteres" ;
            password.focus() ;
        }
        else if (!max15Caracteres.test(password.value)) {
            // Si tiene más de 15 caracteres

            errorPassword.innerHTML = "Debe tener un máximo de 15 caracteres" ;
            password.focus() ;
        }
        else if(!contieneMayuscula.test(password.value)){
            // Si no contiene ninguna mayúscula

            errorPassword.innerHTML = "Debe contener al menos una mayúscula" ;
            password.focus() ;
        }
        else if(!contieneMinuscula.test(password.value)){
            // Si no contiene ninguna minúscula

            errorPassword.innerHTML = "Debe contener al menos una minúscula" ;
            password.focus() ;
        }
        else if(!contieneDigito.test(password.value)){
            // Si no contiene ningún dígito

            errorPassword.innerHTML = "Debe contener al menos un dígito" ;
            password.focus() ;
        }
        else if(!noContieneEspacios.test(password.value)){
            // Si no contiene espacios

            errorPassword.innerHTML = "No debe contener espacios" ;
            password.focus() ;
        }
        else if(!contieneCaracterEspecial.test(password.value)){
            // Si no contiene ningún carácter especial

            errorPassword.innerHTML = "Debe contener al menos un carácter especial" ;
            password.focus() ;
        }
        else{
            errorPassword.innerHTML = "" ;
        }

    }
    else{

        errorPassword.innerHTML = "" ;
    }

}

/**
 * Normas validación confirmación contraseña:
 *  - No debe estar vacío. REQUERIDO.
 *  - Debe coincidir con la contraseña introducida.
 */
function validarPasswordRepeticion() {
    
    if (passwordRepetida.value.trim() === "") {
        // Si la contraseña no está vacía
        errorPasswordRepetida.innerHTML = "No puede estar en blanco" ;
        passwordRepetida.focus() ;
        passwordRepetida.value = "" ;
    }
    else if(passwordRepetida.value !== password.value){
        // Si la contraseña repetida es igual a la original

        errorPasswordRepetida.innerHTML = "La contraseña no coincide" ;
        passwordRepetida.focus() ;

    }
    else{

        errorPasswordRepetida.innerHTML = "" ;
    }

    function validarDNI() {
    
        if (dni.value.trim() === "") {
            // Si la contraseña no está vacía
            errorDni.innerHTML = "No puede estar en blanco" ;
            dni.focus() ;
            dni.value = "" ;
        }
        else{
    
            errorDni.innerHTML = "" ;
        }

}

function comenzar() {

   form.addEventListener("submit", e =>{

        e.preventDefault() ;

        validarDNI() ;
        validarPasswordRepeticion() ;
        validarPassword() ;
        validarEmail() ;
        validarNombre() ;

   }, false) ;
    
}

window.addEventListener("load", comenzar, false) ;

