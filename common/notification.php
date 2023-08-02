<?php
if ($title != "" && $msg != "" && $color != "") {
?>
    <div class="alert alert-dismissible fade show" role="alert" id="notification" style="background-color:<?= $color ?>">
        <strong id="alert-title"><?= $title ?></strong>
        <p id="alert-msg"><?= $msg ?></p>
        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button> -->
    </div>
<?php
}
?>