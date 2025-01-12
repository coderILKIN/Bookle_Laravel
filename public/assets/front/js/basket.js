function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const totalQuantity = cart.reduce((sum, item) => sum + item.quantity, 0);

    // Bütün eyni ID-ləri seçin və dəyəri yeniləyin
    document.querySelectorAll('#cart-count').forEach(element => {
        element.textContent = totalQuantity;
    });
}

document.querySelectorAll('.shop-button .theme-btn').forEach(button => {
    button.addEventListener('click', function () {
        const productElement = this.closest('.shop-box-items');
        const id = productElement.dataset.id; // Məhsulun unikal ID-si
        
        const name = productElement.querySelector('.shop-content h3').textContent;
        const price = parseFloat(productElement.querySelector('.price-list li').textContent.replace('$', ''));
        const image = productElement.querySelector('img').src;

        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Yeni məhsulun unikal ID-ini yarat
        const productId = `${id}`; // ID-yə Date.now() əlavə edirik ki, hər dəfə fərqli olsun

        // Mövcud məhsulu səbətdə axtar
        const existingProductIndex = cart.findIndex(item => item.id === productId);

        if (existingProductIndex !== -1) {
            // Məhsul varsa, onun miqdarını artır
            cart[existingProductIndex].quantity += 1;
        } else {
            // Məhsul yoxdursa, onu yeni kimi əlavə et
            cart.push({ id: productId, name, price, image, quantity: 1 });
        }

        localStorage.setItem('cart', JSON.stringify(cart)); // Yenilənmiş səbət məlumatını saxla
        updateCart(); // Yenilənmiş səbət göstər
        updateCartCount(); // Sebət saylarını yenilə
    });
});

// Səhifə yüklənərkən sayları yenilə
document.addEventListener('DOMContentLoaded', updateCartCount);
