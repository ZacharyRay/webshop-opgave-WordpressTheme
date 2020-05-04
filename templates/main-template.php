<?php 
/* 
Template Name: Main Template
*/
get_header();
// call layouts
  if( have_rows('content') ):
  while ( have_rows('content') ) : the_row();
?>




<!-- ACF: -->

            <?php //hero ?>
      <?php if( get_row_layout() == 'hero' ):?>
          <?php get_template_part('acf-elements/acf', 'hero'); ?>
      <?php endif; ?>

<?php
  endwhile;  
  endif;
?>


<!-- Woo -->

<?php get_template_part('woo-elements/product', 'display'); ?>




<?php get_footer(); ?>