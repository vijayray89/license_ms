<div class="container-scroller">

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="card">
                    <div class="card-body">
                        
                        <h4 class="card-title">Horizontal Form</h4>
                        <p class="card-description" style="text-align: center;color: #39cc05;">
                        <?php 
                        if(isset($response['status'])){
                            echo ($response['status']=='true') ? $response['msg'] : '';
                        }
                        ?>
                        </p>
                        <form class="forms-sample" action="<?= BASE_URL.'license_ms/index.php/welcome/registration'?>" method="POST">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">User Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="txtusername" autocomplete="off" class="form-control" id="exampleInputUsername2" placeholder="Username" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" autocomplete="off" name="txtpassword" class="form-control" id="exampleInputPassword2" placeholder="Password" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" autocomplete="off" name="txtemail" class="form-control" id="exampleInputEmail2" placeholder="Email" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role" class="col-sm-3 col-form-label">Select user role</label>
                                <select class="form-control col-sm-9" id="role" name="user_role">
                                    <option value="">--Select Option--</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Lab Manager</option>
                                    <option value="3">Lab Technician</option>
                                </select>
                            </div>




                            <button type="submit" class="btn btn-primary me-2"> Submit </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>