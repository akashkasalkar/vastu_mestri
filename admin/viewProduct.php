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
                                                  <th>Price</th>
                                                  <th>Discount</th>
                                                  <th>Quantity</th>
                                                  <th>Category</th>
                                                  <th> Edit</th>
                                                  <th> Delete </th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td>
                                                      <a href=""><button type="button" class="btn btn-info btn-rounded btn-fw">Edit</button></a>
                                                  </td>
                                                  <td>
                                                    <a href=""><button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button></a> 
                                                  </td>
                                                </tr>
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
