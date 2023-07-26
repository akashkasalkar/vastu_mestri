<?php include './sidebar.php' ?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-md-12 col-lg-12 col-sm-12 grid-margin stretch-card">
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Users</h4>
       <!-- <a href="{% url 'seller_add_products' %}">
         <button type="button" class="btn btn-info btn-rounded btn-fw">Add new Product</button>
       </a> -->
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th> Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody> 
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button type="button" class="btn btn-info btn-rounded btn-fw">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button>
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
<?php include './footer.php' ?>