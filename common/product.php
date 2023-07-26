<?php

include_once('./dbconn.php');
include_once('./function/controller.php');

$featuredProducts = [];
if (isset($_REQUEST['sub_cat_id'])) {
    $sub_cat_id = $_REQUEST['sub_cat_id'];
    $productQuery = "SELECT p.product_id, p.product_name, p.photo, p2.price, p2.discount, s.description as product_size FROM product p, product_price_details p2, size s WHERE p.product_id = p2.fk_product_id AND p2.fk_size_id = s.id AND p.fk_sub_cat_id = '$sub_cat_id' LIMIT 1";
    $featuredProducts = getQueryResult($con, $productQuery);
}

?>
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"><?php echo $product_type; ?></span></h2>
    <div class="row px-xl-5">
        <?php
        // Loop through the products array
        foreach ($featuredProducts as $product) {
            $product_id = $product['product_id'];
            $name = $product['product_name'];
            $photo = $product['photo'];
            $image = "../admin/resources/product/$product_id/$photo";
            $price =  $product['price'] - ($product['price'] * $product['discount'] / 100);
            $oldPrice = $product['discount'] == 0 ? "" : $product['price'];
            $discount = $product['discount'];

        ?>
            <a href="detail.php?product_id=<?= $product_id ?>" target="_blank" rel="noopener noreferrer">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?php echo $image; ?>" alt="">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href=""><?php echo $name; ?></a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>₹<?php echo $price; ?>/-</h5>
                                <?php if ($oldPrice != "") { ?>
                                    <h6 class="text-muted ml-2"><del> ₹<?php echo $oldPrice; ?>/-</del></h6>
                                <?php } ?>
                            </div>
                            <?php
                            if ($discount != 0) { ?>
                                <h6 style="color: green;"><?php echo $discount; ?>% off</h6>
                            <?php }
                            ?>

                        </div>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
</div>