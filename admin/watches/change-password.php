<?php
include("headerFooter/header.php")
?>


<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Password</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Password</a></div>
                <div class="breadcrumb-item">Change Password</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4>Fill Watch Details</h4>
                        </div> -->

                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" disabled>
                                </div>

                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>


                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Change Password</button>
                                </div>
                            </form>

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