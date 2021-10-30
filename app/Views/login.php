<?php require_once 'template/header.php'; ?>
<body style="background-color: #72cdb8;">
    <div class="container d-flex h-100">
        <div class="row align-self-center justify-content-around w-100">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Admin Log in</h5>
                    <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif;?>
                    <form action="<?php echo base_url();?>/login" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-info">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>