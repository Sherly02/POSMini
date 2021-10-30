<?php require_once 'template/header.php'; ?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #72cdb8;">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand h1" href="#" style="color: #ffffff">Majoo Teknologi Indonesia</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="<?php base_url();?>admin_login" class="btn btn-outline-light my-2 my-sm-0">
                <i class="fa fa-user"></i>&nbsp;<b>Login</b>
            </a>
        </form>
    </div>
</nav>
<div class="container d-flex h-100">
    <div class="row align-self-center justify-content-around w-100">
        <?php foreach ($products as $key=>$product) { ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo 'http://localhost:8080/apime/public/assets/uploads/' . $product['product_image']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $product['product_name']; ?></h5>
                    <h5 class="card-title text-center">Rp <b><?= number_format($product['price']); ?></b></h5>
                    <p class="card-text"><?= $product['description']; ?></p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-primary btn-info">Beli</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--<div class="row">-->
<!--    <div class="col-md-12 d-flex justify-content-center" style="margin-top: auto !important;">-->

<!--    </div>-->
<!--</div>-->