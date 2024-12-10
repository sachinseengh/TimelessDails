<?php
include("headerFooter/header.php")
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
                        <div class="card-body">
                            <div class="form-group">
                                <label>Watch Name</label>
                                <input type="number" disabled value="1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Watch Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Brand</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control selectric">
                                    <option>Tech</option>
                                    <option>News</option>
                                    <option>Political</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sub Category</label>
                                <select class="form-control selectric">
                                    <option>Tech</option>
                                    <option>News</option>
                                    <option>Political</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Watch Price</label>
                                <input type="text" class="form-control">
                            </div>


                            <div class="form-group">
                                <label>Watch Image</label>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="image" id="image-upload" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Watch Description</label>
                                <textarea class="summernote"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Add Watch</button>
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