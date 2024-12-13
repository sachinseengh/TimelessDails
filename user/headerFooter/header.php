<?php

session_start();
include '../backend/Controller/class/cart.class.php';

$cart = new Cart();
if(isset($_COOKIE['cid'])){

    if(isset($_COOKIE['cid'] ) && isset($_COOKIE['email'])){

        $_SESSION['cid']= $_COOKIE['cid'];
        $_SESSION['email']= $_COOKIE['email'];

    }


$cart->set('cid',$_COOKIE['cid']);
$items = $cart->retrieve();
$total = $cart->totalAmount();
$totalItem=$cart->totalItem();
}
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
                        <a href="index.php" class="nav__link active-link">Home</a>
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


                <!-- This is the button for user -->
                <?php if (isset($_SESSION['email'])): ?>
                    <a href="./profile.php" style="text-decoration:none">
                        <div class="author-pic text-center mr-2">
                            <span>
                                <?php echo htmlspecialchars(substr($_SESSION['email'], 0, 1)); ?>
                            </span>
                        </div>
                    </a>
                <?php else: ?>
                    <a class="nav__shop user__nav" href="./login.php">
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
     <?php
session_abort();
session_start();

if(!isset($_SESSION['email']) && !isset($_SESSION['cid'])): ?>
    <div class="cart" id="cart">
        <i class='bx bx-x cart__close' id="cart-close"></i>

        <h2 class="cart__title-center">Please Login First to view your cart</h2>

        <a href="user/login.php" class="btn cart__checkout-button">Login</a>

    </div>
    <?php else : ?>
    <div class="cart" id="cart">
        <i class='bx bx-x cart__close' id="cart-close"></i>

        <h2 class="cart__title-center">My Cart</h2>

        <div class="cart__container">

            <?php foreach($items as $item) { ?>
            <article class="cart__card">
                <div class="cart__box">
                    <img src="../Backend/images/<?php echo $item['featured_img'];?>" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title"><?php echo $item['product_name'];?></h3>
                    <span class="cart__price">Rs.<?php echo $item['product_price'];?></span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <a href="javascript:void(0);"
                                    onclick="updateCart('decrease', <?php echo $item['cartId']; ?>)">
                                    <i class='bx bx-minus' style="color:white"></i>
                                </a>
                            </span>

                            <span id="quantity-<?php echo $item['cartId']; ?>" class="cart__amount-number">
                                <?php echo $item['quantity']; ?>
                            </span>

                            <span class="cart__amount-box">
                                <a href="javascript:void(0);" 
                                    onclick="updateCart('increase', <?php echo $item['cartId']; ?>)">
                                    <i class='bx bx-plus' style="color:white"></i>
                                </a>
                            </span>

                        </div>

                       <a href="backend/Controller/deletecart.php?id=<?php echo $item['pid']?>"><i class='bx bx-trash-alt cart__amount-trash'></i></a>
                    </div>
                </div>
            </article>
            <?php } ?>



        </div>

        <div class="cart__prices">
            <span class="cart__prices-item">No of Items : <?php echo $totalItem; ?></span>
            <span class="cart__prices-total">Rs.<?php echo $total; ?></span>
        </div>
        


        <button class="cart__checkout-button" id="checkout-btn">Proceed to Checkout</button>

    </div>
    <?php endif; ?>