<?php
include("headerFooter/header.php");

require_once('../../Backend/Controller/class/product.class.php');
$product = new Product();
$product->set('pid', $_GET['id']);
$item = $product->getById();

?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Book</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Watch</a></div>
                <div class="breadcrumb-item">Update Watch</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Fill Watch Details</h4>


                        </div>
                        <form action="/TimelessDials/backend/Controller/editProduct.php" method="post"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Watch Id</label>
                                    <input type="number" disabled value=<?php echo $_GET['id'] ?> class="form-control">

                                    <!-- hidden value for pid -->

                                    <input type="hidden" name="pid" value="<?php echo $_GET['id']; ?>" />
    
                                </div>
                                <div class="form-group">
                                    <label>Watch Name</label>
                                    <input type="text" class="form-control" value=<?php echo $item->name; ?>
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label>Brand</label>
                                    <input type="text" class="form-control" value=<?php echo $item->brand; ?>
                                        name="brand">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control selectric" name="category">
                                        <option <?php if($item->category == "Male")echo "Selected";?>>Male
                                        </option>
                                        <option <?php if($item->category == "Female")echo "Selected";?>>Female
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sub Category</label>
                                    <select class="form-control selectric" name="sub_category">
                                        <option <?php if($item->sub_category == "Mechanical Watch")echo "Selected";?>>
                                            Mechanical Watch
                                        </option>
                                        <option <?php if($item->sub_category == "Quartz Watch")echo "Selected";?>>Quartz
                                            Watch
                                        </option>
                                        <option <?php if($item->sub_category == "Smartwatch")echo "Selected";?>>
                                            Smartwatch
                                        </option>
                                        <option <?php if($item->sub_category == "Hybrid Watch")echo "Selected";?>>Hybrid
                                            Watch
                                        </option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Watch Price</label>
                                    <input type="text" class="form-control" value=<?php echo $item->price; ?>
                                        name="price">
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" value=<?php echo $item->quantity; ?>
                                        name="quantity">
                                </div>


                                <div class="form-group">
                                    <label>Watch Image</label>
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>



                                        <!-- Hidden input for existing image (used when no new image is uploaded) -->
                                        <input type="hidden" name="existing_img" id="existing_img"
                                            value="<?php echo $item->featured_img; ?>" />

                                        <!-- Image upload input -->
                                        <label for="featured_img">Featured Image:</label>
                                        <input type="file" name="featured_img" id="image-upload" accept="image/*"
                                            onchange="handleImageSelection(event)" />

                                        <!-- Display the old image by default -->
                                        <img id="old-image-preview"
                                            src="../../Backend/images/<?php echo $item->featured_img; ?>"
                                            alt="Old Image" style="max-width: 200px; width: 100%; height: 100%; overflow: hidden;" />


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Watch Description</label>
                                    <textarea class="summernote"
                                        name="desc"><?php echo $item->description; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Update Watch</button>
                                </div>

                                <!-- <div class="col-sm-12 col-md-7">
                                      </div> -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
include("headerFooter/footer.php")
?>