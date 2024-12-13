<?php
include("headerFooter/header.php");


require_once('../../Backend/Controller/class/product.class.php');


$product  = new Product();

$watches=$product->getTotalWatch();
$totalWatches=$product->getTotalWatchQuantity();

?>


<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Admin</h4>
            </div>
            <div class="card-body">
              1
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Watches</h4>
            </div>
            <div class="card-body">
            <?php
              
              echo ($watches->total_Watch);
                            ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Watches </h4>
            </div>
            <div class="card-body">
            <?php
              
              // print_r($totalWatches);
              echo ($totalWatches->quantity);
                            ?>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Online Users</h4>
            </div>
            <div class="card-body">
              47
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>
</div>


<?php
include("headerFooter/footer.php")
?>