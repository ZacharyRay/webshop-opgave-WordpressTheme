<?php
    $sellingpoints = get_sub_field('frontpage_unique_selling_points');
?>
<div id="usp-frontpage-wrapper">
    <div id="usp-frontpage-flex">
    <?php foreach ($sellingpoints as $sellingpointbox) { ?>
        <div class="usp-box">
            <div class="usp-icon" style="background-image: url('<?= $sellingpointbox['sellingpoint_icon'] ?>')"></div>
            <div class="usp-text"><?= $sellingpointbox['selling_point'] ?></div>
        </div>
    <?php } ?>
    </div>
</div>