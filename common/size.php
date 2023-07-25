<div class="d-flex mb-4">
    <strong class="text-dark mr-3">Size:</strong>
    <form>
        <?php
        // Loop through the color options to generate radio buttons and labels
        foreach ($product_size as $index => $size) {
            $sizeId = 'size-' . ($index + 1); // Generate a unique ID for each radio button
        ?>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="<?php echo $sizeId; ?>" name="color">
                <label class="custom-control-label" for="<?php echo $sizeId; ?>"><?php echo $size; ?></label>
            </div>
        <?php } ?>
    </form>
</div>