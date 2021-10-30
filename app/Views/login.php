<?php require_once 'template/header.php'; ?>
<body style="background-color: #72cdb8;">
    <div class="container d-flex h-100">
        <div class="row align-self-center justify-content-around w-100">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Admin Log in</h5>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="act" class="btn btn-primary btn-info">Log in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>