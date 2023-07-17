<?php include './sidebar.php' ?>
<div class="main-panel">
            <div class="content-wrapper">
            <div class="col-md-12 col-lg-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add new product</h4>
                    <a href="./viewProduct.php" style="margin-left : 1000px">
                        <button type="button" class="btn btn-info btn-rounded btn-fw text-black" >view product</button>
                    </a>
                    <form class="forms-sample" enctype="multipart/form-data"  method="post" action="">
                        <div class="form-group">
                            <label for="p_name">Product name</label>
                            <input type="text" class="form-control form-control-lg" name="p_name" id="p_name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="p_desc">Product description</label>
                            <textarea type="text" class="form-control form-control-lg" name="p_desc" id="p_desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="p_photo">Product photo</label>
                            <input type="file" class="form-control form-control-lg"  name="p_photo" id="p_photo">
                        </div>
                        <div class="form-group">
                            <label for="p_price">Product price - ₹</label>
                            <input type="text" class="form-control form-control-lg" name="p_price" id="p_price" placeholder="eg. 100">
                        </div>
                        <div class="form-group">
                            <label for="p_discount">Product discount - ₹</label>
                            <input type="text" class="form-control form-control-lg" name="p_discount" id="p_discount" placeholder="eg. 5">
                        </div>
                        <div class="form-group">
                            <label for="p_qty">Product quantity - </label>
                            <input type="text" class="form-control form-control-lg" name="p_qty" id="p_qty" placeholder="eg. 120">
                        </div>
                        <div class="form-group">
                            <select id="cat" class="js-example-basic-single w-100" name="cat">
                                <option >Select Category</option>
                                <option value=""></option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-rounded btn-outline-primary">Add</button>
                        <button class="btn btn-rounded btn-danger">Cancel</button>
                    </form>
                </div>
            </div>
            </div>
            </div>
<?php include './footer.php' ?>
