
<?php include './sidebar.php' ?>
<div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-md-12 col-lg-12 col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <!-- <a href="./viewCategory.php" style="margin-left : 1000px">
                                     <button type="button" class="btn btn-info btn-rounded btn-fw text-black" >view category</button>
                                </a> -->
                            <div class="card-body">
                                
                                <h4 class="card-title">Add new size</h4>
                                
                                <form class="forms-sample" method="post" enctype="multipart/form-data">   
                                    <div class="form-group">
                                        <label for="cat_name">Description</label>
                                        <input type="text" class="form-control " name="description" id="cat_name" placeholder=" " required>
                                    </div>
                                    <button type="submit" class="btn btn-rounded btn-outline-primary" name="add">Add</button>
                                    <button class="btn btn-rounded btn-danger">Cancel</button>
                                </form>
                                <?php
                                    if(isset($_POST['add'])){
                                        $description=$_POST['description'];
                                    $qry="INSERT INTO `size`( `description`) VALUES ('$description')";
                                    if(mysqli_query($con,$qry)){
                                        echo "<script>
                                            window.location='viewSize.php'
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
