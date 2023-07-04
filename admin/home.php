<?php include './sidebar.php' ?>
<div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="home-tab">
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    <div class="col-12 tab-content tab-content-basic">
                                    <div class="row">
    <div class="col-md-6 col-lg-4 grid-margin stretch-card">
        <div class="card bg-primary card-rounded">
            <div class="card-body pb-0">
                <h4 class="card-title card-title-dash text-white mb-4">Categories</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class="text-white">{{ total_category }}</h2>
                    </div>
                    <div class="col-sm-8">
                        <div class="status-summary-chart-wrapper pb-4">
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 grid-margin stretch-card">
        <div class="card card-rounded" style="background-color: #c99e99;">
            <div class="card-body pb-0">
                <h4 class="card-title card-title-dash text-white mb-4">Products</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class="status-summary-ight-black">{{total_products}}</h2>
                    </div>
                    <div class="col-sm-8">
                        <div class="status-summary-chart-wrapper pb-4">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 grid-margin stretch-card">
        <div class="card bg-primary card-rounded">
            <div class="card-body pb-0">
                <h4 class="card-title card-title-dash text-white mb-4">Users</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class="text-white">{{total_user}}</h2>
                    </div>
                    <div class="col-sm-8">
                        <div class="status-summary-chart-wrapper pb-4">
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 grid-margin stretch-card">
        <div class="card bg-primary card-rounded">
            <div class="card-body pb-0">
                <h4 class="card-title card-title-dash text-white mb-4">Orders</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class="text-white">{{total_orders}}</h2>
                    </div>
                    <div class="col-sm-8">
                        <div class="status-summary-chart-wrapper pb-4">

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
                        </div>
                    </div>
                </div>
<?php include './footer.php' ?>
