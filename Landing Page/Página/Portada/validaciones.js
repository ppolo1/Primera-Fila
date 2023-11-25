// ELEMENTOS DEL DOM

let nombre = document.getElementById("nombreCompleto") ; // Nombre
let email = document.getElementById("correoElectronico") ; // Email
let password = document.getElementById("contrasena") ; // Contraseña
let passwordRepetida = document.getElementById("confirmarContrasena") ; // Confirmar contraseña
let form = document.getElementById("formularioRegistro") ; // Formulario
let parrafo = document.getElementById("mensajeRegistro") ; // Mensaje de registro
let dni = document.getElementById("dniInput") ; // DNI
let fecha = document.getElementById("fechaNacimiento") ; // Fecha de nacimiento

// MENSAJES DE ERROR

let errorNombre = document.getElementById("errorNombre") ; // Nombre
let errorEmail = document.getElementById("errorEmail") ; // Email
let errorPassword = document.getElementById("errorPassword") ; // Contraseña
let errorPasswordRepetida = document.getElementById("errorPasswordRepetida") ; // Confirmación de contraseña
let errorDni = document.getElementById("errorDni") ; // DNI
let errorFecha = document.getElementById("errorFecha") ; // Fecha de nacimiento


// Colores

let rojo = "#FA7575" ;
let verde = "#B8FAA1" ;


/**
 * Normas validación nombre:
 *  - No puede estar vacío. REQUERIDO.
 *  - Debe contener mínimo dos palabras.
 *  - Las palabras deben estar separadas por un único espacio.
 *  - Se permite el guion (-) entre palabras. Ejemplo: Martín-Arroyo
 *  - Se permiten tildes y otros caracteres comunes en los nombres. Ejemplos válidos serían: Pière, Adrián o Gümba.
 */
function validarNombre() {

    let valido = false ;

    // Expresiones regulares

    let regNombre = /^[A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+(?:-[A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+)?(?: [A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+(?:-[A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+)?)+$/ ; // Debe estar formado por al menos dos palabras separadas por un espacio
    
        if (nombre.value.trim() === "")
            // Si el nombre está vacío
        {
            errorNombre.innerHTML = "El nombre es requerido" ;
            nombre.focus() ;
            nombre.value = "" ;

            valido = false ;
        }

        else if (!regNombre.test(nombre.value))
            // Si el nombre no es válido
        {
            errorNombre.innerHTML = "Debes introducir un nombre válido" ;
            nombre.focus() ;

            valido = false ;
        }
        
        else
            // Si es válido
        {
            errorNombre.innerHTML = "" ;
            valido = true ;
        }


    return valido ;

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

    let valido = false ;

    // Expresión regular

    let regEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,5})+$/ ;


    
    if (email.value.trim() === "")
        // Si el email está vacío
    {
        errorEmail.innerHTML = "El email es requerido" ;
        email.focus() ;
        email.value = "" ;

        valido = false ;
    }

    else if (!regEmail.test(email.value))
        // Si el email no es válido
    {
        errorEmail.innerHTML = "Debes introducir un email válido" ;
        email.focus() ;

        valido = false ;
    }

    else
        // Si el email es válido
    {
        errorEmail.innerHTML = "" ;
        valido = true ;
    }

    return valido ;

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

    let valido = false ;

    // Expresiones regulares

    let min8Caracteres = /^.{8,}$/ ; // Mínimo 8 caracteres
    let max15Caracteres = /^.{8,15}$/ ; // Máximo 15 caracteres
    let contieneMayuscula = /[A-Z]/ ; // Debe contener al menos una mayúscula
    let contieneMinuscula = /[a-z]/ ; // Debe contener al menos una minúscula
    let contieneDigito = /\d/ ; // Debe contener al menos un dígito
    let noContieneEspacios = /^\S+$/ ; // No debe contener espacios
    let contieneCaracterEspecial = /[¡!@#$%^&*(),.¿?":{}|<>_/\\\'\'ºª·€¬=\[\]\+\-";]/ ; // Debe contener al menos un carácter especial ; // Debe contener al menos un carácter especial

    
    if (password.value.trim() === "")
        // Si la contraseña está vacía
    {
        errorPassword.innerHTML = "La contraseña es requerida" ;
        password.focus() ;
        password.value = "" ;
        password.style.backgroundColor = "white" ;

        valido = false ;
    }

    else if (password.value.trim() != "")
        // Si la contraseña no es válida
    {
        if(!min8Caracteres.test(password.value))
            // Si tiene menos de 8 caracteres
        {
            errorPassword.innerHTML = "Debe tener un mínino de 8 caracteres" ;
            password.focus() ;
            password.style.backgroundColor = rojo ;

            valido = false ;
        }

        else if (!max15Caracteres.test(password.value))
            // Si tiene más de 15 caracteres
        {
            errorPassword.innerHTML = "Debe tener un máximo de 15 caracteres" ;
            password.focus() ;
            password.style.backgroundColor = rojo ;

            valido = false ;
        }

        else if (!contieneMayuscula.test(password.value))
            // Si no contiene ninguna mayúscula
        {
            errorPassword.innerHTML = "Debe contener al menos una mayúscula" ;
            password.focus() ;
            password.style.backgroundColor = rojo ;

            valido = false ;
        }

        else if (!contieneMinuscula.test(password.value))
            // Si no contiene ninguna minúscula
        {
            errorPassword.innerHTML = "Debe contener al menos una minúscula" ;
            password.focus() ;
            password.style.backgroundColor = rojo ;

            valido = false ;
        }

        else if (!contieneDigito.test(password.value))
            // Si no contiene ningún dígito
        {
            errorPassword.innerHTML = "Debe contener al menos un dígito" ;
            password.focus() ;
            password.style.backgroundColor = rojo ;

            valido = false ;
        }

        else if (!noContieneEspacios.test(password.value))
            // Si no contiene espacios
        {
            errorPassword.innerHTML = "No debe contener espacios" ;
            password.focus() ;
            password.style.backgroundColor = rojo ;

            valido = false ;
        }

        else if (!contieneCaracterEspecial.test(password.value))
            // Si no contiene ningún carácter especial
        {
            errorPassword.innerHTML = "Debe contener al menos un carácter especial" ;
            password.focus() ;
            password.style.backgroundColor = rojo ;

            valido = false ;
        }

        else
            // Si es válida
        {
            errorPassword.innerHTML = "" ;
            password.style.backgroundColor = verde ;

            valido = true ;
        }

    }

    return valido ;

}



/**
 * Normas validación confirmación contraseña:
 *  - No debe estar vacío. REQUERIDO.
 *  - Debe coincidir con la contraseña introducida.
 */
function validarPasswordRepeticion() {

    let valido = false ;

    
    if (passwordRepetida.value.trim() === "")
        // Si la contraseña no está vacía
    {
        errorPasswordRepetida.innerHTML = "No puede estar en blanco" ;
        passwordRepetida.focus() ;
        passwordRepetida.value = "" ;

        valido = false ;
    }

    else if (passwordRepetida.value !== password.value)
        // Si la contraseña repetida no coincide
    {
        errorPasswordRepetida.innerHTML = "La contraseña no coincide" ;
        passwordRepetida.focus() ;

        valido = false ;
    }

    else
        // Si la contraseña repetida coincide
    {
        errorPasswordRepetida.innerHTML = "" ;
        valido = true ;
    }


    return valido ;

}



/**
 * Normas validaciones fecha:
 *  - Debe existir.
 *  - Debe ser mayor de edad.
 *  - El usuario puede tener hasta 120 años.
 */

function validarFecha(){

    let valido = false ;


    let fechaNacimiento = new Date(fecha.value);
    fechaNacimiento.setHours(0) ;
    
    // Obtengo la fecha actual
    let fechaActual = new Date() ;

    // Calcular la diferencia en milisegundos entre las dos fechas
    let diferenciaMilisegundos = fechaActual - fechaNacimiento;
    

    // Calcular la edad dividiendo la diferencia en milisegundos por el número de milisegundos en un año
    let edad = Math.floor(diferenciaMilisegundos / (1000 * 60 * 60 * 24 * 365.25));

    

    if ((edad >= 18 && edad < 120))
        // Si la fecha es válida (es mayor de edad y se supone vivo)
    {
        alert('La persona es mayor de edad.');
        fecha.innerHTML = "" ;

        valido = true ;
    }

    else if (edad >= 120)
        // Si es probable que esté muerto
    {
        alert("No creo que con esa edad estés vivo...") ;
        
        valido = false ;
    }

    else if (fechaNacimiento == "Invalid Date")
        // Si la fecha no es válida
    {
        errorFecha.innerHTML = "Debes introducir una fecha válida" ;

        valido = false ;
    }
    else
        // Si es menor de edad
    {
        alert('La persona no es mayor de edad.') ;

        valido = false ;
    }


    return valido ;
    
}



/**
 * Normas validaciones DNI:
 *  - Debe tener un formato válido (los guiones serán omitidos). Es decir:
 *      - Debe tener 8 dígitos.
 *      - Debe tener una letra y que sea válida.
 */

function validarDNI() {

    let valido = false ;


    // Expresión regular

    let regexDNI = /^\d{8}[a-zA-Z]$/ ; // Validación DNI
    let regexDNICerosOmitidos = /^\d{1,7}[a-zA-Z]$/ ; // Validación alternativa que servirá para añadir los ceros omitidos

    
        if (dni.value.trim() === "") 
            // Si el DNI está vacío
        {
            dni.focus() ;
            dni.value = "" ;

            valido = false ;
        }

        else if (dni.value.trim() !== "") // Si no está vacío
        {
            dni.value = eliminaGuiones(dni.value) ; // Le quita los guiones
            dni.innerHTML = dni.value ;

            if (!regexDNI.test(dni.value)) 
                // Si el formato no es válido
            {
                if(regexDNICerosOmitidos.test(dni.value))
                    // Si faltan ceros pero puede que sea válido
                {
                    errorDni.innerHTML = "Te falta añadir los ceros" ;

                    valido = false ;
                }

                else
                    // Si el formato no es válido nuevamente
                {
                    errorDni.innerHTML = "Debes introducir un DNI válido" ;
                    dni.focus() ;

                    valido = false ;
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

                valido = true ;
    
                if (letraDNI != letraCalculada)
                    // Si la letra del DNI no coincide con el cálculo
                {
                    errorDni.innerHTML = "La letra del DNI no es válida" ;

                    valido = false ;
                }
            }
        }

        else
        {
            errorDni.innerHTML = "" ;
            valido = false ;
        }


        return valido ;

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



// ---------------- EVENTOS ------------------

password.addEventListener("input", validarPassword, false) ;

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
