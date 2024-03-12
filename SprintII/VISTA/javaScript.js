
/**HEADER. Está así y no con fetch porque daba problemas con el https. Aún así supongo que habrá 
 * que implementarlo en php
 */
document.addEventListener("DOMContentLoaded", function() {
    var headerHTML = `
    <header class="container-fluid">
    <div class="row align-items-center">
    <div class="navbar navbar-expand-sm navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        <!-- Logo a la izquierda para todas las pantallas -->
        <div class="col-3 col-md-3 col-lg-3 col-xl-3">
            <a href="#" class="navbar-brand">
                <img src="img/logo_transparente2.png" alt="Logo" class="img-fluid">
            </a>
        </div>
        <div class="col-12 d-none d-md-flex col-lg-6 col-xl-6 justify-content-center">
          <form class="input-group" role="search">
          <!-- Selector de categorías -->
              <select class="form-select btn btn-dark" aria-label="Categorías">
                  <option selected>Todas las categorías</option>
                  <option value="1">Muebles</option>
                  <option value="2">Decoración</option>
                  <option value="3">Arte</option>
                  <option value="4">Iluminación</option>
              </select>
              <!-- Entrada de búsqueda -->
              <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscador de antiguedades" aria-describedby="buscador" style="width: 40%;">
              <!-- Botón de búsqueda -->
              <button type="submit" class="btn btn-dark" name="buscador" id="buscador" role="button" aria-label="Buscar">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                  </svg>
              </button>
          </form>
      </div>
      

        <!-- Iconos de usuario y carrito a la derecha para todas las pantallas -->
        <div class="col-9 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-end">
            <a id="logado" href="form_logado.html" class="btn">
                <button id="logado" class="btn" type="button">
                    <i class="fas fa-user-circle"></i>
                </button>
            </a>
            <a id="cart" class="btn">
                <button id="cart-icon" class="btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count">0</span>
                </button>
                <div class="cart-dropdown" id="cartModal">
                    <h4>Carrito de Compra</h4>
                    <ul id="cart-items"></ul>
                    <p>Total: €<span id="cart-total">0</span></p>
                    <button id="clear-cart">Vaciar Carrito</button>
                    <button id="clear-cart">Comprar</button>
                </div>
            </a>
        </div>

        <!-- Buscador solo para móviles, debajo de los iconos -->
        <div class="col-12 d-md-none mt-3">
             <!-- Buscador centrado para pantallas grandes, oculto en móviles -->
                 <!-- buscador -->
                 <div class=" d-none d-md col-xl-6 col-lg-6 col-md-4 col-sm-4 d-flex justify-content-center">
                  <form class="input-group" role="search">
                      <!-- Selector de categorías -->
                      <select class="form-select btn btn-dark" aria-label="Categorías">
                          <option selected>Todas las categorías</option>
                          <option value="1">Muebles</option>
                          <option value="2">Decoración</option>
                          <option value="3">Arte</option>
                          <option value="4">Iluminación</option>
                      </select>
                      <!-- Entrada de búsqueda -->
                      <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscador de antiguedades" aria-describedby="buscador">
                      <!-- Botón de búsqueda -->
                      <button type="submit" class="btn btn-dark" name="buscador" id="buscador" role="button" aria-label="Buscar">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                          </svg>
                      </button>
                  </form>
              </div>
    </div>
</header>
<!-- Barra de navegación debajo del logo y los iconos, visible solo en lg y mayores -->
<nav class="navbar navbar-expand-sm navbar-light bg-light">
<div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="home.html">Inicio</a>
            </li>
        </ul>
        <ul class="navbar-nav me-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Tienda
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item smaller-text" href="mueblesTienda.html">Muebles</a></li>
                    <li><a class="dropdown-item smaller-text" href="decoracionTienda.html">Decoración</a></li>
                    <li><a class="dropdown-item smaller-text" href="arteTienda.html">Arte</a></li>
                    <li><a class="dropdown-item smaller-text" href="iluminación.html">Iluminación</a></li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav me-xl-5">
            <li class="nav-item">
                <a class="nav-link active" href="SobreNosotros.html">Sobre Nosotros</a>
            </li>
        </ul>
        <ul class="navbar-nav me-xl-5">
            <li class="nav-item">
                <a class="nav-link active" href="contacto.html">Contacto</a>
            </li>
        </ul>
    </div>
</div>
</nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="javaScript.js"></script>    
</body>
    </html>


    `;

    document.getElementById("header-container").innerHTML = headerHTML;
});


/**HEADER. Está así y no con fetch porque daba problemas con el https. Aún así supongo que habrá 
 * que implementarlo en php
 */
document.addEventListener("DOMContentLoaded", function() {
    var footerHTML = `
  
    <footer class="container-fluid mt-5 bg-light">
        <div class="row align-items-center text-center">
            <div class="col-4 col-md-4">
              <ul class="list-unstyled">
                <h5>Legalidad</h5>
                <li><a id="privacidad" href="politicaPrivacidad.html" class="text-decoration-none text-dark">Política de Privacidad</a></li>
                <li><a id="cookies" href="cookies.html" class="text-decoration-none text-dark">Cookies</a></li>
                <li><a id="avisoLegal" href="avisolegal.html" class="text-decoration-none text-dark">Aviso legal</a></li>
            </ul>
            </div>
          <div class="col-4 col-md-4">
            <h5>Redes Sociales</h5>
            <div class="social-icons">
              <a href="#" class="fab fa-instagram"></a>
              <a href="#" class="fab fa-facebook"></a>
              <a href="#" class="fab fa-twitter"></a>                
            </div>
            <img class="imagen-producto mt-2" src="img/images.png" alt="Producto 2">
          </div>
          <div class="col-4">
            <h5>Tienda</h5>
            <ul class="list-unstyled">
              <li><a href="mueblesTienda.html" class="text-decoration-none text-dark">Muebles</a></li>
              <li><a href="decoracionTienda.html" class="text-decoration-none text-dark">Decoración</a></li>
              <li><a href="arteTienda.html" class="text-decoration-none text-dark">Arte</a></li>
              <li><a href="iluminación.html" class="text-decoration-none text-dark">Iluminación</a></li>
            </ul>
        </div>
    </div>
      </footer>


    `;

    document.getElementById("footer-container").innerHTML = footerHTML;
});

/**FORMULARIO */
document.addEventListener("DOMContentLoaded", function () {

    const teAyudamosButton = document.getElementById("logado");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();

        const windowFeatures = "width=800,height=800,top=100,left=350";

        window.open("form_logado.html", "_blank", windowFeatures);
    });
});
document.addEventListener("DOMContentLoaded", function () {

    const registrate = document.getElementById("registro");

    registrate.addEventListener("click", function (event) {
        event.preventDefault();

        const windowFeatures = "width=800,height=800,top=100,left=350";

        window.open("form_registro.html", "_blank", windowFeatures);
    });
});

document.addEventListener("DOMContentLoaded", function () {

    const teAyudamosButton = document.getElementById("privacidad");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();

        const windowFeatures = "width=800,height=800,top=100,left=350";

        window.open("politicaPrivacidad.html", "_blank", windowFeatures);
    });
});

//añado cookies. hay que modificar el código del footer para poner un ID
document.addEventListener("DOMContentLoaded", function () {

    const teAyudamosButton = document.getElementById("cookies");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();

        const windowFeatures = "width=800,height=800,top=100,left=350";

        window.open("cookies.html", "_blank", windowFeatures);
    });
});

//añado aviso legal.
document.addEventListener("DOMContentLoaded", function () {

    const teAyudamosButton = document.getElementById("avisoLegal");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();

        const windowFeatures = "width=800,height=800,top=100,left=350";

        window.open("avisolegal.html", "_blank", windowFeatures);
    });
});



// Espera a que el contenido del DOM esté completamente cargado antes de ejecutar el script
document.addEventListener('DOMContentLoaded', function () {
    // Selecciona todos los botones de "añadir al carrito"
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    // Selecciona el ícono del carrito
    const cartIcon = document.getElementById('cart-icon');
    // Selecciona el elemento que muestra el conteo de los ítems en el carrito
    const cartCount = document.getElementById('cart-count');
    // Selecciona el modal del carrito para mostrar los productos seleccionados
    const cartModal = document.getElementById('cartModal');
    // Selecciona el elemento donde se mostrarán los ítems del carrito
    const cartItemsElement = document.getElementById('cart-items');
    // Selecciona el elemento que muestra el total del carrito
    const cartTotalElement = document.getElementById('cart-total');
    // Selecciona el botón para vaciar el carrito
    const clearCartButton = document.getElementById('clear-cart');
    // Inicializa el carrito como un array vacío
    let cart = [];

    // Añade un evento a cada botón de "añadir al carrito"
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Obtiene los detalles del producto al que pertenece el botón
            const product = button.parentElement;
            const name = product.querySelector('h4').innerText;
            const price = parseFloat(product.querySelector('.price').innerText.slice(1));
            const quantity = parseInt(product.querySelector('input').value);

            // Añade el producto al carrito
            addToCart(name, price, quantity);
            // Actualiza la visualización del carrito
            updateCartDisplay();
        });
    });

    // Muestra u oculta el modal del carrito al hacer clic en el ícono del carrito
    cartIcon.addEventListener('click', function () {
        cartModal.style.display = cartModal.style.display === 'block' ? 'none' : 'block';
    });

    // Vacía el carrito al hacer clic en el botón de "Vaciar Carrito"
    clearCartButton.addEventListener('click', function () {
        cart = [];
        updateCartDisplay();
        updateCartCount();
        saveCartToLocalStorage();
    });

    // Añade un producto al carrito o actualiza su cantidad si ya existe
    function addToCart(name, price, quantity) {
        const existingItemIndex = cart.findIndex(item => item.name === name);
        if (existingItemIndex !== -1) {
            cart[existingItemIndex].quantity += quantity;
        } else {
            cart.push({ name, price, quantity });
        }
        updateCartCount();
        saveCartToLocalStorage();
    }

    // Actualiza el contador de ítems del carrito
    function updateCartCount() {
        let totalCount = 0;
        cart.forEach(item => {
            totalCount += item.quantity;
        });
        cartCount.innerText = totalCount;
    }

    // Actualiza la visualización del carrito sin usar innerHTML para cumplir con los requisitos técnicos
    function updateCartDisplay() {
        while (cartItemsElement.firstChild) {
            cartItemsElement.removeChild(cartItemsElement.firstChild);
        }
        let totalPrice = 0;
        cart.forEach((item, index) => {
            const li = document.createElement('li');
            li.textContent = `${item.name} x ${item.quantity} - ${item.price * item.quantity}€`;

            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Eliminar';
            deleteButton.addEventListener('click', function() {
                removeItemFromCart(index);
            });

            li.append(deleteButton);
            cartItemsElement.append(li);

            totalPrice += item.price * item.quantity;
        });

        cartTotalElement.textContent = totalPrice.toFixed(2);
    }

    // Guarda el estado actual del carrito en localStorage
    function saveCartToLocalStorage() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Carga los ítems del carrito desde localStorage al recargar la página
    function loadCart() {
        const savedCart = JSON.parse(localStorage.getItem('cart')) || [];
        cart = savedCart;
        updateCartDisplay();
        updateCartCount();
    }

    // Elimina un ítem del carrito basado en su índice
    function removeItemFromCart(index) {
        cart.splice(index, 1);
        updateCartDisplay();
        updateCartCount();
        saveCartToLocalStorage();
    }

    // Carga el carrito al iniciar la página
    loadCart();
});

    // Buscador??? como creo que debería quedar con la api

    // Define una función asincrónica para obtener productos
async function fetchProducts() {
    try {
      // Intenta hacer una petición a la API para obtener los productos
      const response = await fetch('https://jsonplaceholder.typicode.com/products');
      // Convierte la respuesta a formato JSON
      const data = await response.json();
      // Mapea cada producto obtenido a una instancia de la clase Product y almacénalos en un arreglo
      const products = data.map(product => new Product(product.id, product.name, product.description, product.price));
      // Muestra los productos en la interfaz de usuario.
      displayProducts(products);
    } catch (error) {
      // Si ocurre un error durante la petición o procesamiento de datos, muestra el error en la consola
      console.error('Error al obtener los productos:', error);
    }
  }

  function displayProducts(products) {
    const gallery = document.getElementById('product-gallery'); // Obtiene el contenedor de la galería de productos por su ID.
    gallery.innerHTML = ''; // Limpia el contenido actual de la galería antes de agregar nuevos productos, esto evita duplicados.
    products.forEach(product => { // Itera sobre cada producto en el array de productos.
      const productElement = document.createElement('div'); // Crea un nuevo elemento <div> para cada producto.
      // Establece el contenido HTML interno del div con el nombre y la descripción del producto.
      productElement.innerHTML = `<h4>${product.name}</h4><p>${product.description}</p>`;
      gallery.appendChild(productElement); // Añade el elemento de producto al contenedor de la galería.
    });
  }
  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Previene el comportamiento por defecto del formulario, que es recargar la página.
    const searchTerm = document.querySelector('input[type="text"]').value.toLowerCase(); // Obtiene el término de búsqueda del campo de entrada, convirtiéndolo a minúsculas para hacer la búsqueda insensible a mayúsculas.
    // Filtra los productos que coincidan con el término de búsqueda en su nombre o descripción.
    const filteredProducts = allProducts.filter(product => 
      product.name.toLowerCase().includes(searchTerm) || 
      product.description.toLowerCase().includes(searchTerm)
    );
    displayProducts(filteredProducts); // Muestra los productos filtrados en la galería.
  });
    

// Llamada a fetchProducts para cargar los productos cuando sea necesario
fetchProducts();

// Simulación de la comprobación del estado de logueo del usuario. No se puede hacer sin el logueo de la parte servidora
    function checkUserLoggedIn() {
        // Aquí, suponemos que 'userLoggedIn' es true si el usuario está logado, y false si no lo está.
        // Cuando esté hay que modificarlo con la lógica que tengan los compañeros implementada.
        // Con este código se supone que el botón de cerrar sesión aparecerá solamente cuando el usario esté logueado. 
        var userLoggedIn = true; 
  
        if(userLoggedIn) {
          document.getElementById('logoutSection').style.display = 'block';
        }
      }
  
      window.onload = checkUserLoggedIn;
  

