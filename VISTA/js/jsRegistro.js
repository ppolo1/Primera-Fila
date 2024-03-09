//CLIENTE

// ELEMENTOS DEL DOM

let nombre = document.getElementById("nombre") ; // Nombre
let apellido = document.getElementById("apellido") ; // Primer apellido
let apellido2 = document.getElementById("apellido2") ; // Segundo apellido
let password = document.getElementById("contrasena") ; // Contraseña
let passwordRepetida = document.getElementById("confirmarContrasena") ; // Confirmar contraseña
let form = document.getElementById("formularioRegistro") ; // Formulario
let parrafo = document.getElementById("mensajeRegistro") ; // Mensaje de registro
let email = document.getElementById("emailInput"); // Email
let dni = document.getElementById("dni"); // DNI
let fecha = document.getElementById("fechaNacimiento") ; // Fecha de nacimiento

let listaRequisitosPassword = document.getElementById("listaRequisitosPassword") ; // Lista de requisitos de la contraseña
listaRequisitosPassword.style.display = "none" ;
let caracteresMinimos = document.getElementById("caracteresMinimos") ;
let caracteresMaximos = document.getElementById("caracteresMaximos") ;
let mayusculaObligatoria = document.getElementById("mayusculaObligatoria") ;
let minusculaObligatoria = document.getElementById("minusculaObligatoria") ;
let digitoObligatorio = document.getElementById("digitoObligatorio") ;
let espaciosProhibidos = document.getElementById("espaciosProhibidos") ;
let caracterEspecialObligatorio = document.getElementById("caracterEspecialObligatorio") ;

// MENSAJES DE ERROR

let errorNombre = document.getElementById("errorNombre") ; // Nombre
let errorApellido = document.getElementById("errorApellido") ; // 
let errorEmail = document.getElementById("errorEmail") ; // Email
let errorPassword = document.getElementById("errorPassword") ; // Contraseña
let errorPasswordRepetida = document.getElementById("errorPasswordRepetida") ; // Confirmación de contraseña
let errorDni = document.getElementById("errorDni") ; // DNI
let errorFecha = document.getElementById("errorFecha") ; // Fecha de nacimiento


// Colores

let rojo = "#FA7575" ;
let verde = "#B8FAA1" ;


// --------------- VALIDACIONES --------------------


/**
 * Normas validación nombre:
 *  - No puede estar vacío. REQUERIDO.
 *  - Debe contener una palabra o dos como máximo.
 *  - Si hay dos palabras, las palabras deben estar separadas por un único espacio.
 *  - No se permite el guion (-) entre palabras. Ejemplo: Martín-Arroyo
 *  - Se permiten tildes y otros caracteres comunes en los nombres. Ejemplos válidos serían: Pière, Adrián o Gümba.
 *  - Máximo de 50 caracteres
 * 
 * @returns Devuelve true si el nombre es válido.
 */
function validarNombre() {
    let nombre = document.getElementById("nombre"); 
    let valido = false;
    // Expresión regular modificada para validar 1 o 2 palabras sin guiones y con tildes permitidas
    let regNombre = /^[A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+(?: [A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+)?$/;
    let dobleEspacio = /  /g ; // No se permiten dos espacios seguidos
    let limiteCaracteres = /^.{1,50}$/;

    if (nombre.value.trim() === "") {
        errorNombre.innerHTML = "<br>El nombre es requerido";
        nombre.focus();
        valido = false;
    } else if (!limiteCaracteres.test(nombre.value)) {
        errorNombre.innerHTML = "El máximo son 50 caracteres";
        nombre.focus();
        valido = false;
             }
   else if(dobleEspacio.test(nombre.value))
            // Si se introducen dos espacios seguidos
        {
            errorNombre.innerHTML = "No se permiten dos espacios seguidos" ;
            nombre.focus() ;

            valido = false ;
        
    } else if (!regNombre.test(nombre.value)) {
        errorNombre.innerHTML = "El nombre no es valido. Asegúrese de que esté bien formado y no incluya guiones.";
        nombre.focus();
        valido = false;
    } else {
        errorNombre.innerHTML = "";
        valido = true;
    }

    return valido;
}

/**
 * Normas validación apellido:
 *  - No puede estar vacío. REQUERIDO.
 *  - Debe contener mínimo una palabra y máximo dos.
 *  - Las palabras deben estar separadas por un único espacio.
 *  - Se permite el guion (-) entre palabras. Ejemplo: Martín-Arroyo
 *  - Se permiten tildes y otros caracteres comunes en los nombres. Ejemplos válidos serían: Pière, Adrián o Gümba.
 *  - Máximo de 50 caracteres
 * 
 * @returns Devuelve true si el nombre es válido.
 */

function validarApellido() {

    let apellido = document.getElementById("apellido"); 
    let dobleEspacio = /  /g ; // No se permiten dos espacios seguidos
    let valido = false;

    // Expresión regular 
    let regApellido = /^[A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+([- ][A-ZÁÉÍÓÚÜÑa-záéíóúüñ]+)?$/;
    let limiteCaracteres = /^.{1,50}$/;

    if (apellido.value.trim() === "") {
        // Si el apellido está vacío
        errorApellido.innerHTML = "<br>Un apellido es obligatorio.";
        apellido.focus();
        valido = false;
    } else if (!limiteCaracteres.test(apellido.value)) {
        // Si se superan los 50 caracteres
        errorApellido.innerHTML = "El máximo son 50 caracteres.";
        apellido.focus();
        valido = false;
    } else if(dobleEspacio.test(apellido.value)) {
             // Si se introducen dos espacios seguidos
             errorApellido.innerHTML = "No se permiten dos espacios seguidos" ;
             ape.focus() ;
             valido = false ;
    } else if (!regApellido.test(apellido.value)) {
        // Si el apellido no es válido según la expresión regular
        errorApellido.innerHTML = "El apellido introducido no es válido. Revise la ortografía y los guiones.";
        apellido.focus();
        valido = false;
    } else {
        // Si es válido
        errorApellido.innerHTML = "";
        valido = true;
    }

    return valido;
}


/**
 * Normas validación email:
 *  - No puede estar vacío. REQUERIDO.
 *  - No debe contener caracteres no válidos, como la ñ.
 *  - Debe contener una @ en su sitio correspondiente.
 *  - Debe tener su estructura habitual: nombre + dominio.
 *  - Debe ser un dominio válido. ".c" no sería válido.
 * 
 * @returns Devuelve true si el email es válido.
 */
function validarEmail() {

    let valido = false ;

    // Expresión regular

    let regEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,5})+$/ ;


    
    if (email.value.trim() === "")
        // Si el email está vacío
    {
        errorEmail.innerHTML = "<br>El email es requerido" ;
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

 * @returns Devuelve true si la contraseña tiene el formato válido.
 */
function validarPassword() {


    let valido = false ;

    let caracteresMinimosValido = false ;
    let caracteresMaximosValido = false ;
    let mayusculaObligatoriaValido = false ;
    let minusculaObligatoriaValido = false ;
    let digitoObligatorioValido = false ;
    let espaciosProhibidosValido = false ;
    let caracterEspecialObligatorioValido = false ;

    
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
        password.focus() ;
        password.value = "" ;

        valido = false ;
    }

    else if (password.value.trim() != "")
        // Si la contraseña no está vacía
    {
        if(!min8Caracteres.test(password.value))
            // Si tiene menos de 8 caracteres
        {
            password.focus() ;

            valido = false ;
        }

        else if (!max15Caracteres.test(password.value))
            // Si tiene más de 15 caracteres
        {
            password.focus() ;

            valido = false ;
        }

        else if (!contieneMayuscula.test(password.value))
            // Si no contiene ninguna mayúscula
        {
            password.focus() ;

            valido = false ;
        }

        else if (!contieneMinuscula.test(password.value))
            // Si no contiene ninguna minúscula
        {
            password.focus() ;

            valido = false ;
        }

        else if (!contieneDigito.test(password.value))
            // Si no contiene ningún dígito
        {
            password.focus() ;

            valido = false ;
        }

        else if (!noContieneEspacios.test(password.value))
            // Si no contiene espacios
        {
            password.focus() ;

            valido = false ;
        }

        else if (!contieneCaracterEspecial.test(password.value))
            // Si no contiene ningún carácter especial
        {
            password.focus() ;

            valido = false ;
        }

        else
            // Si es válida
        {
            valido = true ;
        }

    }


    // ------- Gestión de la lista de errores -------



    // Mínimo de caracteres

    if(min8Caracteres.test(password.value))
        // Si tiene más de 8 caracteres
    {
        caracteresMinimos.style.color = "green" ;
    }
    else
    {
        caracteresMinimos.style.color = "red" ;
    }

    // Máximo de caracteres

    if (max15Caracteres.test(password.value))
        // Si tiene menos de 15 caracteres
    {
        caracteresMaximos.style.color = "green" ;
    }
    else
    {
        caracteresMaximos.style.color = "red" ;
    }

    // Mayúscula obligatoria

    if (contieneMayuscula.test(password.value))
        // Si contiene alguna mayúscula
    {
        mayusculaObligatoria.style.color = "green" ;
    }
    else
    {
        mayusculaObligatoria.style.color = "red" ;
    }

    // Minúscula obligatoria

    if (contieneMinuscula.test(password.value))
        // Si contiene alguna minúscula
    {
        minusculaObligatoria.style.color = "green" ;
    }
    else
    {
        minusculaObligatoria.style.color = "red" ;
    }

    // Dígito obligatorio

    if (contieneDigito.test(password.value))
        // Si contiene algún dígito
    {
        digitoObligatorio.style.color = "green" ;
    }
    else
    {
        digitoObligatorio.style.color = "red" ;
    }

    // Espacios prohibidos

    if (noContieneEspacios.test(password.value))
        // Si no contiene espacios
    {
        espaciosProhibidos.style.color = "green" ;
    }
    else
    {
        espaciosProhibidos.style.color = "red" ;
    }

    // Caracter especial obligatorio

    if (contieneCaracterEspecial.test(password.value))
        // Si contiene algún carácter especial
    {
        caracterEspecialObligatorio.style.color = "green" ;
    }
    else
    {
        caracterEspecialObligatorio.style.color = "red" ;
    }

    // Contraseña validada

    if (valido)
        // Si la contraseña es válida
    {
        listaRequisitosPassword.style.display = "none" ;
        errorPassword.innerHTML = "" ;
    }

    // Contraseña vacía
    
    if (password.value.trim() === "")
        // Si la contraseña está vacía
    {
        listaRequisitosPassword.style.display = "none" ; // Oculta la lista
        errorPassword.innerHTML = "La contraseña es requerida" ;
    }
    else if ( (password.value.trim() != "") && !valido)
        // Si la contraseña no está vacía y no es válida
    {
        listaRequisitosPassword.style.display = "block" ; // Muestra la lista
        errorPassword.innerHTML = "" ;
    }

    
    return valido ;

}



/**
 * Normas validación confirmación contraseña:
 *  - No debe estar vacío. REQUERIDO.
 *  - Debe coincidir con la contraseña introducida.
 * 
 * @returns Devuelve true si la contraña de confirmación coincide con la original.
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
 * 
 * @returns Devuelve true si la fecha la fecha existe y el usuario es mayor de edad.
 */
function validarFecha(){

    let valido = true; // Establecer como válido por defecto

    let fechaNacimiento = document.getElementById("fechaNacimiento").value;

    // Verificar si el campo de fecha de nacimiento está vacío
    if (fechaNacimiento.trim() === "") {
        errorFecha.innerHTML = ""; // Limpiar el mensaje de error si está vacío
        return valido; // Devolver válido si está vacío
    }

    fechaNacimiento = new Date(fechaNacimiento);
    fechaNacimiento.setHours(0);

    let fechaActual = new Date();

    if (fechaNacimiento > fechaActual) {
        errorFecha.innerHTML = "La fecha de nacimiento no puede ser mayor al día de hoy.";
        valido = false;
    } else {
        let diferenciaMilisegundos = fechaActual - fechaNacimiento;
        let edad = Math.floor(diferenciaMilisegundos / (1000 * 60 * 60 * 24 * 365.25));

        if (edad >= 18 && edad <=120) {
            errorFecha.innerHTML = "";
            valido = true;
        } else if (fechaNacimiento.toString() === "Invalid Date") {
            errorFecha.innerHTML = "Debes introducir una fecha válida";
            valido = false;
        }else if (edad>120) {
            errorFecha.innerHTML = "La edad no puede ser mayor a 120 años";
            valido = false;
        } 
        else {
            errorFecha.innerHTML = "Debes ser mayor de edad";
            valido = false;
        }
    }

    return valido;
}




/**
 * Normas validaciones DNI:
 *  - Debe tener un formato válido (los guiones serán omitidos). Es decir:
 *      - Debe tener 8 dígitos.
 *      - Debe tener una letra y que sea válida.
 * 
 * @returns Devuelve true si el DNI es válido.
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



function validarFormulario() {

    let valido = false;
    
    let DNIValido = validarDNI();
    let fechaValida = validarFecha();
    let confirmacionContrasenaValida = validarPasswordRepeticion();
    let contrasenaValida = validarPassword();
    let emailValido = validarEmail();
    let nombreValido = validarNombre();
    let apellidoValido= validarApellido();

    // Verificar si la fecha de nacimiento es obligatoria y está presente
    let fechaNacimientoPresente = document.getElementById("fechaNacimiento").value.trim() !== "";

    if ((DNIValido || nombreValido || apellidoValido ) && (fechaNacimientoPresente ? fechaValida : true) && confirmacionContrasenaValida && contrasenaValida && emailValido) {
        // Si las partes obligatorias del formulario son válidas...
        valido = true; // ... valida el formulario.
    }

    return valido;
}



function cambiaColorInput(elemento, esValido) {
    
    if (elemento.value == "")
    {
        elemento.style.backgroundColor = "white" ;
    }
    else if (esValido)
    {
        elemento.style.backgroundColor = verde ;
    }
    else
    {
        elemento.style.backgroundColor = rojo ;
    }
}


    // ------------------ OTRO MÉTODOS ----------------------

/**
 * Función que elimina los guiones de una cadena.
 * 
 * @param {*} cadena Cadena de la que se quiere eliminar el guion 
 * @returns Devuelva la cadena sin guiones
 */
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



function comenzar() {

    form.addEventListener("submit", e =>{

        e.preventDefault() ;

        if(validarFormulario())
        {
            parrafo.style.color = "black" ;
            parrafo.innerHTML = "Se ha enviado el formulario" ;
        }
        else
        {
            parrafo.style.color = "red" ;
            parrafo.innerHTML = "Hay errores en el formulario" ;
        }

    }, false) ;
    
}

nombre.addEventListener("input", function() {
    cambiaColorInput(nombre, validarNombre()) ;
}, false) ;

apellido.addEventListener("input", function() {
    cambiaColorInput(apellido, validarApellido()) ;
}, false) ;


email.addEventListener("input", function() {
    cambiaColorInput(email, validarEmail()) ;
}, false) ;

password.addEventListener("input", function() {
    cambiaColorInput(password, validarPassword()) ;
}, false) ;

passwordRepetida.addEventListener("input", function() {
    cambiaColorInput(passwordRepetida, validarPasswordRepeticion()) ;
}, false) ;

dni.addEventListener("input", function() {
    cambiaColorInput(dni, validarDNI()) ;
}, false) ;

window.addEventListener("load", comenzar, false) ;

