<div class="container-scroller">

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="card">
                    <div class="card-body">
                        
                        <h4 class="card-title">Horizontal Form</h4>
                        <p class="card-description" style="text-align: center;color: #39cc05;">
                        <?php 
                        $key = rand(100000, 999999);
                        
                        if(isset($response['status'])){
                            echo ($response['status']=='true') ? $response['msg'] : '';
                        }
                        ?>
                        </p>
                        <form class="forms-sample" action="<?= BASE_URL.'license_ms/index.php/welcome/add_license'?>" method="POST">
                            <div class="form-group row">
                                <label for="product" class="col-sm-3 col-form-label">Product Type</label>
                                <div class="col-sm-9">
                                    <input type="text" name="txtproductType" autocomplete="off" class="form-control" id="product" placeholder="Product Type.." />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="licenseKey" class="col-sm-3 col-form-label">License Key</label>
                                <div class="col-sm-9">
                                    <input type="text" autocomplete="off" name="txtlicenseKey" class="form-control"
                                     value="<?= $key; ?>" id="licenseKey" placeholder="licence Key.." />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="expiryDate" class="col-sm-3 col-form-label">Expiry Date</label>
                                <div class="col-sm-9">
                                    <input type="date" autocomplete="off" name="txtexpiryDate" class="form-control" id="expiryDate" placeholder="Expiry Date.." />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role" class="col-sm-3 col-form-label">Assign To</label>
                                <select class="form-control col-sm-9" id="role" name="user_role">
                                    <option value="">--Select Option--</option>
                                    <?php
                                        foreach($lab_technitians as $key=>$value){
                                         
                                            echo "<option value='".$value['id']."'>".$value['username']."</option>";
                                        }
                                    ?>
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