<?php
// Define dynamic color options
$colorOptions = [
    '1/2',
    '1/3',
    '1/4',
    '1',
    '2'
];
?>

<div class="d-flex mb-4">
    <strong class="text-dark mr-3">Size:</strong>
    <form>
        <?php
        // Loop through the color options to generate radio buttons and labels
        foreach ($colorOptions as $index => $color) {
            $colorId = 'color-' . ($index + 1); // Generate a unique ID for each radio button
        ?>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="<?php echo $colorId; ?>" name="color">
                <label class="custom-control-label" for="<?php echo $colorId; ?>"><?php echo $color; ?></label>
            </div>
        <?php } ?>
    </form>
</div>
