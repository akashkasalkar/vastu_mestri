<?php include './sidebar.php' ?>
<div class="main-panel">
            <div class="content-wrapper">
            <div class="col-md-12 col-lg-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Upgrade product details</h4>
                    <a href="./viewProduct.php" style="margin-left : 1000px">
                        <button type="button" class="btn btn-info  btn-fw text-black" >view product</button>
                    </a>
                    <form class="forms-sample" enctype="multipart/form-data"  method="post" action="">
                        <div class="form-group">
                            <label for="p_name">Product name</label>
                            <input type="text" class="form-control " name="p_name" id="p_name" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="p_desc">Product description</label>
                            <textarea type="text" class="form-control " name="p_desc" id="p_desc" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Select Size</label>
                            <select id="cat" class="js-example-basic-single form-control"  name="p_size" required>
                                <option value="#" selected disabled >Select Size</option>
                                <?php 
                                $qry="select * from size
                                ";
                                $exc=mysqli_query($con,$qry);
                                $i=1;
                                while($row=mysqli_fetch_array($exc)) {
                           
                        ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['description'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                      
                        <div class="form-group">
                            <label for="p_price">cgst - %</label>
                            <input type="text" class="form-control " name="p_price" id="p_price" placeholder="eg. 100" required>
                        </div>
                        <div class="form-group">
                            <label for="p_price">Product price - ₹</label>
                            <input type="text" class="form-control " name="p_price" id="p_price" placeholder="eg. 100" required>
                        </div><div class="form-group">
                            <label for="p_price">Product price - ₹</label>
                            <input type="text" class="form-control " name="p_price" id="p_price" placeholder="eg. 100" required>
                        </div>
                        <div class="form-group">
                            <label for="p_price">Product price - ₹</label>
                            <input type="text" class="form-control " name="p_price" id="p_price" placeholder="eg. 100" required>
                        </div>
                        <div class="form-group">
                            <label for="p_discount">Product discount - ₹</label>
                            <input type="text" class="form-control " name="p_discount" id="p_discount" value="0" placeholder="eg. 5" required>
                        </div>
                  
                       
                        <button type="submit" class="btn btn-rounded btn-outline-primary" name="add">Add</button>
                        <button class="btn btn-rounded btn-danger">Cancel</button>
                    </form>
                </div>
            </div>
            <?php 
                if(isset($_POST['add'])){
                    $p_name=$_POST['p_name'];
                    $p_desc=$_POST['p_desc'];
                    // $p_size=$_POST['p_size'];
                    $s_cat_id=$_POST['s_cat_id'];
                    // $p_price=$_POST['p_price'];
                    // $p_discount=$_POST['p_discount'];
                    // $p_name=$_POST['p_name'];
                     // file upload start 
                     $p_photo=$_FILES['p_photo'];
                     $p_photo_name=$_FILES["p_photo"]["name"];
                   
                    
                     $qry="INSERT INTO `product`(`fk_sub_cat_id`, `fk_size_id`, `product_name`, `description`, `price`, `discount`,`photo`) VALUES ('$s_cat_id','$p_size','$p_name','$p_desc','$p_price','$p_discount','$p_photo_name')";
                     if(mysqli_query($con,$qry)){
                        echo "<script>alert('product added')</script>";
                     }

                    echo  $last_id = mysqli_insert_id($con);
                     $dst_file_path="./resources/product/".$last_id;
                     if(!is_dir($dst_file_path)){
                         mkdir($dst_file_path,0777, true);
                     }
                  
                     $dst=$dst_file_path."/".$p_photo_name;
                     $file_status=move_uploaded_file($_FILES["p_photo"]["tmp_name"],$dst);
                     echo "<script>location='./viewProduct.php'</script>";

                }
            ?>
            </div>
            </div>
            <?php 
            
            ?>
<?php include './footer.php' ?>
