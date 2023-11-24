let nombre = document.getElementById("nombreCompleto") ;
let email = document.getElementById("correoElectronico") ;
let password = document.getElementById("contrasena") ;
let passwordRepetida = document.getElementById("confirmarContrasena") ;
let form = document.getElementById("formularioRegistro") ;
let parrafo = document.getElementById("mensajeRegistro") ;
let dni = document.getElementById("dniInput") ;
let fecha = document.getElementById("fechaNacimiento") ;

let errorNombre = document.getElementById("errorNombre") ;
let errorEmail = document.getElementById("errorEmail") ;
let errorPassword = document.getElementById("errorPassword") ;
let errorPasswordRepetida = document.getElementById("errorPasswordRepetida") ;
let errorDni = document.getElementById("errorDni") ;
let errorFecha = document.getElementById("errorFecha") ;

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

    let regEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,5})+$/ ;
    
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
}

/**
 * Normas validaciones fecha
 * Fecha real(no puede ser superior a la actual)
 * Fecha no superior al año actual
 */

function validarFecha(){

    let fechaNacimiento = new Date(fecha.value);
    fechaNacimiento.setHours(0) ;
    
    if(fechaNacimiento == "Invalid Date")
    {
        errorFecha.innerHTML = "Ha petado" ;
    }

    else
    {
        errorFecha.innerHTML = "" ;
    }
    //alert(fechaNacimiento) ;
    
    // Obtengo la fecha actual
    let fechaActual = new Date() ;

    // Calcular la diferencia en milisegundos entre las dos fechas
    let diferenciaMilisegundos = fechaActual - fechaNacimiento;
    

    // Calcular la edad dividiendo la diferencia en milisegundos por el número de milisegundos en un año
    let edad = Math.floor(diferenciaMilisegundos / (1000 * 60 * 60 * 24 * 365.25));

    // Comparar la edad con la edad mínima para ser considerado mayor de edad (por ejemplo, 18) y limite de edad para personas adultas

    // Imprimir el resultado
    
    if ((edad >= 18 && edad < 120))
    {
        alert('La persona es mayor de edad.');
    }
    else if(edad >= 120)
    {
        alert("No creo que con esa edad estés vivo...") ;
    }
    else if(fechaNacimiento == "Invalid Date")
    {
        errorFecha.innerHTML = "Ha petado" ;
    }
    else
    {
        alert('La persona no es mayor de edad.');
    }

    // Comprobar si DATE está bien hecha    
    
}

/**
 * Normas validaciones DNI
 * Tiene que ser un DNI válido
 */

function validarDNI() {

    // Expresión regular

    let regexDNI = /^\d{8}[a-zA-Z]$/ ; // Validación DNI
    let regexDNICerosOmitidos = /^\d{1,7}[a-zA-Z]$/ ; // Validación alternativa que servirá para añadir los ceros omitidos
    
        if (dni.value.trim() === "") 
            // Si el DNI está vacío
        {
            dni.focus() ;
            dni.value = "" ;
        }

        else if (dni.value.trim() !== "") // Si no está vacío
        {
            dni.value = eliminaGuiones(dni.value) ; // Le quita los guiones
            dni.innerHTML = dni.value ;

            if (!regexDNI.test(dni.value)) 
                // Si el formato no es válido
            {
                if(regexDNICerosOmitidos.test(dni.value))
                {
                    errorDni.innerHTML = "Te falta añadir los ceros" ;
                }
                else
                {
                    errorDni.innerHTML = "Debes introducir un DNI válido" ;
                    dni.focus() ;
                }
            } 

            else if (regexDNI.test(dni.value)) 
                // Si el formato es válido
            {
                errorDni.innerHTML = "" ;
    
                let numeroDNI = dni.value.slice(0,8) ; // Parte numérica
                let letraDNI = dni.value.charAt(8).toUpperCase() ; // Letra
    
                let letrasPosibles = "TRWAGMYFPDXBNJZSQVHLCKE" ;
    
                let letraCalculada = letrasPosibles.charAt(numeroDNI % 23) ;
    
                if (letraDNI != letraCalculada)
                    // Si la letra del DNI no coincide con el cálculo
                {
                    errorDni.innerHTML = "La letra del DNI no es válida" ;
                }
                

            }
        }
        else
        {
            errorDni.innerHTML = "" ;
        }
    }

function eliminaGuiones(cadena) {
    // Elimina los guiones de una cadena
    
    if (cadena.includes("-"))
    // Si la cadena contiene un guion, elimínalo de la cadena
    {
        cadena = cadena.replace(/-/g,"") ;
    }

    return cadena ;
}

function comenzar() {

    form.addEventListener("submit", e =>{

        e.preventDefault() ;

        validarDNI() ;
        validarFecha() ;
        validarPasswordRepeticion() ;
        validarPassword() ;
        validarEmail() ;
        validarNombre() ;

    }, false) ;
    
}

window.addEventListener("load", comenzar, false) ;
