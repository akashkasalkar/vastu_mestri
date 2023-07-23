
<?php include './sidebar.php' ?>
<div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-md-12 col-lg-12 col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <!-- <a href="./viewCategory.php" style="margin-left : 1000px">
                                     <button type="button" class="btn btn-info btn-rounded btn-fw text-black" >view category</button>
                                </a> -->
                            <div class="card-body">
                                
                                <h4 class="card-title">Add new sub-category</h4>
                                
                                <form class="forms-sample" method="post" enctype="multipart/form-data">   
                                    <div class="form-group">
                                        <label for="cat_name">Category name</label>
                                        <input type="text" class="form-control " name="cat_name" id="cat_name" placeholder=" ">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Select brand</label>
                                        <select name="brand_id" class="js-example-basic-single form-control" required>
                                            <option value="#" disabled selected>Select Brand</option>
                                            <?php 
                                                $qry="select * from brand";
                                                $exc=mysqli_query($con,$qry);
                                                while($row=mysqli_fetch_array($exc)){
                                                    ?>
                                            <option value="<?php echo $row['brand_id'] ?>"><?php echo $row['brand_name'] ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="cat_name"> Discount</label>
                                        <input type="text" class="form-control " name="discount"  placeholder="ex: 0,2,4" value="0" required>
                                    </div>
                                    <button type="submit" class="btn  btn-outline-primary" name="add">Add</button>
                                    <button class="btn  btn-danger">Cancel</button>
                                </form>
                                <?php
                                    if(isset($_POST['add'])){
                                        $discount=$_POST['discount'];
                                        $cat_name=$_POST['cat_name'];
                                        $brand_id=$_POST['brand_id'];
                                    $qry="INSERT INTO `sub_category`( `fk_brand_id`, `name`, `discount`) VALUES('$brand_id','$cat_name','$discount')";
                                    if(mysqli_query($con,$qry)){
                                        echo "<script>
                                            window.location='viewSubCategory.php'
                                        </script>";
                                    }
                                        else{
                                            echo "<script>alert('Error')</script>";
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
<?php include './footer.php' ?>
