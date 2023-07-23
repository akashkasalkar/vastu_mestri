
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
                    <h4 class="card-title">Size</h4>
                    <a href="./addSize.php">
                      <button type="button" class="btn btn-info ">Add new size</button>
                    </a>
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered text-center">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $qry="select * from size ";
                        $exc=mysqli_query($con,$qry);
                        $i=1;
                        while($row=mysqli_fetch_array($exc)) {
                           
                        ?> 
                          <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td>
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
