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
         <button type="button" class="btn btn-info btn-rounded btn-fw">Add new Product</button>
       </a>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>Photo</th>
                <th>
                   Name
                </th>
                <th>Description</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>
                  Edit
                </th>
                <th>
                  Delete
                </th>
              </tr>
            </thead>
            <tbody>
              {% for data in all_product %}
              <tr>
                <td>
                  {{ forloop.counter}}
                </td>
                <td>
                  {% if data.p_photo %}
                    <img src="{{ data.p_photo.url }}" alt="product-img" style="height: 150px; width: 150px; border-radius: 1px;" >
                    {% endif %}
                </td>
                <td>
                    {{ data.p_name }}
                </td>
                <td>
                    {{ data.p_desc }}
                </td>
                <td>
                    {{ data.price }}
                </td>
                <td>
                    {{ data.discount }}
                </td>
                <td>
                    {{ data.quantity }}
                </td>
                <td>
                    {{ data.cat.cat_name }}
                </td>
                <td>
                    <a href="{% url 'seller_edit_product' data.product_id %}"><button type="button" class="btn btn-info btn-rounded btn-fw">Edit</button></a>
                </td>
                <td>
                   <a href="{% url 'seller_delete_product' data.product_id %}"><button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button></a> 
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
