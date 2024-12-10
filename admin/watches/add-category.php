<?php
include("headerFooter/header.php")
?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Category</a></div>
                <div class="breadcrumb-item">Add Category</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Fill Category Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Category Title</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control selectric">
                                    <option>Active</option>
                                    <option>InActive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Add Category</button>
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