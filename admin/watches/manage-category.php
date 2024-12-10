<?php
include("headerFooter/header.php")
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Watches</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="table-2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped dataTable no-footer" id="table-2" role="grid"
                                            aria-describedby="table-2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="text-center sorting_asc" rowspan="1" colspan="1" aria-label="
                            
                              
                              &amp;nbsp;
                            
                          " style="width: 55.8672px;">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                                class="custom-control-input" id="checkbox-all">
                                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="table-2" rowspan="1" colspan="1"
                                                        aria-label="Task Name: activate to sort column ascending" style="width: 180.07px;">
                                                        Category Name</th>


                                                    <th class="sorting" tabindex="0" aria-controls="table-2" rowspan="1" colspan="1"
                                                        aria-label="Action: activate to sort column ascending" style="width: 91.8281px;">
                                                        Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>




                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                                id="checkbox-1">
                                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>Create a mobile app</td>

                                                    <td class="flex-it">
                                                        <a href="update-watch.php" class="btn btn-info">Edit</a>
                                                        <a href="#" class="btn btn-danger">Delete</a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="table-2_info" role="status" aria-live="polite">Showing 1 to 4
                                            of 4 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="table-2_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="table-2_previous"><a href="#"
                                                        aria-controls="table-2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="table-2"
                                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled" id="table-2_next"><a href="#"
                                                        aria-controls="table-2" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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