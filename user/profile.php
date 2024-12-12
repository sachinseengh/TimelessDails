<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <title>Timeless Dials</title>
</head>

<body class="dark-theme">
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="../index.php" class="nav__logo">
                <i class='bx bxs-watch nav__logo-icon'></i> Timeless Dials
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="../index.php" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#featured" class="nav__link">Featured</a>
                    </li>
                    <li class="nav__item">
                        <a href="#products" class="nav__link">Products</a>
                    </li>
                    <li class="nav__item">
                        <a href="#new" class="nav__link">New</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- User -->




                <!-- User button -->

                <!-- This is the button for user -->
                <?php if (isset($_SESSION['email'])): ?>
                    <a href="profile.php" style="text-decoration:none">
                        <div class="author-pic text-center mr-2">
                            <span>
                                <?php echo htmlspecialchars(substr($_SESSION['email'], 0, 1)); ?>
                            </span>
                        </div>
                    </a>
                <?php else: ?>
                    <a class="nav__shop user__nav" href="user/login.php">
                        <i class='bx bx-user-circle'></i>
                    </a>
                <?php endif; ?>


                <div class="nav__shop" id="cart-shop">
                    <i class='bx bx-shopping-bag'></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== CART ====================-->
    <div class="cart" id="cart">
        <i class='bx bx-x cart__close' id="cart-close"></i>

        <h2 class="cart__title-center">My Cart</h2>

        <div class="cart__container">
            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/featured1.png" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Jazzmaster</h3>
                    <span class="cart__price">$1050</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class='bx bx-minus'></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class='bx bx-plus'></i>
                            </span>
                        </div>

                        <i class='bx bx-trash-alt cart__amount-trash'></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/featured3.png" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Rose Gold</h3>
                    <span class="cart__price">$850</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class='bx bx-minus'></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class='bx bx-plus'></i>
                            </span>
                        </div>

                        <i class='bx bx-trash-alt cart__amount-trash'></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/new1.png" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Longines Rose</h3>
                    <span class="cart__price">$980</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class='bx bx-minus'></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class='bx bx-plus'></i>
                            </span>
                        </div>

                        <i class='bx bx-trash-alt cart__amount-trash'></i>
                    </div>
                </div>
            </article>
        </div>

        <div class="cart__prices">
            <span class="cart__prices-item">3 items</span>
            <span class="cart__prices-total">$2880</span>
        </div>
    </div>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <div class="profile__wrapper">
            <div class="profile-card">
                <h2>User Profile</h2>
                <p>Welcome to your profile page!</p>

                <div class="details">
                    <div class="info name">
                        <span>Name:</span>
                        <div>John Doe</div>
                    </div>
                    <div class="info email">
                        <span>Email:</span>
                        <div>johndoe@example.com</div>
                    </div>
                    <div class="info phone">
                        <span>Phone:</span>
                        <div>+123 456 7890</div>
                    </div>
                    <div class="info address">
                        <span>Address:</span>
                        <div>123 Main Street, City, Country</div>
                    </div>
                </div>

                <a href="#" class="btn">Edit Profile</a>
                <a href="../backend/Controller/userOperations/logout.php"
                    class="btn btn-primary logout-btn"
                    data-href="../backend/Controller/userOperations/logout.php">
                    Logout
                </a>



                <a href="../backend/Controller/userOperations/deleteProcess.php"
                    class="btn btn-primary delete-btn"
                    data-href="../backend/Controller/userOperations/deleteProcess.php">
                    Delete
                </a>

            </div>
        </div>

    </main>




    <!--==================== FOOTER ====================-->
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
                        <a href="#" class="footer__link">Road bikes</a>
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


    <!-- SweetAlert CSS -->
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

    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent the default action (navigation)

                const deleteUrl = this.getAttribute('data-href'); // Get the URL from data-href

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to the delete URL
                        window.location.href = deleteUrl;
                    }
                });
            });
        });

        document.querySelectorAll('.logout-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent the default action (navigation)

                const logoutUrl = this.getAttribute('data-href'); // Get the URL from data-href

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You have to login again to shop!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, logout!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to the delete URL
                        window.location.href = logoutUrl;
                    }
                });
            });
        });
    </script>


    <!--=============== MAIN JS ===============-->
    <script src="../assets/js/main.js"></script>



</body>

</html>