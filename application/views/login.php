<br>
<br>
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Login</h4>

                <form class="forms-sample" action="<?= BASE_URL.'license_ms/index.php/welcome/login'?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" class="form-control" name="username" id="exampleInputUsername1" placeholder="Username" />
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" />
                    </div>

                    <button type="submit" class="btn btn-primary me-2"> Login </button>
                    <a href="<?= BASE_URL.'license_ms/index.php/Welcome/registration' ?>" class="btn btn-primary me-2"> Register Now </a>
                    
                </form>
            </div>
        </div>
    </div>
</div>