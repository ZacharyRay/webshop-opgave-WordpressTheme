<?php 
/* 
Template Name: Main Template
*/
get_header();
// call layouts
  if( have_rows('content') ):
  while ( have_rows('content') ) : the_row();
?>




<!-- acf-elements & woo-elements: -->

            <?php //frontpage hero ?>
      <?php if( get_row_layout() == 'frontpage_hero' ):?>
          <?php get_template_part('acf-elements/acf', 'frontpage-hero'); ?>
      <?php endif; ?>

      <?php //frontpage categories (woocommerce) ?>
      <?php if( get_row_layout() == 'frontpage_categories' ):?>
        <?php get_template_part('woo-elements/woo', 'frontpage-categories'); ?>
      <?php endif; ?>

      <?php //frontpage usp ?>
      <?php if( get_row_layout() == 'frontpage_usp' ):?>
        <?php get_template_part('acf-elements/acf', 'frontpage-usp'); ?>
      <?php endif; ?>

      <?php //frontpage on sale (woocommerce) ?>
      <?php if( get_row_layout() == 'frontpage_on_sale' ):?>
        <?php get_template_part('woo-elements/woo', 'frontpage-on-sale'); ?>
      <?php endif; ?>

      <?php //frontpage banner ?>
      <?php if( get_row_layout() == 'frontpage_banner' ):?>
        <?php get_template_part('acf-elements/acf', 'frontpage-banner'); ?>
      <?php endif; ?>

      <?php //frontpage recommended (woocommerce) ?>
      <?php if( get_row_layout() == 'frontpage_recommended' ):?>
        <?php get_template_part('woo-elements/woo', 'frontpage-recommended'); ?>
      <?php endif; ?>

      <?php //frontpage recommended (woocommerce) ?>
      <?php if( get_row_layout() == 'subpage' ):?>
        <?php get_template_part('acf-elements/acf', 'subpage'); ?>
      <?php endif; ?>

<?php
  endwhile;  
  endif;
?>




<!-- Woo -->



<?php get_template_part('woo-elements/product', 'display'); ?>




<?php get_footer(); ?>