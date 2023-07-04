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
        <h4 class="card-title">Categories</h4>
       <a href="./addCategory.php">
         <button type="button" class="btn btn-info btn-rounded btn-fw">Add new category</button>
       </a>
        <div class="table-responsive pt-3">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Category name
                </th>
             
                <th>
                  Delete
                </th>
              </tr>
            </thead>
            <tbody>
              {% for data in all_category %}
              <tr>
                <td>
                  {{ forloop.counter}}
                </td>
                <td>
                 {{ data.cat_name }}
                </td>
              
                <td>
                  <a href="{% url 'seller_delete_categories' data.cat_id %}"  class="btn btn-danger btn-rounded btn-fw">Delete</a>
             
                </td>

              </tr>
              {% endfor %}
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
