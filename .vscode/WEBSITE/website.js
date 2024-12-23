// Example script for adding items to cart
let cart = [];

function addToCart(productName, price) {
    cart.push({ name: productName, price: price });
    alert(`${productName} added to cart!`);
    updateCartDisplay();
}

function updateCartDisplay() {
    document.querySelector('.account-cart a').textContent = `Cart (${cart.length})`;
}

// Add event listeners to all "Add to Cart" buttons (you can also do this in HTML using 'onclick' attributes)
document.querySelectorAll('.product button').forEach((button) => {
    button.addEventListener('click', (e) => {
        const productName = e.target.closest('.product').querySelector('p').textContent;
        addToCart(productName, 499.99); // Assuming the price is $499.99 for example
    });
});
