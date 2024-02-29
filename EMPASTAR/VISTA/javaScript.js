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

    const teAyudamosButton = document.getElementById("privacidad");

    teAyudamosButton.addEventListener("click", function (event) {
        event.preventDefault();

        const windowFeatures = "width=800,height=800,top=100,left=350";

        window.open("politicaPrivacidad.html", "_blank", windowFeatures);
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

        cart.forEach(item => {
            const li = document.createElement('li');
            li.innerText = `${item.name} x ${item.quantity} - ${item.price * item.quantity}€`;
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


