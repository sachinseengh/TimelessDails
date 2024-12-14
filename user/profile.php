<?php

session_start();



if(!isset($_SESSION['email'] ) && !isset($_SESSION['cid'])){

    header('Location:./login.php'); 
    exit(); 
}



require_once ('../backend/Controller/class/user.class.php');


$user = new User();
$user->set('cid',$_SESSION['cid']);
$row = $user->retrieve();

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
                        <div> <?php echo $row['name']; ?></div>
                    </div>
                    <div class="info email">
                        <span>Email:</span>
                        <div><?php echo $row['email']; ?></div>
                    </div>
                    <div class="info phone">
                        <span>Phone:</span>
                        <div><?php echo $row['phone']; ?></div>
                    </div>
                    <div class="info address">
                        <span>Address:</span>
                        <div><?php echo $row['city']; ?>,<?php echo $row['address']; ?></div>
                    </div>
                </div>

                <a href="./editProfile.php" class="btn">Edit Profile</a>
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



<?php

include('headerFooter/footer.php');
?>

 
