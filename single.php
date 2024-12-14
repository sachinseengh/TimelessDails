<?php

include("headerFooter/header.php");

include 'backend/Controller/class/product.class.php';

$id = $_GET['id'];
$product =  new Product();

$product->set('pid',$id);

$item = $product->getById();


?>


<!--==================== MAIN ====================-->
<main class="main">

    <!--==================== HOME ====================-->
    <section class="home" id="home">
        <div class="home__container container grid">
            <div class="home__img-bg single__image">
                <img src="backend/images/<?php echo $item->featured_img;?>" alt="" class="home__img">
            </div>
            <div class="home__data">
                <h1 class="home__title"> <?php  echo $item->name; ?>
                <h1 class="home__brand"> <?php  echo $item->brand; ?>
                
            
                </h1>
                
                <p class="home__description single__description">
                <?php echo htmlspecialchars_decode($item->description); ?>
                </p>
                <span class="home__price single__price">Rs.<?php echo $item->price;?></span>
                <span class="home__price stock" style="color:green">In Stock</span>

                <div class="home__btns">
                <a class="btn button home__button" onClick=openCart()
                        href="Backend/Controller/addCart.php?id=<?php echo $item->pid ?>&price=<?php echo $item->price ?>">ADD TO CART</a>

                </div>
            </div>

        </div>
    </section>


</main>

<!--==================== FOOTER ====================-->
<?php
include("headerFooter/footer.php")
?>