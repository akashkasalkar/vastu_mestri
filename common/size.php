<div class="d-flex mb-4 mt-3">
    <strong class="text-dark mr-3">Size:</strong>
    <?php
    // Loop through the color options to generate radio buttons and labels
    foreach ($product_size as $index => $data) {
        $checked = $product_price_id == $data['ppd_id'] ? "true" : "false";
        // echo ($product_price_id . "-" . $checked . "-" . $data['ppd_id']);
        $sizeId = 'size-' . ($index + 1); // Generate a unique ID for each radio button
    ?>
        <div class="custom-control custom-radio custom-control-inline">
            <!-- <input type="text" id="product_price_id" value="<?= $data['ppd_id'] ?>"> -->
            <input type="radio" onchange="sizeToggle(this.value)" <?php echo $checked == "true" ? 'checked=checked' : ''; ?> class="custom-control-input" value="<?= $data['ppd_id'] ?>" id="<?php echo $sizeId; ?>" name="size">
            <label class="custom-control-label" for="<?php echo $sizeId; ?>"><?php echo $data['size']; ?></label>
        </div>
    <?php } ?>
</div>