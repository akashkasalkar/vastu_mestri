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
                    <?php 
                        if(!isset($_GET['product_id'])){
                            echo "<script>location='./viewProduct.php'</script>";
                        }
                        else{
                            $p_id=$_GET['product_id'];
                            $qry="select * from product where product_id='$p_id'";
                            $exc=mysqli_query($con,$qry);
                            while($row=mysqli_fetch_array($exc)){
                                $p_name=$row['product_name'];
                                $description=$row['description'];

                            }
                        }
                    ?>
                    <form class="forms-sample" enctype="multipart/form-data"  method="post" action="">
                        <div class="form-group">
                            <label for="p_name">Product name</label>
                            <input type="text" class="form-control " name="p_name" value="<?php echo $p_name ?>" id="p_name" placeholder="" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="p_desc">Product description</label>
                            <textarea type="text" class="form-control " value="<?php echo $description ?>" name="p_desc" id="p_desc" required readonly> <?php echo $description ?></textarea>
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
                            <input type="text" class="form-control " name="cgst" id="p_price" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="p_price">sgst - %</label>
                            <input type="text" class="form-control " name="sgst" id="p_price" placeholder="" required>
                        </div><div class="form-group">
                            <label for="p_price">igst- %</label>
                            <input type="text" class="form-control " name="igst" id="p_price" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="p_price">Product price - ₹</label>
                            <input type="text" class="form-control " name="p_price" id="p_price" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="p_discount">Product discount - ₹</label>
                            <input type="text" class="form-control " name="p_discount" id="p_discount" value="0" placeholder="" required>
                        </div>
                  
                       
                        <button type="submit" class="btn btn-rounded btn-outline-primary" name="add">Add</button>
                        <button class="btn btn-rounded btn-danger">Cancel</button>
                    </form>
                </div>
            </div>
            <?php 
                if(isset($_POST['add'])){
                    $p_id=$_GET['product_id'];
                    $p_size=$_POST['p_size'];
                    $p_price=$_POST['p_price'];
                    $p_discount=$_POST['p_discount'];
                    $cgst=$_POST['cgst'];
                    $sgst=$_POST['sgst'];
                    $igst=$_POST['igst'];

                    $qry="INSERT INTO `product_price_details`( `fk_product_id`, `fk_size_id`, `price`, `discount`, `cgst`, `sgst`, `igst`) VALUES('$p_id','$p_size','$p_price','$p_discount','$cgst','$sgst','$igst')";
                   
                     if(mysqli_query($con,$qry)){
                        echo "<script>alert('product updated');
                        location='./viewProduct.php'</script>";
                     }

                   

                }
            ?>
            </div>
            </div>
            <?php 
            
            ?>
<?php include './footer.php' ?>
