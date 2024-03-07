
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