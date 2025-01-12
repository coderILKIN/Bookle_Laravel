function updateCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || []; 
    const cartItemsContainer = document.querySelector('tbody');
    cartItemsContainer.innerHTML = ''; 

    let subtotalPrice = 0;

    // Məhsulun hər biri üçün
    cart.forEach(item => {
        const productTotal = item.price * item.quantity;
        subtotalPrice += productTotal;

        // Yeni sətri yaradın
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <span class="d-flex gap-5 align-items-center">
                    <a href="#" class="remove-item" data-id="${item.id}">
                        <i class="fa-solid fa-xmark remove-item"></i>
                    </a>
                    <span class="cart">
                        <img src="${item.image}" alt="Product Image" class="product-img" width='100'>
                    </span>
                    <span class="cart-title">${item.name}</span>
                </span>
            </td>
            <td>
                <span class="cart-price">${item.price.toFixed(2)} AZN</span>
            </td>
            <td>
                <span class="quantity-basket">
                    <span class="qty">
                        <button class="qtyminus" data-id="${item.id}" aria-hidden="true">−</button>
                        <input type="number" value="${item.quantity}" min="1" max="10" class="quantity-input" data-id="${item.id}">
                        <button class="qtyplus" data-id="${item.id}" aria-hidden="true">+</button>
                    </span>
                </span>
            </td>
            <td>
                <span class="subtotal-price">${productTotal.toFixed(2)} AZN</span>
            </td>
        `;
        cartItemsContainer.appendChild(row);
    });

    // Ümumi qiyməti yenilə
    document.querySelector('.sub-price').textContent = `${subtotalPrice.toFixed(2)} AZN`;
    document.querySelector('.sub-price-total').textContent = `${subtotalPrice.toFixed(2)} AZN`;

    // Miqdarı artır
    document.querySelectorAll('.qtyplus').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const product = cart.find(item => String(item.id) === id);
            if (product) {
                product.quantity += 1;
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCart();  // Yenidən cədvəli yeniləyir
            }
        });
    });

    // Miqdarı azaldır
    document.querySelectorAll('.qtyminus').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const product = cart.find(item => String(item.id) === id);
            if (product && product.quantity > 1) {
                product.quantity -= 1;
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCart();  // Yenidən cədvəli yeniləyir
            }
        });
    });

    // Miqdar inputunda dəyişiklik olduqda
    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('input', function () {
            const id = this.dataset.id;
            const product = cart.find(item => String(item.id) === id);
            const newQuantity = parseInt(this.value) || 1; // istifadəçi inputundakı səhvləri tənzimləyirik
            if (product && newQuantity !== product.quantity) {
                product.quantity = newQuantity;
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCart(); // Yenidən cədvəli yeniləyir
            }
        });
    });

    // Məhsulu səbətdən silmək
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function () {
            const id = String(this.dataset.id);
            const updatedCart = cart.filter(item => String(item.id) !== id);
            localStorage.setItem('cart', JSON.stringify(updatedCart));
            updateCart();  // Yenidən cədvəli yeniləyir
        });
    });
}

// Səhifə yükləndikdə səbəti göstər
document.addEventListener('DOMContentLoaded', updateCart);
