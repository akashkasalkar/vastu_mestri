<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
    <div class="row px-xl-5 pb-3">
        <?php
        // Array of category data
        $categories = [
            [
                'name' => 'Category 1',
                'image' => 'img/cat-1.jpg',
                'products' => 100
            ],
            [
                'name' => 'Category 2',
                'image' => 'img/cat-2.jpg',
                'products' => 75
            ],
            // Add more category data as needed
        ];

        // Loop through the categories array
        foreach ($categories as $category) {
            $name = $category['name'];
            $image = $category['image'];
            $products = $category['products'];
        ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="<?php echo $image; ?>" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6><?php echo $name; ?></h6>
                            <small class="text-body"><?php echo $products; ?> Products</small>
                        </div>
                    </div>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
</div>