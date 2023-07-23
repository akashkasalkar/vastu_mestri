<?php include_once('./common/header.php'); ?>
<?php
$productData = array(
    'name' => 'Product Name Goes Here',
    'price' => '150.00',
    'description' => 'Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt',
    'sizeOptions' => array('XS', 'S', 'M', 'L', 'XL')
);
?>

<body>
    <!-- Topbar Start -->
    <?php include_once('./common/topbar.php'); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include_once('./common/navbar.php'); ?>
    <!-- Navbar End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <?php include('./common/product_carousel.php') ?>
            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3><?php echo $productData['name']; ?></h3>
                    <h3 class="font-weight-semi-bold mb-4">₹ <?php echo $productData['price']; ?> /-</h3>

                    <?php include('./common/size.php'); // Assuming size.php contains the dynamic generation of size options 
                    ?>

                    <h4 class="mb-3">Product Description</h4>
                    <p class="mb-4"><?php echo $productData['description']; ?></p>

                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->

    <!-- Footer Start -->
    <?php include_once('./common/footer.php'); ?>
    <!-- Footer End -->