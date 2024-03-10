
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

        window.open("form_logado", "_blank", windowFeatures);
    });
});
document.addEventListener("DOMContentLoaded", function () {

    const registrate = document.getElementById("registro");

    registrate.addEventListener("click", function (event) {
        event.preventDefault();

        const windowFeatures = "width=800,height=800,top=100,left=350";

        window.open("form_registro", "_blank", windowFeatures);
    });
});

document.addEventListener("DOMContentLoaded", function () {

    const teAyudamosButton = document.getElementById("privacidad");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();

        const windowFeatures = "width=800,height=800,top=100,left=350";

        window.open("politicaPrivacidad", "_blank", windowFeatures);
    });
});

//añado cookies. hay que modificar el código del footer para poner un ID
document.addEventListener("DOMContentLoaded", function () {

    const teAyudamosButton = document.getElementById("cookies");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();

        const windowFeatures = "width=800,height=800,top=100,left=350";

        window.open("cookies", "_blank", windowFeatures);
    });
});

//añado aviso legal.
document.addEventListener("DOMContentLoaded", function () {

    const teAyudamosButton = document.getElementById("avisoLegal");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();

        const windowFeatures = "width=800,height=800,top=100,left=350";

        window.open("avisolegal", "_blank", windowFeatures);
    });
});



/**CARRITO */
document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartIcon = document.getElementById('cart-icon');
    const cartCount = document.getElementById('cart-count');
    const cartModal = document.getElementById('cartModal');
    const cartItemsElement = document.getElementById('cart-items');
    const cartTotalElement = document.getElementById('cart-total');
    const clearCartButton = document.getElementById('clear-cart');
    let cart = [];

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            const product = button.parentElement;
            const name = product.querySelector('h4').innerText;
            const price = parseFloat(product.querySelector('.price').innerText.slice(1)); 
            const quantity = parseInt(product.querySelector('input').value);

            addToCart(name, price, quantity);
            updateCartDisplay();
        });
    });

    cartIcon.addEventListener('click', function () {
        if (cartModal.style.display === 'block') {
            cartModal.style.display = 'none';
        } else {
            cartModal.style.display = 'block';
        }
    });

    clearCartButton.addEventListener('click', function () {
        cart = [];
        updateCartDisplay();
        updateCartCount();
        saveCartToLocalStorage(); // Actualizar el almacenamiento local después de vaciar el carrito
    });

    function addToCart(name, price, quantity) {
        const existingItemIndex = cart.findIndex(item => item.name === name);
        if (existingItemIndex !== -1) {
            cart[existingItemIndex].quantity += quantity;
        } else {
            cart.push({ name, price, quantity });
        }
        updateCartCount();
        saveCartToLocalStorage(); // Guardar en localStorage cada vez que se añade un artículo
    }

    function updateCartCount() {
        let totalCount = 0;
        cart.forEach(item => {
            totalCount += item.quantity;
        });
        cartCount.innerText = totalCount;
    }

    function updateCartDisplay() {
        cartItemsElement.innerHTML = '';
        let totalPrice = 0;
    
        cart.forEach((item, index) => { // Añadir el índice del ítem para identificarlo
            const li = document.createElement('li');
            li.innerText = `${item.name} x ${item.quantity} - ${item.price * item.quantity}€`;
    
            // Crear botón de eliminar
            const deleteButton = document.createElement('button');
            deleteButton.innerText = 'Eliminar';
            deleteButton.onclick = function() { removeItemFromCart(index); }; // Función para eliminar ítem
            li.appendChild(deleteButton);
    
            cartItemsElement.appendChild(li);
            totalPrice += item.price * item.quantity;
        });
    
        cartTotalElement.textContent = totalPrice.toFixed(2);
    }
    
    function saveCartToLocalStorage() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Función para cargar los ítems del carrito al cambiar de página
    function loadCart() {
        const savedCart = JSON.parse(localStorage.getItem('cart')) || [];
        cart = savedCart;
        updateCartDisplay();
        updateCartCount();
    }
    // función para eliminar los artículos individualmente
    function removeItemFromCart(index) {
        cart.splice(index, 1); // Elimina el ítem del arreglo cart basado en su índice
        updateCartDisplay(); // Actualiza la visualización del carrito
        updateCartCount(); // Actualiza el contador de ítems del carrito
        saveCartToLocalStorage(); // Guarda el estado actualizado del carrito en localStorage
    }
    

    // Llama a loadCart cuando la página se carga completamente para cargar los ítems del carrito
    loadCart();
});

/**SOBRENOSOTROS.HTML DESPLEGABLES */
document.addEventListener("DOMContentLoaded", function() {
    const abrirButtons = document.querySelectorAll('.abrir');

    abrirButtons.forEach(button => {
      button.addEventListener('click', function() {
        const collapse = this.closest('.accordion-item').querySelector('.accordion-collapse');
        const icon = this.querySelector('.icon-plus i');

        if (collapse.classList.contains('show')) {
          icon.classList.remove('rotate');
        } else {
          icon.classList.add('rotate');
        }
      });
    });
  });


