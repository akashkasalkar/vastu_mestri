<?php include './sidebar.php' ?>
<div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-md-12 col-lg-12 col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Change Password</h4>
                                <form class="forms-sample" method="post" action="">   
                                    <div class="form-group">
                                        <label for="cat_name">Enter Old Password</label>
                                        <input type="text" class="form-control form-control-lg" name="old_pass" id="" placeholder="****** ">
                                    </div>
                                    <div class="form-group">
                                        <label for="cat_name">Enter New Password</label>
                                        <input type="text" class="form-control form-control-lg" name="new_pass" id="" placeholder="******">
                                    </div>
                                    <button type="submit" class="btn btn-rounded btn-outline-primary">Change Password</button>
                                    <button class="btn btn-rounded btn-danger">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<?php include './footer.php' ?>