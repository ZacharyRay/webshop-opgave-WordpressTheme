<?php
            $banner = get_sub_field('frontpage_show_banner');
            $banner_text = get_sub_field('frontpage_banner_text');
?>


<div id="frontpage-banner" style="background-image: url('<?= $banner ?>')">
    <div><?= $banner_text ?></div>
</div>