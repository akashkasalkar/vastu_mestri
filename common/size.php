<div class="d-flex mb-4 mt-3">
    <strong class="text-dark mr-3">Size:</strong>
    <form>
        <?php
        // Loop through the color options to generate radio buttons and labels
        foreach ($product_size as $index => $data) {
            $sizeId = 'size-' . ($index + 1); // Generate a unique ID for each radio button
        ?>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" value="<?= $data['ppd_id']?>" id="<?php echo $sizeId; ?>" name="color">
                <label class="custom-control-label" for="<?php echo $sizeId; ?>"><?php echo $data['size']; ?></label>
            </div>
        <?php } ?>
    </form>
</div>