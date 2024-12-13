<?php
include("headerFooter/header.php");


if(isset($_COOKIE['email'])){
    
    $_SESSION['email'] = $_COOKIE['email'];
    $_SESSION['cid'] = $_COOKIE['cid'];

}

include 'Backend/Controller/class/product.class.php';

$product = new Product();

$mainItems= $product->getProductMain();

$newItems=$product->getNewArrival();
$maleItems=$product->getProductsMale();
$femaleItems=$product->getProductsFemale();
$products=$product->getProducts();





?>

<!--==================== MAIN ====================-->
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home" id="home">


        <div class="home__container container grid">
            <div class="home__img-bg home__org">
                <img src="Backend/images/<?php echo $mainItems[0]['featured_img'] ?>" alt="" class="home__img" height=20
                    width=20>
            </div>



            <div class="home__data">
                <h1 class="home__title">NEW WATCH <br><?php echo $mainItems[0]['name'] ?> </h1>
                <p class="home__description">
                    <?php echo htmlspecialchars_decode($mainItems[0]['description']) ?>
                </p>
                <span class="home__price">Rs.<?php echo $mainItems[0]['price']?></span>

                <div class="home__btns">
                    <a href="single.php?<?php echo $mainItems[0]['pid'] ?>" class="button button--gray button--small">
                        Details
                    </a>

                    <a class="btn button home__button" onClick=openCart()
                        href="Backend/Controller/addCart.php?id=<?php echo $mainItems[0]['pid'] ?>">ADD TO CART</a>



                </div>
            </div>
        </div>
    </section>

    <!--==================== New arrival====================-->
    <section class="featured section container" id="featured">
        <h2 class="section__title">
            New Arrival
        </h2>

        <div class="featured__container grid">


            <?php foreach($newItems as $items){?>
            <article class="featured__card">
                <span class="featured__tag">New</span>

                <img src="./Backend/images/<?php echo $items['featured_img'] ?>" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title"><?php echo $items['name'] ?></h3>
                    <h3 class="featured__brand"><?php echo $items['brand'] ?></h3>
                    <span class="featured__price">Rs.<?php echo $items['price']?></span>
                </div>

                <a class="button featured__button" href="single.php?id=<?php echo $items['pid']?>">View Watch</a>

                <a class="button featured__button"
                    href="Backend/Controller/addCart.php?id=<?php echo $items['pid']?>">ADD TO CART</a>
            </article>
            <?php } ?>


        </div>
    </section>

    <!--==================== STORY ====================-->
    <section class="story section container">
        <div class="story__container grid">
            <div class="story__data">
                <h2 class="section__title story__section-title">
                    Our Story
                </h2>

                <h1 class="story__title">
                    Inspirational Watch of <br> this year
                </h1>

                <p class="story__description">
                    The latest and modern watches of this year, is available in various
                    presentations in this store, discover them now.
                </p>

                <a href="#" class="button button--small">Discover</a>
            </div>

            <div class="story__images">
                <img src="assets/img/story.png" alt="" class="story__img">
                <div class="story__square"></div>
            </div>
        </div>
    </section>

    <!--==================== PRODUCTS ====================-->
    <section class="products section container" id="products">
        <h2 class="section__title">
            Products
        </h2>

        <div class="products__container grid">
            <?php foreach($products as $item){?>

            <article class="featured__card">


                <img src="./Backend/images/<?php echo $item['featured_img'] ?>" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title"><?php echo $item['name'] ?></h3>
                    <h3 class="featured__brand"><?php echo $item['brand'] ?></h3>
                    <span class="featured__price">Rs.<?php echo $item['price']?></span>
                </div>

                <a class="button featured__button" href="single.php?id=<?php echo $item['pid']?>">View Watch</a>

                <a class="button featured__button"
                    href="Backend/Controller/addCart.php?id=<?php echo $item['pid']?>">ADD TO CART</a>
            </article>
            <?php } ?>
        </div>



    </section>

    <!--==================== TESTIMONIAL ====================-->
    <section class="testimonial section container">
        <div class="testimonial__container grid">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class='bx bxs-quote-alt-left'></i>
                        </div>
                        <p class="testimonial__description">
                            They are the best watches that one acquires, also they are always with the latest
                            news and trends, with a very comfortable price and especially with the attention
                            you receive, they are always attentive to your questions.
                        </p>
                        <h3 class="testimonial__date">March 27. 2021</h3>

                        <div class="testimonial__perfil">
                            <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__perfil-img">

                            <div class="testimonial__perfil-data">
                                <span class="testimonial__perfil-name">Lee Doe</span>
                                <span class="testimonial__perfil-detail">Director of a company</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class='bx bxs-quote-alt-left'></i>
                        </div>
                        <p class="testimonial__description">
                            They are the best watches that one acquires, also they are always with the latest
                            news and trends, with a very comfortable price and especially with the attention
                            you receive, they are always attentive to your questions.
                        </p>
                        <h3 class="testimonial__date">March 27. 2021</h3>

                        <div class="testimonial__perfil">
                            <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__perfil-img">

                            <div class="testimonial__perfil-data">
                                <span class="testimonial__perfil-name">Samantha Mey</span>
                                <span class="testimonial__perfil-detail">Director of a company</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class='bx bxs-quote-alt-left'></i>
                        </div>
                        <p class="testimonial__description">
                            They are the best watches that one acquires, also they are always with the latest
                            news and trends, with a very comfortable price and especially with the attention
                            you receive, they are always attentive to your questions.
                        </p>
                        <h3 class="testimonial__date">March 27. 2021</h3>

                        <div class="testimonial__perfil">
                            <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__perfil-img">

                            <div class="testimonial__perfil-data">
                                <span class="testimonial__perfil-name">Raul Zaman</span>
                                <span class="testimonial__perfil-detail">Director of a company</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next">
                    <i class='bx bx-right-arrow-alt'></i>
                </div>
                <div class="swiper-button-prev">
                    <i class='bx bx-left-arrow-alt'></i>
                </div>
            </div>

            <div class="testimonial__images">
                <div class="testimonial__square"></div>
                <img src="assets/img/testimonial.png" alt="" class="testimonial__img">
            </div>
        </div>
    </section>

    <!--==================== Male section ====================-->
    <section class="male section container" id="male">
    <h2 class="section__title">
            Male Watches
        </h2>

        <div class="products__container grid">
            <?php foreach($maleItems as $item){?>

            <article class="featured__card">


                <img src="./Backend/images/<?php echo $item['featured_img'] ?>" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title"><?php echo $item['name'] ?></h3>
                    <h3 class="featured__brand"><?php echo $item['brand'] ?></h3>
                    <span class="featured__price">Rs.<?php echo $item['price']?></span>
                </div>

                <a class="button featured__button" href="single.php?id=<?php echo $item['pid']?>">View Watch</a>

                <a class="button featured__button"
                    href="Backend/Controller/addCart.php?id=<?php echo $item['pid']?>">ADD TO CART</a>
            </article>
            <?php } ?>
        </div>

    </section>


    <!-- Female Section -->

    <section class="female section container" id="female">
    <h2 class="section__title">
            Female Watches
        </h2>

        <div class="products__container grid">
            <?php foreach($femaleItems as $item){?>

            <article class="featured__card">


                <img src="./Backend/images/<?php echo $item['featured_img'] ?>" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title"><?php echo $item['name'] ?></h3>
                    <h3 class="featured__brand"><?php echo $item['brand'] ?></h3>
                    <span class="featured__price">Rs.<?php echo $item['price']?></span>
                </div>

                <a class="button featured__button" href="single.php?id=<?php echo $item['pid']?>">View Watch</a>

                <a class="button featured__button"
                    href="Backend/Controller/addCart.php?id=<?php echo $item['pid']?>">ADD TO CART</a>
            </article>
            <?php } ?>
        </div>

    </section>




    <!-- ==================== NEWSLETTER ==================== -->
    <!-- <section class="newsletter section container">
        <div class="newsletter__bg grid">
            <div>
                <h2 class="newsletter__title">Subscribe Our <br> Newsletter</h2>
                <p class="newsletter__description">
                    Don't miss out on your discounts. Subscribe to our email
                    newsletter to get the best offers, discounts, coupons,
                    gifts and much more.
                </p>
            </div>

            <form action="" class="newsletter__subscribe">
                <input type="email" placeholder="Enter your email" class="newsletter__input">
                <button class="button">
                    SUBSCRIBE
                </button>
            </form>
        </div>
    </section> -->
</main>

<!--==================== FOOTER ====================-->
<?php
include("headerFooter/footer.php")
?>