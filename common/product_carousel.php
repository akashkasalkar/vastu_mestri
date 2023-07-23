<?php
// Define dynamic product images
$productImages = [
    'img/product-1.jpg',
    'img/product-2.jpg',
    'img/product-3.jpg',
    'img/product-4.jpg',
    // Add more image paths as needed
];
?>

<div class="col-lg-5 mb-30">
    <div id="product-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner bg-light">
            <?php
            // Loop through the product images to generate carousel items
            foreach ($productImages as $index => $imagePath) {
                // Determine the active class for the first image
                $activeClass = ($index === 0) ? 'active' : '';
            ?>
                <div class="carousel-item <?php echo $activeClass; ?>">
                    <img class="w-100 h-100" src="<?php echo $imagePath; ?>" alt="Image">
                </div>
            <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
            <i class="fa fa-2x fa-angle-left text-dark"></i>
        </a>
        <a class="carousel-control-next" href="#product-carousel" data-slide="next">
            <i class="fa fa-2x fa-angle-right text-dark"></i>
        </a>
    </div>
</div>
