
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
                    <h4 class="card-title">Brand</h4>
                    <a href="./addBrand.php">
                      <button type="button" class="btn btn-info  btn-fw">Add new brand</button>
                    </a>
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered text-center">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Brand Name</th>
                            <th>Discount</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $qry="select * from brand ";
                        $exc=mysqli_query($con,$qry);
                        $i=1;
                        while($row=mysqli_fetch_array($exc)) {
                           
                        ?> 
                          <tr>
                            <td><?php echo $i ?></td>
                            <td><img src="<?php echo $row['photo'] ?>" alt=""></td>
                            
                            <td><?php echo $row['brand_name'] ?></td>
                            <td><?php echo $row['discount']." %" ?></td>

                            <td>
                            <a href=""  class="btn btn-info ">Edit</a>

                              <a href=""  class="btn btn-danger ">Delete</a>
                            </td>
                          </tr> 
                          <?php
                     $i++;
                    } ?>  
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
