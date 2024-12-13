<footer class="footer section">
    <div class="footer__container container grid">
        <div class="footer__content">
            <h3 class="footer__title">Our information</h3>

            <ul class="footer__list">
                <li>Nayabazar - 16</li>
                <li>Kathmandu</li>
                <li>+977 9865768465</li>
            </ul>
        </div>
        <div class="footer__content">
            <h3 class="footer__title">About Us</h3>

            <ul class="footer__links">
                <li>
                    <a href="#" class="footer__link">Support Center</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Customer Support</a>
                </li>
                <li>
                    <a href="#" class="footer__link">About Us</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Copy Right</a>
                </li>
            </ul>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">Product</h3>

            <ul class="footer__links">
                <li>
                    <a href="#" class="footer__link">Sports Watch</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Mountain bikes</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Electric</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Accesories</a>
                </li>
            </ul>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">Social</h3>

            <ul class="footer__social">
                <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                    <i class='bx bxl-facebook'></i>
                </a>

                <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                    <i class='bx bxl-twitter'></i>
                </a>

                <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                    <i class='bx bxl-instagram'></i>
                </a>
            </ul>
        </div>
    </div>

    <span class="footer__copy">&#169; Timeless Dials. All rigths reserved</span>
</footer>

<!--=============== SCROLL UP ===============-->
<a href="#" class="scrollup" id="scroll-up">
    <i class='bx bx-up-arrow-alt scrollup__icon'></i>
</a>

<!--=============== SWIPER JS ===============-->
<script src="assets/js/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--==================== MESSAGE HANDLER ====================-->
<?php
// Fetch the message or error message from URL
$message = isset($_GET['Msg']) ? $_GET['Msg'] : (isset($_GET['ErrMsg']) ? $_GET['ErrMsg'] : '');
if ($message) {
    // Escape the message to prevent XSS
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            text: '$message',
            icon: 'info', // Change to 'success', 'error', or 'warning' if needed
            timer: 3000, // 3 seconds
            showConfirmButton: false,
            position: 'top-end', // Positioning at the top right
            toast: true // Enables toast style
        });
    });
</script>";
}
?>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>

<!-- js for ajax for updating cart -->
 <script>
function updateCart(action, cartId) {
    const url = action === 'increase' 
        ? `Backend/Controller/increaseCart.php?id=${cartId}` 
        : `Backend/Controller/decreaseCart.php?id=${cartId}`;
    
    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Update the quantity for the specific item
                const quantityElement = document.getElementById(`quantity-${cartId}`);
                quantityElement.textContent = data.data.quantity;

                // Update the total price and total items
                const totalAmountElement = document.querySelector('.cart__prices-total');
                const totalItemsElement = document.querySelector('.cart__prices-item');

                totalAmountElement.textContent = `Rs. ${data.data.totalAmount}`;
                totalItemsElement.textContent = `No of Items: ${data.data.totalItems}`;
            } else {
                alert(data.message);
            }
        })
        .catch(error => console.error('Error:', error));
}

</script>
</body>

</html>