<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sifariş Səhifəsi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            // Səbətdən məlumatları yükləmək
            function loadCartItems() {
                const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
                let totalPrice = 0;
                const $cartTableBody = $('#cart-table-body');
                const $totalPriceElement = $('#total-price');

                $cartTableBody.empty(); // Cədvəli təmizlə

                cartItems.forEach(item => {
                    const row = `
                <tr>
                    <td>${item.name}</td>
                    <td>${item.price} AZN</td>
                    <td>${item.quantity}</td>
                    <td>${(item.price * item.quantity).toFixed(2)} AZN</td>
                </tr>
            `;
                    totalPrice += item.price * item.quantity;
                    $cartTableBody.append(row); // Yeni satırı cədvələ əlavə et
                });

                $totalPriceElement.text(`${totalPrice.toFixed(2)} AZN`); // Yekun qiyməti göstər
            }

            loadCartItems(); // Saytı yükləyərkən çağırın

            // Formu göndərmək
            $("#order-form").on('submit', function(e) {
                e.preventDefault();

                const city = $('#city').val();
                const address = $('#address').val();
                const phone = $('#phone').val();
                const cart = JSON.parse(localStorage.getItem('cart')) || [];

                if (cart.length === 0) {
                    alert('Səbətiniz boşdur!');
                    return;
                }

                const orderData = {
                    city,
                    address,
                    phone,
                    cart: cart.map(item => ({
                        id: parseInt(item.id, 10), // id dəyərini tam ədədə çeviririk
                        quantity: parseInt(item.quantity, 10), // quantity də tam ədədə çevrilir
                        price: parseFloat(item.price) // price dəyəri ondalıq ədədə çevrilir
                    })),
                    _token: csrfToken // CSRF token
                };

                $.ajax({
                    url: "{{ route('app.orderpost.store') }}", // URL doğru çəkildiyini yoxlayın
                    method: "POST",
                    data: orderData, // JSON Data ilə göndər
                    success: function() {
                        alert("Sifarişiniz qəbul edildi!");
                        localStorage.removeItem('cart'); // Səbəti təmizləyin
                        $('#order-form')[0].reset(); // Formu sıfırlayın
                    },
                    error: function(xhr) {
                        alert('Sifariş göndərilməsində xəta baş verdi.' + xhr.responseJSON.message);
                    }
                });
            });

        });
    </script>

</head>

<body class="bg-light">
    <div class="container my-5">
        <h2 class="text-center mb-4">Sifariş Səhifəsi</h2>

        <!-- İstifadəçi Məlumatları Formu -->
        <form id="order-form" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="city" class="form-label">Şəhər</label>
                <input type="text" class="form-control" id="city" placeholder="Şəhərinizi daxil edin" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Ünvan</label>
                <input type="text" class="form-control" id="address" placeholder="Ünvanınızı daxil edin" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefon Nömrəsi</label>
                <input type="text" class="form-control" id="phone" placeholder="Telefon nömrənizi daxil edin" required>
            </div>
            <button type="submit" class="btn btn-primary">Sifariş Ver</button>
        </form>

        <!-- Məhsul Siyahısı -->
        <h4>Səbətdəki Məhsullar</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ad</th>
                    <th>Qiymət</th>
                    <th>Sayı</th>
                    <th>Cəmi</th>
                </tr>
            </thead>
            <tbody id="cart-table-body">
                <!-- Məhsul məlumatları JavaScript ilə əlavə olunacaq -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-end">Yekun Qiymət:</td>
                    <td id="total-price">0 AZN</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>