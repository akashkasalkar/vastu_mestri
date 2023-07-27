<?php
include_once('./common/header.php');
include_once('./dbconn.php');
include_once('./function/controller.php');

$productData = [];
if (isset($_REQUEST['product_id'])) {
    $product_id = $_REQUEST['product_id'];
    $productQuery = "SELECT p.product_id, p.product_name as name,p.description, p.photo, p2.ppd_id, p2.price, p2.discount, s.description as product_size FROM product p, product_price_details p2, size s WHERE p.product_id = p2.fk_product_id AND p2.fk_size_id = s.id AND p.product_id = '$product_id' ORDER BY p2.ppd_id DESC";
    $productRes = getQueryResult($con, $productQuery);
    foreach ($productRes as $singleProduct) {
        extract($singleProduct);
        $image = "./admin/resources/product/$product_id/$photo";
        $productData[$product_id]['name'] = $name;
        $productData[$product_id]['description'] = $description;
        $productData[$product_id]['product_size'][$ppd_id]['ppd_id'] = $ppd_id;
        $productData[$product_id]['product_size'][$ppd_id]['size'] = $product_size;
        $productData[$product_id]['product_size'][$ppd_id]['price'] = $price;
        $productData[$product_id]['product_size'][$ppd_id]['discount'] = $discount;

        $productData[$product_id]['price'] =  $price - ($price * $discount / 100);
        $productData[$product_id]['oldPrice'] = $price;
        $productData[$product_id]['discount'] = $discount;
        $oldPrice = $price ==  $price - ($price * $discount / 100) ? "" :  "₹ " . $price . "/-";
        $_discount = $discount != 0 ? $discount . " % off" : "";
    }
    $product_size = $productData[$product_id]['product_size'];
}
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
                    <h3><?php echo $productData[$product_id]['name']; ?></h3>
                    <h3 id="price_id" class="font-weight-semi-bold mb-1">₹ <?php echo $productData[$product_id]['price']; ?> /-</h3>
                    <h6 id="old_price_id" class="text-muted ml-1" style="display: inline"><del> <?php echo $oldPrice; ?></del></h6>
                    <h6 id="discount_id" style="color: green;display: inline"><?php echo $_discount; ?></h6>
                    <?php include('./common/size.php'); // Assuming size.php contains the dynamic generation of size options 
                    ?>

                    <h4 class="mb-3">Product Description</h4>
                    <p class="mb-4"><?php echo $productData[$product_id]['description']; ?></p>

                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" readonly class="form-control bg-secondary border-0 text-center" value="1">
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
    <script src="./js/dynamic_price.js"></script>
    <!-- Footer Start -->
    <?php include_once('./common/footer.php'); ?>
    <!-- Footer End -->