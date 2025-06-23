document.addEventListener('DOMContentLoaded', () => {
    const cartItemsContainer = document.querySelector('.cart-items');
    const cartSubtotalElement = document.getElementById('cart-subtotal');
    const cartTotalElement = document.getElementById('cart-total');
    const itemCountElement = document.getElementById('item-count');

    // Load cart from localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function saveCart() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    function renderCart() {
        cartItemsContainer.innerHTML = ''; // Clear previous items
        let subtotal = 0;
        let itemCount = 0;

        cart.forEach((item, index) => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;
            itemCount += item.quantity;

            const cartItem = `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                    <div class="details">
                        <p>${item.name}</p>
                        <p>Price: $${item.price}</p>
                    </div>
                    <div class="quantity">
                        <button class="decrease" data-index="${index}">-</button>
                        <span>${item.quantity}</span>
                        <button class="increase" data-index="${index}">+</button>
                    </div>
                    <div class="total">$${itemTotal.toFixed(2)}</div>
                    <button class="remove" data-index="${index}">Remove</button>
                </div>
            `;
            cartItemsContainer.innerHTML += cartItem;
        });

        cartSubtotalElement.textContent = $${subtotal.toFixed(2)};
        cartTotalElement.textContent = $${subtotal.toFixed(2)}; // Add discount logic if needed
        itemCountElement.textContent = ${itemCount} items;

        // Attach event listeners for buttons
        attachCartEventListeners();
    }

    function attachCartEventListeners() {
        document.querySelectorAll('.decrease').forEach(button => {
            button.addEventListener('click', (e) => {
                const index = parseInt(e.target.getAttribute('data-index'));
                updateQuantity(index, -1);
            });
        });

        document.querySelectorAll('.increase').forEach(button => {
            button.addEventListener('click', (e) => {
                const index = parseInt(e.target.getAttribute('data-index'));
                updateQuantity(index, 1);
            });
        });

        document.querySelectorAll('.remove').forEach(button => {
            button.addEventListener('click', (e) => {
                const index = parseInt(e.target.getAttribute('data-index'));
                removeFromCart(index);
            });
        });
    }

    function updateQuantity(index, change) {
        cart[index].quantity += change;
        if (cart[index].quantity <= 0) {
            cart.splice(index, 1); // Remove item if quantity goes to zero
        }
        saveCart();
        renderCart();
    }

    function removeFromCart(index) {
        cart.splice(index, 1);
        saveCart();
        renderCart();
    }

    // Initial render
    renderCart();
});