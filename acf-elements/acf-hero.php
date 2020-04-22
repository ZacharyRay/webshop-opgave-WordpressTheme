<?php
            $image = get_sub_field('hero_image');
?>

<div id="hero-wrap">
  <div id="hero-image" style="background-image: url('<?= $image ?>')"></div>
</div>









<!-- 
        <div class="carousel">
              <?php foreach($image as $the_image) { ?>
                <div class="carousel-cell" style="background-image: url('<?= $the_image['choose_image'] ?>')">
                  <div class="video">
                    <?= $the_image['choose_video']; ?>
                  </div>
                </div>
              <?php } ?>
            </div>

            -->