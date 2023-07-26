<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <img height="60" src="./img/logo.png" alt="logo" srcset="">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <!-- categories -->
                        <?php include('./common/nav_cat.php'); ?>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <div class="dropdown" style="display: inline-block;">
                            <a href="#" class="btn px-0 ml-3 dropdown-toggle" data-toggle="dropdown">
                               <i class="fas fa-user text-primary"></i>
                            </a>
                            <div class="dropdown-menu">
                                <!-- Dropdown items -->
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Orders</a>
                                <a class="dropdown-item" href="#">Logout</a>
                                <!-- You can add more dropdown items here -->
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>