<?php include './sidebar.php' ?>
<div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="home-tab">
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    <div class="col-12 tab-content tab-content-basic">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                      <div class="card">
                                        <div class="card-body">
                                          <h4 class="card-title">Products</h4>
                                        <a href="./addProduct.php">
                                          <button type="button" class="btn btn-info ">Add new Product</button>
                                        </a>
                                          <div class="table-responsive pt-3">
                                            <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th>#</th>
                                                  <th>Photo</th>
                                                  <th>Name</th>
                                                  <th>Description</th>
                                                  <th>Category</th>
                                                  <th>Brand</th>
                                                  <th>Sub-Category</th>
                                                  <th>Size</th>

                                                  <th>Price</th>
                                                  <th>Discount</th> 
                                                  <th>cgst</th>
                                                  <th>sgst</th>
                                                  <th>igst</th>                 
                                                  <th> Edit</th>
                                                  <th> Delete </th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <?php 
                                                  $qry="select *,p.photo as p_photo,p.description as p_description,c.name as category_name,sc.name sc_name
                                                  from product p,brand b,category c,sub_category sc
                                                  where p.fk_sub_cat_id=sc.id
                                          
                                                  AND sc.fk_brand_id=b.brand_id
                                                  AND b.fk_category_id=c.category_id";
                                                  $exc=mysqli_query($con,$qry);
                                                  $i=1;
                                                  while($row=mysqli_fetch_array($exc)){
                                                    $p_id=$row['product_id'];
                                                    ?>

                                                  
                                                <tr>
                                                  <td><?php echo $i ?></td>
                                                  <td><img src="./resources/product/<?php echo $row['product_id'].'/'.$row['p_photo'] ?>" alt=""style="width:100px;height:100px;"></td>
                                                  <td><?php echo $row['product_name'] ?></td>
                                                  <td><?php echo $row['p_description'] ?></td>
                                                  <td><?php echo $row['category_name'] ?></td>
                                                  <td><?php echo $row['brand_name'] ?></td>
                                                  <td><?php echo $row['sc_name'] ?></td>

                                                  <td colspan="6">

                                                    <table class="table table-stripped">
                                                      <tr>
                                                        
                                                      </tr>
                                                      <?php 
                                                        $qry2="select * from product_price_details,size 
                                                        where  product_price_details.fk_size_id=size.id
                                                        and fk_product_id='$p_id'";
                                                        $exc2=mysqli_query($con,$qry2);
                                                        while($row2=mysqli_fetch_array($exc2)){
                                                          ?>
                                                      <tr>
                                                      <td><?php echo $row2['description'] ?></td>
                                                      <td><?php echo $row2['price'] ?></td>
                                                      <td><?php echo $row2['discount'] ?></td>
                                                      <td><?php echo $row2['cgst'] ?>%</td>
                                                      <td><?php echo $row2['sgst'] ?>%</td>
                                                      <td><?php echo $row2['igst'] ?>%</td>


                                                      </tr>
                                                          <?php
                                                        }
                                                      ?>
                                                      
                                                      <tr>
                                                        <td colspan="6" class="text-center">
                                                            <a href="./upgradeProductDetails.php?product_id=<?php echo $row['product_id'] ?>" class="btn btn-primary text-light ">Add</a>

                                                        </td>
                                                      </tr>
                                                    </table>
                                                  </td>
                                              
                                                  
                                                  <td>
                                                      <a href=""><button type="button" class="btn btn-info btn-rounded btn-fw">Edit</button></a>
                                                  </td>
                                                  <td>
                                                    <a href=""><button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button></a> 
                                                  </td>
                                                </tr>
                                                <?php
                                                $i++;
                                                  }
                                                ?>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php include './footer.php' ?>
