
<?php include './sidebar.php' ?>
<div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-md-12 col-lg-12 col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <!-- <a href="./viewCategory.php" style="margin-left : 1000px">
                                     <button type="button" class="btn btn-info btn-rounded btn-fw text-black" >view category</button>
                                </a> -->
                            <div class="card-body">
                                
                                <h4 class="card-title">Add new Brand</h4>
                                
                                <form class="forms-sample" method="post" enctype="multipart/form-data">   
                                    <div class="form-group">
                                        <label for="cat_name">Brand name</label>
                                        <input type="text" class="form-control " name="brand_name"  placeholder=" " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cat_name">Select Category </label>
                                        <select name="cat_id" id="" class="js-example-basic-single form-control" required>
                                            <option value="#" selected disabled>Select category</option>
                                            <?php
                                            $qry="select * from category";
                                            $exc=mysqli_query($con,$qry);
                                            while($row=mysqli_fetch_array($exc)){
                                                ?>
                                                <option value="<?php echo $row['category_id'] ?>"><?php echo $row['name'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="cat_name">Brand Discount</label>
                                        <input type="text" class="form-control " name="brand_discount"  placeholder="ex: 0,2,4" value="0" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cat_name">Brand Photo</label>
                                        <input type="file" class="" name="brand_photo"  placeholder=" " required>
                                    </div>
                                    <button type="submit" class="btn btn-rounded btn-outline-primary" name="add">Add</button>
                                    <button class="btn btn-rounded btn-danger">Cancel</button>
                                </form>
                                <?php
                                    if(isset($_POST['add'])){
                                    
                                    $brand_name=$_POST['brand_name'];
                                    $discount=$_POST['brand_discount'];
                                    $cat_id=$_POST['cat_id'];
                                    // file upload start 
                                    $b_file=$_FILES['brand_photo'];
                                    $b_file_name=$_FILES["brand_photo"]["name"];
                                    $tm=md5(time());
                                    $dst_file_path="./resources/brand";

                                    if(!is_dir($dst_file_path)){
                                        mkdir($dst_file_path,0777, true);
                                    }
                                 
                                    $dst=$dst_file_path."/".$tm.$b_file_name;
                                    $file_status=move_uploaded_file($_FILES["brand_photo"]["tmp_name"],$dst);

                                    $qry="INSERT INTO `brand`(`fk_category_id`, `brand_name`,`discount`, `photo`) VALUES('$cat_id','$brand_name','$discount','$dst')";
                                    if(mysqli_query($con,$qry)){
                                        echo "<script>
                                            window.location='viewBrand.php'
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
