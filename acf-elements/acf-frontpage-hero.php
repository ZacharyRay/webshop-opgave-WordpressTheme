<?php
$image = get_sub_field('frontpage_hero_image');     
$options = get_fields('options');
?>


<!-- Slider made with customized flickr -  -->

<div class="main-carousel">
<?php if(!empty($image)) { ?>
<?php foreach($image as $hero_image){ ?>
  <div class="carousel-cell" id="frontpage-hero-image" style="background-image: url(<?= $hero_image['hero_image'] ?>)";>
    <div id="frontpage-hero-text-container">
      <div id="headline"><?= $hero_image['hero_text'] ?></div>
      <div id="sub-title"><?= $hero_image['hero_secondary_text'] ?></div>
      <?php foreach($options as $option_fields){ ?>
      <a id="buy-button" href="#" style="background-color: <?= $option_fields['color_on_buttons'] ?>;">
      <?php } ?>
        Shop now
      </a>
    </div>
  </div>
<?php }} ?>
</div>