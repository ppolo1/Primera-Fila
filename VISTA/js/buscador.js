// VARIABLES GLOBALES

let textoBusqueda = null ;
const divBuscador = document.getElementById('busqueda') ;

document.addEventListener('DOMContentLoaded', () => {

    cargarTodosProductos() ;
    const botonBusqueda = document.getElementById('botonBusqueda') ;
  const buscador = document.getElementById('inputBuscador') ;
  botonBusqueda.addEventListener("click", () => {cargarTodosProductos()} ) ;
  buscador.addEventListener("keyup", llamadaAPI) ;  

  function llamadaAPI(event){
      
    divBuscador.innerHTML = "" ;
    textoBusqueda = event.target.value ;

    if(textoBusqueda == null){
        textoBusqueda = "null" ;
    }

    const headers = new Headers();
    headers.append('pragma', 'no-cache');
    headers.append('cache-control', 'no-cache');
    const url = `http://localhost/Primera-Fila/API/productosAPI.php?pagina=busqueda&busqueda=${textoBusqueda.toLocaleLowerCase().trim()}`;

    fetch(url, {headers},{method:'GET'})
        
   // .then(response => console.log(response))
    .then(response => response.json())
    //.then(datos=>console.log(typeof(datos)))
    // .then(datos=>console.log(datos))
    .then(datos => cargarProductos(datos))
    .catch((error)=>{
        console.log(error);
    })
      
    }

  function cargarProductos(datos){
    datos.datosConsultaProductos.forEach(elementos => {
        const producto = pintarProducto(elementos);
        divBuscador.appendChild(producto) ;
    })}

    function cargarTodosProductos() {
        
        console.log("Este es el console log del principio de cargarTodosProductos") ;
        console.log(textoBusqueda) ;

        // divBuscador.innerHTML = "" ;

        if(textoBusqueda == null){
            textoBusqueda = "null" ;
        }

        const headers = new Headers();
        headers.append('pragma', 'no-cache');
        headers.append('cache-control', 'no-cache');
        const url = `http://localhost/Primera-Fila/API/productosAPI.php?pagina=busqueda&busqueda=${textoBusqueda.toLocaleLowerCase().trim()}`;

        fetch(url, {headers},{method:'GET'})
            
       // .then(response => console.log(response))
        .then(response => response.json())
        //.then(datos=>console.log(typeof(datos)))
        // .then(datos=>console.log(datos))
        .then(datos => cargarProductos(datos))
        .catch((error)=>{
            console.log(error);
        })
    }

    function pintarProducto(objetoProducto) {

        const divCol = document.createElement('div') ;
        divCol.className = "col-xl-3 col-md-6 col-12 m-1 d-flex flex-column" ;
        const imgProducto = document.createElement('img') ;
        imgProducto.src = "VISTA/img/" + objetoProducto.imagen;
        // Aquí iría el alt
        const titulo = document.createElement('h4') ;
        titulo.textContent = objetoProducto.nombre ;
        const precio = document.createElement('p') ;
        precio.className = "price" ;
        precio.textContent =  + objetoProducto.precio + "€" ;
        const input = document.createElement('input') ;
        input.type = "number" ;
        input.min = 1 ;
        input.max = objetoProducto.stock ;
        input.value = 1 ;
        const boton = document.createElement('button') ;
        boton.className = "add-to-cart m-2" ;
        boton.textContent = "Añadir al Carrito" ;

        divCol.appendChild(imgProducto) ;
        divCol.appendChild(titulo) ;
        divCol.appendChild(precio) ;
        divCol.appendChild(input) ;
        divCol.appendChild(boton) ;

        return divCol ;
        
    }

/*       <div class="col-xl-3 col-md-6 col-12 m-1 d-flex flex-column">
            <img src="img/arte2.jpg" alt="Producto 2">
            <h4>Lámina Virgen y niño</h4>
            <p class="price">€1125</p>
            <input type="number" min="1" value="1">
            <button class="add-to-cart m-2">Añadir al Carrito</button>
        </div> */
})