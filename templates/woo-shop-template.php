<?php 
/* 
Template Name: Woo Shop Template
*/
get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2><?php the_title(); ?></h2>

<?php the_content(); ?>

<?php endwhile; endif; ?>
</div>
</div>


<?php get_footer(); ?>