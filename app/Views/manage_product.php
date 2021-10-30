<?php require_once 'template/header.php'; ?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #72cdb8;">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand h1" href="#" style="color: #ffffff">Majoo Teknologi Indonesia</a>
    </div>
</nav>
<div class="container d-flex h-100 mt-3">
    <div class="row w-100">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Product</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Category</a>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="col-md-12">
                    <div class="btn btn-success"data-toggle="modal" data-target="#product_modal">
                        <i class="fa fa-plus"></i> Add Product
                    </div>
                </div>
                <div class="col-md-12">
                    <table id="product">

                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="product_modal" tabindex="-1" role="dialog" aria-labelledby="product_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="product_modalLabel">Insert product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>/insertProduct" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input class="form-control" type="text" name="product_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select class="form-control" name="id_category">
                            <?php foreach ($category as $cat) { ?>
                                <option value="<?= $cat['id_category']; ?>">
                                    <?= $cat['category_name']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input class="form-control" type="text" name="price">
                    </div>
                    <label for="">Upload Product Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="product_image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </form>
<!--                <div class="form-group">-->
<!--                    Product Name-->
<!--                    <input type="text" name="product_name">-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label for="id_category">Category</label>-->
<!--                    <select class="select2" name="id_category">-->
<!--                        --><?php //foreach ($category as $cat) { ?>
<!--                            <option value="--><?//= $cat['id_category']; ?><!--">-->
<!--                                --><?//= $cat['category_name']; ?>
<!--                            </option>-->
<!--                        --><?php //} ?>
<!--                    </select>-->
<!--                </div>-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: 'Select an option'
        });

        CKEDITOR.replace('description', {
            height: 50
        });
    });
    // $(document).ready(function() {
    //     $('#product').dataTable({
    //         "lengthMenu": [
    //             [15, 25, 50, -1],
    //             [15, 25, 50, "All"]
    //         ],
    //         "bFilter": true,
    //         "bLengthChange": true,
    //         "paging": true,
    //         "deferRender": true,
    //         "destroy": true,
    //         "ajax": 'http://localhost:8081/product'
    //     });
    // });
</script>