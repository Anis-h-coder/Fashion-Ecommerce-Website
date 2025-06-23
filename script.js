// Function to update the cart display
function updateCartDisplay() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartContainer = document.querySelector('.cart-items');
    const itemCount = document.getElementById('item-count');
    const cartSubtotal = document.getElementById('cart-subtotal');
    const cartTotal = document.getElementById('cart-total');
    const discount = document.getElementById('discount');
    
    // Clear the cart container
    cartContainer.innerHTML = '';

    if (cart.length === 0) {
        cartContainer.innerHTML = '<p>Your cart is empty!</p>';
        itemCount.textContent = '0 items in your bag';
        cartSubtotal.textContent = '$0.00';
        cartTotal.textContent = '$0.00';
        discount.textContent = '-$0.00';
        return;
    }

    let total = 0;

    // Display cart items
    cart.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.className = 'cart-item';
        cartItem.innerHTML = `
            <img src="${item.image}" alt="${item.name}" style="width:50px;">
            <p>${item.name}</p>
            <p>Price: $${item.price}</p>
            <p>Quantity: ${item.quantity}</p>
            <button class="remove-item" data-product="${item.name}">Remove</button>
        `;
        cartContainer.appendChild(cartItem);

        // Calculate total
        total += item.price * item.quantity;
    });

    // Update the item count and total amounts
    itemCount.textContent = `${cart.length} items in your bag`;
    cartSubtotal.textContent = `$${total.toFixed(2)}`;
    cartTotal.textContent = `$${total.toFixed(2)}`;
    discount.textContent = '-$0.00'; // Can apply discount logic here if needed
}

// Function to add product to the cart
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function () {
        const product = {
            name: this.getAttribute('data-product'),
            price: parseFloat(this.getAttribute('data-price')),
            image: this.getAttribute('data-image'),
            quantity: parseInt(this.previousElementSibling.value) || 1
        };

        // Retrieve existing cart or initialize an empty one
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Check if the product already exists in the cart
        const existingProductIndex = cart.findIndex(item => item.name === product.name);

        if (existingProductIndex > -1) {
            // Update the quantity if the product exists
            cart[existingProductIndex].quantity += product.quantity;
        } else {
            // Add the new product
            cart.push(product);
        }

        // Save updated cart to localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        alert(`${product.quantity} x ${product.name} added to the cart!`);

        // Update cart display
        updateCartDisplay();
    });
});

// Function to remove item from cart
document.querySelector('.cart-items').addEventListener('click', function (e) {
    if (e.target.classList.contains('remove-item')) {
        const productName = e.target.getAttribute('data-product');
        
        // Retrieve existing cart
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Filter out the product to remove it from the cart
        cart = cart.filter(item => item.name !== productName);

        // Save updated cart to localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        // Update cart display
        updateCartDisplay();
    }
});

// Initialize the cart display on page load
document.addEventListener('DOMContentLoaded', updateCartDisplay);

function showWelcomeMessage() {
    var email = document.getElementById('email').value;
    var welcomeMessage = document.getElementById('welcomeMessage');

    if (email) {
        welcomeMessage.textContent = 'Welcome, ' + email + '!';
    } else {
        welcomeMessage.textContent = 'Please enter a valid email address.';
    }
}


document.addEventListener('DOMContentLoaded', function () {
    // Select the form element
    const contactForm = document.getElementById('contactForm');

    if (contactForm) {
        // Add an event listener for form submission
        contactForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from refreshing the page

            // Show the thank-you message
            alert('Thank you for your message! We will get back to you soon.');

            // Reset the form fields
            contactForm.reset();
        });
    } else {
        console.error("Contact form not found.");
    }
});

