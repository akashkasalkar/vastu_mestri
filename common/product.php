<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"><?php echo $product_type;?></span></h2>
    <div class="row px-xl-5">
    <?php
        // Array of featured products data
        $featuredProducts = [
            [
                'name' => 'Product 1',
                'image' => 'img/product-1.jpg',
                'price' => 123.00,
                'oldPrice' => 123.00,
                'rating' => 4.5,
                'reviews' => 99
            ],
            [
                'name' => 'Product 2',
                'image' => 'img/product-2.jpg',
                'price' => 99.00,
                'oldPrice' => 109.00,
                'rating' => 4.2,
                'reviews' => 75
            ],
            // Add more featured product data as needed
        ];

        // Loop through the featured products array
        foreach ($featuredProducts as $product) {
            $name = $product['name'];
            $image = $product['image'];
            $price = $product['price'];
            $oldPrice = $product['oldPrice'];
            $rating = $product['rating'];
            $reviews = $product['reviews'];
    ?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo $image; ?>" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href=""><?php echo $name; ?></a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$<?php echo $price; ?></h5>
                        <h6 class="text-muted ml-2"><del>$<?php echo $oldPrice; ?></del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <?php
                            // Generate star ratings dynamically
                            $ratingStars = round($rating);
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $ratingStars) {
                                    echo '<small class="fa fa-star text-primary mr-1"></small>';
                                } else {
                                    echo '<small class="fa fa-star mr-1"></small>';
                                }
                            }
                        ?>
                        <small>(<?php echo $reviews; ?>)</small>
                    </div>
                </div>
            </div>
        </div>
    <?php
        }
    ?>
    </div>
</div>
